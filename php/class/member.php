<?php
require_once("session.php");
class Member extends Session
{
    private $mysqli;
    /**
     * 建立資料庫連線
     */
    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
        // $this->loginSet();
    }
    /**
     * 登入功能
     */
    public function login($account, $password)
    {
        // if (!isset($_REQUEST['account'])) {
        //     header('Location:member.php');
        // }

        $acFlag = preg_match('/^\w{6,12}$/', $account);
        $pwFlag = preg_match('/^\w{6,12}$/', $password);

        if (!($acFlag && $pwFlag)) {
            return json_encode(false);
        }
        $sql = "SELECT mId, mName, mPassword, mLevel FROM member WHERE mAccount = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();

        $result = $stmt->get_result();
        if (!($result->num_rows > 0)) {
            return json_encode(false);
        }
        $member = $result->fetch_object();

        if (password_verify($password, $member->mPassword)) {
            // $this->loginSet($member->mName,$member->mLevel,$member->mId);
            // $this->session['memberName'] = $member->mName;
            // $this->session['memberLevel']= $member->mLevel;
            // $this->session['memberId']= $member->mId;
            $_SESSION['memberName'] = $member->mName;
            $_SESSION['memberLevel'] = $member->mLevel;
            $_SESSION['memberId'] = $member->mId;
            return json_encode(true);
        } else {
            return json_encode(false);
        }
    }
    /**
     * 登出功能
     */
    public function logout()
    {
        session_destroy();
        return json_encode(true); 
    }
    /**
     * 註冊功能
     */
    public function register($name, $account, $password)
    {
        $acFlag = preg_match('/^\w{6,12}$/', $account);
        $pwFlag = preg_match('/^\w{6,12}$/', $password);
        $pwd = password_hash($password, PASSWORD_DEFAULT);

        if (!($acFlag && $pwFlag)) {
            return json_encode("error");
        }

        $sql = "INSERT INTO member(mName,mAccount,mPassword)" . "VALUES (?,?,?)";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('sss', $name, $account, $pwd);
        $msg = $stmt->execute();
        return ($msg) ? json_encode(true) : json_encode(false);
    }
}

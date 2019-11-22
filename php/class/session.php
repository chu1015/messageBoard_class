<?php
class Session
{
    /**
     * 儲存前端所需的會員資訊
     */
    public $user;
    public $session;
    // public function __construct(){
    //     session_start();
    // }
    public function getSession()
    {
        if (isset($_SESSION['memberName'])) {
            $this->user['name'] = $_SESSION['memberName'];
            $this->user['memberId'] = $_SESSION['memberId'];
            $this->user['memberLevel'] = $_SESSION['memberLevel'];
        } else {
            $this->user['name'] = "Guest";
            $this->user['memberLevel'] = "";
        }
        return $this->user;
    }
    public function loginSet($memberName, $memberLevel, $memberId)
    {
            $_SESSION['memberName'] = $memberName;
            $_SESSION['memberLevel'] = $memberLevel;
            $_SESSION['memberId'] = $memberId;
    }
}

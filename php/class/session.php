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
            // $this->user['name'] = $this->session['memberName'];
            // $this->user['memberId'] =$this->session['memberId'];
            // $this->user['memberLevel'] = $this->session['memberLevel'];
            $this->user['name'] = $_SESSION['memberName'];
            $this->user['memberId'] = $_SESSION['memberId'];
            $this->user['memberLevel'] = $_SESSION['memberLevel'];
        } else {
            $this->user['name'] = "Guest";
            $this->user['memberLevel'] = "";
        }
        return $this->user;
    }
    public function loginSet($name = null,$level = null,$pw = null)
    {
        $this->session['memberName'] = $name;
        $this->session['memberLevel'] = $level;
        $this->session['memberId'] = $pw;
    }
}

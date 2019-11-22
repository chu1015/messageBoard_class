<?php
##引用資料庫連線sql語句
require_once('sql.php');
##引用member相關類別
require_once('class/member.php');
session_start();
$member = new Member($mysqli);
/**
 * 透過method值導入Class方法
 */
switch($_POST["method"]){
    case "login":
        echo $member->login($_POST["account"], $_POST["password"]);
        break; 
    case "register":
        echo $member->register($_POST["name"], $_POST["account"], $_POST["password"]);
        break;
    case "logout":
        echo $member->logout();
        break;
}

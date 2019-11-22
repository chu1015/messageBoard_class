<?php
##引用資料庫連線sql語句
require_once('sql.php');
##引用message相關類別
require_once('class/message.php');
session_start();
$Message = new Message($mysqli);
/**
 * 透過method值導入Class方法
 */
switch($_POST["method"]){
    case "create" :
        echo $Message->create($_POST["subject"], $_POST["content"]);
        break;
    case "delete":
        echo $Message->delete($_POST["del"]);
        break;
    case "update":
        echo $Message->update($_POST["id"], $_POST["content"]);
        break;
}

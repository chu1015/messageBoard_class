<?php
##引用Smarty
require_once('../libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = true;
##引用資料庫連線sql語句
require_once('sql.php');
##引用message相關類別
require_once('class/message.php');
##引用member相關類別
require_once('class/member.php');
session_start();

$Message = new Message($mysqli);
$all = $Message->show();

$member = new Member($mysqli);
$user = $member->getSession();

##將資料庫取到的值以Smarty方法傳遞
$smarty->assign("user", $user);
$smarty->assign("all", $all);
$smarty->display('../templates/index.html');

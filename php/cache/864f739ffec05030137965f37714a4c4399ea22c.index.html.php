<?php
/* Smarty version 3.1.33, created on 2019-11-14 10:40:45
  from 'C:\xampp\htdocs\chu\test\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd211dc46d00_68075310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '350b977c92025214e22366ca1a4768f0aaf698f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\test\\templates\\index.html',
      1 => 1573724394,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5dcd211dc46d00_68075310 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
            integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous" />
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- <script src="../js/index.js"></script> -->
    <!-- <script src="js/index.js"></script> -->
    <title>首頁</title>
</head>

<body>
    <!-- 登入登出 -->
    <div>
        <div id="inout" style="padding: 10px;">
        </div>
    </div>
    <script>
        $(document).ready(function () {
            if ('Guest' == 'Guest') {
                $("#inout").append(`
                <h3>Guest</h3>
                <a class="btn btn-info" style="position: absolute; right: 5%; top: 1%;" href="member.html">登入</a>                
            `)
            } else {
                $("#inout").append(`                
                <h3>${$user.name}</h3>
                <a class="btn btn-info" style="position: absolute; right: 1%; top: 1%;" id="logout" >登出</a>
            `)
            }


            $("#logout").click(function () {
                Swal.fire({
                    type: 'success',
                    title: '登出成功',
                    text: '2秒後跳轉',
                    timer: 2000
                }).then(function () {
                    $.ajax({
                        type: "post",
                        url: "../php/logout.php",
                        data: {
                            logout: "1"
                        },
                        success: function (e) {
                            if (e == "2") {
                                window.location.href = "member.html"
                            }
                        }
                    })
                })
            })
        })
    </script>
</body>

</html><?php }
}

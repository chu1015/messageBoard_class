<?php
/* Smarty version 3.1.33, created on 2019-11-14 08:38:34
  from 'C:\xampp\htdocs\chu\test\templates\member.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd047adf3230_11371417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a7bb5de14cd5d2945d500f1685b464e159ffcbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\test\\templates\\member.html',
      1 => 1573716152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd047adf3230_11371417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15296983375dcd047add6b13_65891115';
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>登入</title>

	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />

</head>

<body>

	<div class="row">


		<div class="col-md-6"
			style="margin: 100px; text-align: center; padding-top: 100px; background-color:cadetblue; width: 500px; height: 500px; position: absolute; left: 10%;">

			<h1>login</h1>

			<div class="input" style="width: 80%; margin: auto; padding: 1%;">
				<!-- <label for="">帳號</label> -->
				<input type="account" class="form-control" id="loginAccount" name="account" placeholder="帳號" required
					autofocus />
			</div>

			<div class="input" style="width: 80%; margin: auto; padding: 1%;">
				<!-- <label for="">密碼</label> -->
				<input type="password" class="form-control" id="loginPassword" name="password" placeholder="密碼"
					required />
			</div>
			<!-- <div>
				<label><input type="checkbox" value="remamber me" />記住我</label>
			</div> -->
			<div>
				<button style="width: 75%; margin: auto;" class="btn btn-warning btn-lg btn-block" id="login"
					type="submit">登入</button>
			</div>
		</div>
		<hr>
		<div class="col-md-6"
			style="margin: 100px; text-align: center; padding-top: 100px; background-color:skyblue; width: 530px;  height: 510px; position: absolute; right: 10%;">

			<h1 style="font-weight: bold;">regist</h1>

			<div class="input" style="width: 80%; margin: auto; padding: 1%;">
				<input type="text" class="form-control" id="name" placeholder="暱稱" required />
			</div>
			<div class="input" style="width: 80%; margin: auto; padding: 1%;">
				<!-- <label for="">帳號</label> -->
				<input type="account" class="form-control" id="account" placeholder="帳號" required />
			</div>

			<div class="input" style="width: 80%; margin: auto; padding: 1%;">
				<!-- <label for="">密碼</label> -->
				<input type="password" class="form-control" id="password" placeholder="密碼" required />
			</div>
			<br>
			<div>
				<button style="width: 75%; margin: auto;" class="btn btn-info btn-primary btn-lg " type="submit"
					id="regist">確定</button>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
>
		$(document).ready(function () {
			$("#regist").click(function () {
				// alert("123");
				$.ajax({
					type: "post",
					url: "reg.php",
					data: {
						name: $("#name").val(),
						account: $("#account").val(),
						password: $("#password").val(),
					},
					success: function (e) {
						if (e == "success") {
							// alert("註冊成功");
							swal.fire({
								type: 'success',
								title: '註冊成功',
								text: '2秒後跳轉',
								timer: 2000
							}).then(
								function () {
									window.location.href = "member.php"
								}
							)
						} else if (e == "error") {
							// alert("帳號已存在");
							swal.fire({
								type: 'error',
								title: "格式不符<3",
							})
						} else {
							swal.fire({
								type: 'error',
								title: "帳號已存在<3",
							})
						}
					}
				})


			})
			$("#login").click(function () {
				$.ajax({
					type: "post",
					url: "../php/login.php",
					data: {
						account: $("#loginAccount").val(),
						password: $("#loginPassword").val(),
					},
					success: function (c) {
						if (c == "success") {
							swal.fire({
								type: 'success',
								title: '登入成功',
								text: '2秒後回首頁',
								timer: 2000
							}).then(
								function () {
									window.location.href = "index.html"
								}
							)
						} else if(c == "fail"){
							Swal.fire({
								type: 'error',
								title: '帳號或密碼錯誤!',
							}).then(
								function () {
									$("#loginPassword").val("");
								}
							)
						}else{
							Swal.fire({
								type: 'error',
								title: '帳號不存在',
							}).then(
								function () {
									$("#loginPassword").val("");
									$("#loginAccount").val("");
								}
							)
						}
					}
				})
			})

		})
	<?php echo '</script'; ?>
>
</body>

</html><?php }
}

<?php
/* Smarty version 3.1.33, created on 2019-11-18 10:12:47
  from 'C:\xampp\htdocs\chu\msgBoard_class\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd2608fe1c1c2_12996366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1a87a2d476a1c60fc7de488276087cebbbe8a13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\msgBoard_class\\templates\\index.html',
      1 => 1574068365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd2608fe1c1c2_12996366 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"><?php echo '</script'; ?>
>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
            integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous" />
        <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"><?php echo '</script'; ?>
> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
    <!-- <?php echo '<script'; ?>
 src="../js/index.js"><?php echo '</script'; ?>
> -->
    <!-- <?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
> -->
    <!-- <?php echo '<script'; ?>
 src="../../js/index.js"><?php echo '</script'; ?>
> -->
    <title>首頁</title>
</head>

<body>
    <!-- 登入登出 -->
    <div>
        <div id="inout" style="padding: 10px;">
        </div>
    </div>
    <br>
    <div>
        <div>
            <div>
                <main role="main" class="container bootdey.com">
                    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
                        <img class="mr-3" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="48"
                            height="48">
                        <h1 style="padding-left:35%; font-size:5rem;">MessageBoard</h1>
                    </div>
                    <div class="my-3 p-3 bg-white rounded box-shadow">
                        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                        <div id="msg">
                        </div>
                        <div id="speech">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <!-- 內容 -->
                            <div class="media text-muted pt-3">
                                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                    <h4><strong class="d-block text-gray-dark">發文者:<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</strong></h4>
                                    <h5>主題:<?php echo $_smarty_tpl->tpl_vars['value']->value['subject'];?>
</h5>
                                    <small style="margin-right:0;"><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</small>
                                    <pre style="border: 0;"><h5>內容:<br>&emsp;&emsp;<?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</h5></pre>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['memberLevel'] == "admin") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['memberId'] == $_smarty_tpl->tpl_vars['user']->value['memberId']) {?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</button>
                                    <button type="button" onclick="del(`<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
`)"class="btn btn-danger">刪除</button>
                                    <!-- Modal -->
                            <div class="modal fade" id="myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" role="dialog">
                                    <div class="modal-dialog">
    
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['subject'];?>
</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>內容:</p>
                                                <pre style="border: 0;"><textarea style="resize: none;" id="content<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" cols="51" rows="6"
                                                    required><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</textarea></pre>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" onclick="upd(`<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
`)" class="btn btn-success"
                                                    data-dismiss="modal">確認</button>
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">取消</button>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                    <?php } else { ?>
                                    <button type="button" onclick="del(`<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
`)"class="btn btn-danger">刪除</button>
                                    <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['name'] != "Guest") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['memberId'] == $_smarty_tpl->tpl_vars['user']->value['memberId']) {?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"data-target="#myModal<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</button>
                                    <button type="button" onclick="del(`<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
`)"class="btn btn-danger">刪除</button>
                                    <!-- Modal -->
                            <div class="modal fade" id="myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" role="dialog">
                                    <div class="modal-dialog">
    
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['subject'];?>
</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>內容:</p>
                                                <pre style="border: 0;"><textarea style="resize: none;" id="content<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" cols="51" rows="6"
                                                    required><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</textarea></pre>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" onclick="upd(`<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
`)" class="btn btn-success"
                                                    data-dismiss="modal">確認</button>
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">取消</button>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                    <?php }?>
                                    <?php }?>

                                </p>
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </main>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != "Guest") {?>
                    <form style="margin-top:5%; margin-left: 30%; margin-right: 30%;">
                        <table
                            style=" border:0; width: 800; align-content: center; margin-left: 150px;margin-right: 100px;margin-top: 50px;">
                            <tr style="background-color: cornflowerblue; align-content: center;">
                                <td colspan="2">
                                    <font style="color: #FFFFFF;">輸入新留言</font>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 15%;">主題</td>
                                <td style="width: 85%;"><input type="text" id="subject" size="50" required></td>
                            </tr>
                            <tr>
                                <td style="width: 15%;">內容</td>
                                <td style="width: 85%;"><textarea style="resize: none;" id="content" cols="51" rows="6"
                                        required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input class="btn btn-info btn-primary" id="message" type="button" value="留言"
                                        onclick="">
                                    <input class="btn btn-info btn-primary" type="reset" value="重新輸入">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php }?>
                </div>
            </div>
            <style>
                body {
                    background: #f5f5f5
                }

                .text-white-50 {
                    color: rgba(255, 255, 255, .5);
                }

                .bg-blue {
                    background-color: #00b5ec;
                }

                .border-bottom {
                    border-bottom: 1px solid #e5e5e5;
                }

                .box-shadow {
                    box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
                }
            </style>
        </div>


    </div>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            if ('<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
' == 'Guest') {
                $("#inout").append(`
                <h3>Guest</h3>
                <a class="btn btn-info" style="position: absolute; right: 5%; top: 1%;" href="../../templates/member.html">登入</a>                
            `)
            } else {
                $("#inout").append(`                
                <h3><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h3>
                <a class="btn btn-info" style="position: absolute; right: 1%; top: 1%;" id="logout" >登出</a>
            `)
            }

            $("#logout").click(function () {
                $.ajax({
                    type: "post",
                    url: "logout.php",
                    data: {
                        logout: "1"
                    },
                    success: function (e) {
                        if (e == "2") {
                            Swal.fire({
                                type: 'success',
                                title: '登出成功',
                                text: '2秒後跳轉',
                                timer: 2000
                            }).then(function () {
                                window.location.href = "class/index.php"
                            })
                        }
                    }
                })
            })
            $("#message").click(function () {
                $.ajax({
                    type: "post",
                    url: "../messageSwitch.php",
                    data: {
                        method:"create",
                        subject: $("#subject").val(),
                        content: $("#content").val(),
                    },
                    success: function (c) {
                        if (c == "success") {
                            swal.fire({
                                type: "success",
                                title: "留言成功",
                                text: "2秒後回首頁",
                                timer: 2000
                            }).then(function () {
                                window.location.href = "index.php"
                            })
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: '留言失敗',
                            }).then(function () {
                                window.location.href = "index.php"
                            })
                        }
                    }
                })
            })
        })

        function del(e) {
            // console.log(e);
            $.ajax({
                type: "post",
                url: "../delete.php",
                data: {
                    del: e,
                },
                success: function (e) {
                    if (e == "success") {
                        swal.fire({
                            type: 'success',
                            title: '留言已刪除',
                            timer: 1000,
                        }).then(
                            function () {
                                window.location.href = "index.php"
                            }
                        )
                    }
                }
            })
        }
        function upd(e) {
            $.ajax({
                type: "post",
                url: "../update.php",
                data: {
                    upd: e,
                    content: $("#content" + e).val(),
                },
                success: function (e) {
                    if (e == "success") {
                        swal.fire({
                            type: 'success',
                            title: '留言已修改',
                            timer: 1000,
                        }).then(
                            function () {
                                window.location.href = "index.php"
                            }
                        )
                    }
                }
            })
        }



    <?php echo '</script'; ?>
>
</body>

</html><?php }
}

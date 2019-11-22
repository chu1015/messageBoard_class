<?php
/* Smarty version 3.1.33, created on 2019-11-22 10:30:57
  from 'C:\xampp\htdocs\chu\msgBoard_class\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7aad1a39d17_55020546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1926a6ce34fe546bec1c8ecc84e4d7405784ba7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\msgBoard_class\\templates\\index.html',
      1 => 1574415053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd7aad1a39d17_55020546 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@8"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/index.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../css/index.css">
    <title>首頁</title>
</head>

<body>
    <!-- 登入登出 -->
    <div>
        <div class="inout" id="inout">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['name'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_prefixVariable1;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'Guest') {?>
            <h3>Guest</h3>
            <a class="btn btn-info login" href="../templates/member.html">登入</a>
            <?php } else { ?>
            <h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['user']->value['name'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</h3>
            <a class="btn btn-info logout" id="logout">登出</a>
            <?php }?>
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
                        <h1 class="MessageBoard">MessageBoard</h1>
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
                                    <h4><strong class="d-block text-gray-dark">發文者:<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['author'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</strong></h4>
                                    <h5>主題:<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['subject'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</h5>
                                    <small class="date"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['date'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</small>
                                    <pre class="content"><h5>內容:<br>&emsp;&emsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['content'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</h5></pre>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['memberLevel'] === 1) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['memberId'] == $_smarty_tpl->tpl_vars['user']->value['memberId']) {?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">修改</button>
                                    <button type="button" onclick="del(`<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
`)"
                                        class="btn btn-danger">刪除</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['value']->value['subject'];?>
</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>內容:</p>
                                                    <pre class="pre"><textarea class="textarea" id="content<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
" cols="51" rows="6"
                                                    required><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['content'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
</textarea></pre>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="upd(`<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
`)"
                                                        class="btn btn-success" data-dismiss="modal">確認</button>
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">取消</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    <button type="button" onclick="del(`<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
`)"
                                        class="btn btn-danger">刪除</button>
                                    <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['name'] != "Guest") {?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value['memberId'] == $_smarty_tpl->tpl_vars['user']->value['memberId']) {?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
">修改</button>
                                    <button type="button" onclick="del(`<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
`)"
                                        class="btn btn-danger">刪除</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['subject'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>內容:</p>
                                                    <pre class="pre"><textarea class="textarea" id="content<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
" cols="51" rows="6"
                                                    required><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['content'];
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
</textarea></pre>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="upd(`<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
`)"
                                                        class="btn btn-success" data-dismiss="modal">確認</button>
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
                    <nav class="npage" aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['num']->step = 1;$_smarty_tpl->tpl_vars['num']->total = (int) ceil(($_smarty_tpl->tpl_vars['num']->step > 0 ? $_smarty_tpl->tpl_vars['res']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['res']->value)+1)/abs($_smarty_tpl->tpl_vars['num']->step));
if ($_smarty_tpl->tpl_vars['num']->total > 0) {
for ($_smarty_tpl->tpl_vars['num']->value = 1, $_smarty_tpl->tpl_vars['num']->iteration = 1;$_smarty_tpl->tpl_vars['num']->iteration <= $_smarty_tpl->tpl_vars['num']->total;$_smarty_tpl->tpl_vars['num']->value += $_smarty_tpl->tpl_vars['num']->step, $_smarty_tpl->tpl_vars['num']->iteration++) {
$_smarty_tpl->tpl_vars['num']->first = $_smarty_tpl->tpl_vars['num']->iteration === 1;$_smarty_tpl->tpl_vars['num']->last = $_smarty_tpl->tpl_vars['num']->iteration === $_smarty_tpl->tpl_vars['num']->total;?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['num']->value) {?>
                            <li class="page-item"><a class="page-link btn btn-primary disabled" href="?page=<?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
</a></li>
                            <?php } else { ?>
                            <li class="page-item"><a class="page-link btn btn-primary active" href="?page=<?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_prefixVariable24 = ob_get_clean();
echo $_prefixVariable24;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['num']->value;
$_prefixVariable25 = ob_get_clean();
echo $_prefixVariable25;?>
</a></li>
                            <?php }?>
                            <?php }
}
?>
                        </ul>
                      </nav>
                </main>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != "Guest") {?>
                    <form class="newMsgForm">
                        <table class="newMsgTable">
                            <tr class="newMsgTr">
                                <td colspan="2">
                                    <font class="newMsgfont">輸入新留言</font>
                                </td>
                            </tr>
                            <tr>
                                <td class="newMsgTitle">主題</td>
                                <td class="newMsginput"><input type="text" id="subject" size="50" required></td>
                            </tr>
                            <tr>
                                <td class="newMsgTitle">內容</td>
                                <td class="newMsginput"><textarea class="textarea" id="content" cols="51" rows="6"
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
        </div>
    </div>
</body>

</html><?php }
}

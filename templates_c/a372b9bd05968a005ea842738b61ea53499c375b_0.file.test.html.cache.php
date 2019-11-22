<?php
/* Smarty version 3.1.33, created on 2019-11-14 07:41:53
  from 'C:\xampp\htdocs\chu\test\templates\test.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccf73158a6e4_32609684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a372b9bd05968a005ea842738b61ea53499c375b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\test\\templates\\test.html',
      1 => 1573713713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccf73158a6e4_32609684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '970269405dccf731550a80_49612452';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous" />
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
 src="js/index.js"><?php echo '</script'; ?>
> -->
    
        <title>首頁</title>
        <h1>
            <?php echo $_smarty_tpl->tpl_vars['member']->value;?>

        </h1>
    </head>
<body>
     <!-- 登入登出 -->
     <div>
        <div style="padding: 10px;">
            <?php echo '<script'; ?>
>
                if ("<?php echo $_smarty_tpl->tpl_vars['member']->value['neame'];?>
"!=""){               
                    <h3>Guest</h3>
                    <a class="btn btn-info" style="position: absolute; right: 5%; top: 1%;" href="member.php">登入</a>                
                }
                else{                
                    <h3><?php echo $_smarty_tpl->tpl_vars['member']->value['neame'];?>
</h3>
                    <a class="btn btn-info" style="position: absolute; right: 1%; top: 1%;" id="logout" >登出</a>
                }
                <?php echo '</script'; ?>
>
        </div>

    </div>
</body>
</html><?php }
}

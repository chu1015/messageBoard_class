<?php
/* Smarty version 3.1.33, created on 2019-11-14 07:21:32
  from 'C:\xampp\htdocs\chu\test\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccf26c1423f8_76602514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11bd4e4777825becfe1e264f0da37ecb623d9142' => 
    array (
      0 => 'C:\\xampp\\htdocs\\chu\\test\\templates\\index.html',
      1 => 1573712489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccf26c1423f8_76602514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4327228965dccf26c10ff85_83748983';
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
</head>

<body>
    <!-- 登入登出 -->
    <div>
        <div style="padding: 10px;">
            
            if (<?php echo $_smarty_tpl->tpl_vars['member']->value['neame'];?>
!=""){               
                <h3>Guest</h3>
                <a class="btn btn-info" style="position: absolute; right: 5%; top: 1%;" href="member.php">登入</a>                
            }
            else{                
                <h3><?php echo $_smarty_tpl->tpl_vars['member']->value['neame'];?>
</h3>
                <a class="btn btn-info" style="position: absolute; right: 1%; top: 1%;" id="logout" >登出</a>
            }
        </div>

    </div>

    <br>

    <div>
        <div>
            <div>
                <main role="main" class="container bootdey.com">
                    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow">
                        <img class="mr-3" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" width="48" height="48">
                        <h1 style="padding-left:35%; font-size:5rem;">MessageBoard</h1>
                        <!-- <div class="lh-100">
                            <h5>範例</h5>
                            <h6 class="mb-0 text-white lh-100">John Doe</h6>
                            <small>Messages</small>
                        </div> -->
                    </div>
                    <div class="my-3 p-3 bg-white rounded box-shadow">
                        <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                        <div id="msg">
                        </div>
                    </div>
                </main>
                <div>

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
    </div>
</body>

</html><?php }
}

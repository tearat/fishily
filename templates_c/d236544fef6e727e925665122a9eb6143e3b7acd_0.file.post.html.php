<?php
/* Smarty version 3.1.30, created on 2018-03-29 14:43:16
  from "C:\home\openserver\OSPanel\domains\fishily.ar\views\post.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abcd15461fd73_71344471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd236544fef6e727e925665122a9eb6143e3b7acd' => 
    array (
      0 => 'C:\\home\\openserver\\OSPanel\\domains\\fishily.ar\\views\\post.html',
      1 => 1522323791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abcd15461fd73_71344471 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="parent" class="vertical-center">
    <div id="index">
        <a href="/"><h1>fishily opinion <img src="../img/logo.png" alt="" class="logo"></h1></a>
        <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['date'];?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h2>
<!--        <p><?php echo '<?php ';?>echo $data["body"]; <?php echo '?>';?></p>-->
        <p id="body"><?php echo $_smarty_tpl->tpl_vars['data']->value['body'];?>
</p>
        <div class="center">
            <a href="/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" target="_blank">
                <img src="/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['img'];?>
" alt="" class="img-post">
            </a>
        </div>
        <a href="/" class="back">« Back</a>
    </div>
</div>



<?php echo '<script'; ?>
>
    document.getElementById('body').innerHTML = document.getElementById('body').innerHTML.replace(/\n/g, "<br>");
<?php echo '</script'; ?>
>
<?php }
}

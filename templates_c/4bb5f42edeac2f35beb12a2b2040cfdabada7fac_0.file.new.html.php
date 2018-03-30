<?php
/* Smarty version 3.1.30, created on 2018-03-29 15:22:46
  from "C:\home\openserver\OSPanel\domains\fishily.ar\views\new.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abcda964c0e38_87628593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb5f42edeac2f35beb12a2b2040cfdabada7fac' => 
    array (
      0 => 'C:\\home\\openserver\\OSPanel\\domains\\fishily.ar\\views\\new.html',
      1 => 1522326156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abcda964c0e38_87628593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="parent" class="vertical-center">
    <div id="index">
        <a href="/"><h1>fishily opinion <img src="../img/logo.png" alt="" class="logo"></h1></a>
        <form action="/app/app.controller.php?action=create" method="post" class="newpost">
            <h2>Tag:</h2>
            <select name="tag">
                <option value="life">thoughts</option>
                <option value="life">life</option>
                <option value="life">coding</option>
                <option value="life">art</option>
                <option value="life">other</option>
            </select>
            <h2>Title:</h2>
            <input name="title" type="text" autocomplete="off">
            <h2>Text:</h2>
            <textarea name="text" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit" class="submit">
            <a href="/" class="back">« Back</a>
        </form>
    </div>
</div>

</body>
</html><?php }
}

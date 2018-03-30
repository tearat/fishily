<?php
/* Smarty version 3.1.30, created on 2018-03-30 13:36:01
  from "C:\home\openserver\OSPanel\domains\fishily.ar\views\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5abe13112dc6c5_19257412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beda757f0bff3cf43f9547d20a6b855bc38b8808' => 
    array (
      0 => 'C:\\home\\openserver\\OSPanel\\domains\\fishily.ar\\views\\index.html',
      1 => 1522406135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abe13112dc6c5_19257412 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="parent">
    <div id="index">
        <div id="app">
            <a href="/"><h1>fishily opinion <img src="../img/logo.png" alt="" class="logo"></h1></a>
            <ul>
               
                <div class="v_post" v-if="post_visible">
                    
                        <h2>{{posts[show_id].title}}</h2>
                        <strong><p>tag: {{posts[show_id].tag}}, date: {{posts[show_id].date}}</p></strong>
                        <p>{{posts[show_id].body}}</p>
                    
                    <a href="#" v-on:click="close_post"><h2 style="text-align: center; margin-bottom: 20px">close</h2></a>
                </div>
                
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                    <a href="#" v-on:click="show_add_post_form" class="new_post_btn" v-if="add_post_btn_visible">новый пост</a>
                <?php }?>
                
                <div class="v_add_post" v-if="add_post_form_visible">
                        <h2>Категория:</h2>
                        <select name="tag" id="input_tag" v-model="post_tag">
                            <option value="life">мысли</option>
                            <option value="life">жизнь</option>
                            <option value="life">кодинг</option>
                            <option value="life">искусство</option>
                            <option value="life">другое</option>
                        </select>
                        <h2>Заголовок:</h2>
                        <input name="title" type="text" autocomplete="off" id="input_title" v-model="post_title">
                        <h2>Текст:</h2>
                        <textarea name="body" id="" cols="30" rows="4" id="input_text" v-model="post_body"></textarea>
                        <a href="#" v-on:click="send_form" class="btn_send">создать!</a>
                        <a href="#" v-on:click="close_add_post"><h2 style="text-align: center; margin-bottom: 20px">закрыть</h2></a>
                </div>
                
                <!--                -->
                
                <div class="posts" v-if="posts_visible">
                    <input type="search" placeholder="title or text..." class="input_search" v-model="search">
                    <input type="search" placeholder="tag..." class="input_search_tag" v-model="search_tag">

                    <li v-for="(post, index) in reversedPosts" 
                        v-if="condition(post.title, post.body, search) && condition_tag(post.tag, search_tag)" >
                        
                            <a href="#" class="post" v-on:click="show_post(index)">{{post.date}}   |   {{post.title}}</a>
                            <a href="#" class="tag" v-on:click="set_tag(post.tag)">{{post.tag}}</a>
                        
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                            <a href="#" class="delete" v-on:click="delete_post(post.id)">del</a>
                        <?php }?>
                    </li>
                </div>
                
                
            </ul>

            <div class="auth">
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                    <a href="/app/app.controller.php?action=logout" class="logout">выйти</a>
                <?php } else { ?>
                    <form action="/app/app.controller.php?action=login" method="post" name="form1">
                        <label>Пароль:</label>
                        <input type="password" name="pass" autocomplete="off">
                    </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>
   

<?php echo '<script'; ?>
 src="/js/index.vue.js"><?php echo '</script'; ?>
>
<?php }
}

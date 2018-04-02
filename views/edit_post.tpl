<div class="grid grid_1" v-if="edit_post_form_visible">
    <div class="cell">
        <h2>Заголовок:</h2>
    </div>
    <div class="cell">
        <input name="title" type="text" autocomplete="off" id="input_title" v-model="edit_title">
    </div>
    <div class="cell">
        <h2>Текст:</h2>
    </div>
    <div class="cell">
        <textarea name="body" id="" cols="30" rows="4" id="input_text" v-model="edit_body"></textarea>
    </div>
    <div class="cell">
        <h2>Категория:</h2>
    </div>
    <div class="cell">
        <select name="tag" id="input_tag" v-model="edit_tag">
            <option value="мысли">мысли</option>
            <option value="жизнь">жизнь</option>
            <option value="кодинг">кодинг</option>
            <option value="искусство">искусство</option>
            <option value="другое">другое</option>
        </select>
    </div>
    <button v-on:click="send_upd_form">сохранить</button>
    <button v-on:click="close_edit_post">закрыть</button>
</div>
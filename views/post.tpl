<div class="grid grid_1" v-if="post_visible">
    {literal}
        <div class="cell">
            <h2>{{posts[show_id].title}}</h2>
        </div>
        <div class="cell">
            <strong><p>tag: {{posts[show_id].tag}}, date: {{posts[show_id].date}}</p></strong>
        </div>
        <div class="cell">
            <p class="body">{{posts[show_id].body}}</p>
        </div>
    {/literal}
    <button v-on:click="show_edit_post_form">редактировать</button>
    <button v-on:click="close_post">закрыть</button>
</div>
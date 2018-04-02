<div v-if="posts_visible">
    <div class="grid grid_2">
        <input type="search" placeholder="title or text..." v-model="search">
        <input type="search" placeholder="tag..." v-model="search_tag">
    </div>

    <div class="grid grid_1">
        <div class="grid grid_3" v-for="(post, index) in reversedPosts" 
            v-if="condition(post.title, post.body, search) && condition_tag(post.tag, search_tag)">
            {literal}
                <div class="cell">
                    <p v-on:click="show_post(index)">{{post.date}}   |   {{post.title}}</p>
                </div>
                <div class="cell">
                    <p v-on:click="set_tag(post.tag)">{{post.tag}}</p>
                </div>
                <div class="cell">
                    <p v-on:click="delete_post(post.id)">del</p>
                </div>
            {/literal}
        </div>
        <div class="cell" v-if="no_posts">
            <p><strong>error: database is empty</strong></p>
        </div>
    </div>
</div>
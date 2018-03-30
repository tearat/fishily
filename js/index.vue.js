var app = new Vue({
    el: '#app',
    data: {
        posts: [
            {id: 1, title: 'data not loaded', text: "text", tag: 'error', date: "1.1.1"}
        ],
        search: '',
        search_tag: '',
        posts_visible: true,
        post_visible: false,
        add_post_btn_visible: true,
        add_post_form_visible: false,
        show_id: 1,
        post_tag: "",
        post_title: "",
        post_body: "",
    },
    methods: {
        condition: function (title, body, filter) {
            if ( title.toLowerCase().indexOf(filter.toLowerCase()) != -1 )
            { return -1; }
            else if ( body.toLowerCase().indexOf(filter.toLowerCase()) != -1 )
            { return -1; }
        },
        condition_tag: function (tag, filter) {
            if ( tag.toLowerCase().indexOf(filter.toLowerCase()) != -1 )
            { return -1; }
        },
        set_tag: function( tag ) {
            this.search_tag = tag;
            this.status = "By tag: "+tag;
        },
        show_post: function( id ) {
            this.post_visible = true;
            this.add_post_btn_visible = false;
            this.add_post_form_visible = false;
            this.show_id = id;
        },
        close_post: function() {
            this.add_post_btn_visible = true;
            this.post_visible = false;
        },
        show_add_post_form: function() {
            this.post_visible = false;
            this.posts_visible = false;
            this.add_post_btn_visible = false;
            this.add_post_form_visible = true;
        },
        close_add_post: function() {
            this.add_post_btn_visible = true;
            this.add_post_form_visible = false;
            this.posts_visible = true;
        },
        load_posts: function() {
            var new_posts;
            $.ajax({
                url: "/app/app.controller.php?action=load_all_posts",
                cache: false,
                async: false,
            }).done(function(data) {
                new_posts = JSON.parse(data);
            });
            return new_posts;
        },
        send_form: function() {
            $.ajax({
                type: "POST",
                url: "/app/app.controller.php?action=create",
                cache: false,
                async: false,
                data: { tag: this.post_tag, title: this.post_title, body: this.post_body }
            });
            this.close_add_post();
            this.posts = this.load_posts();
            this.post_tag = "";
            this.post_title = "";
            this.post_body = "";
        },
        delete_post: function( id ) {
            $.ajax({
                type: "POST",
                url: "/app/app.controller.php?action=delete",
                cache: false,
                async: false,
                data: { id: id }
            });
            this.posts = this.load_posts();
        },
    },
    computed: {
        reversedPosts: function () {
            return this.posts.reverse();
        }
    },
    mounted: function() {
        this.posts = this.load_posts();
        if ( window.location.href.indexOf('tag') != -1 )
        {
            var tag = window.location.href.split('/tag/')[1];
        }
    }
});
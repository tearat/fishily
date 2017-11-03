<template lang="pug">
    #parent
        #index
            //button(@click="toggleauth") auth on\off
            p {{loaded}}
            a(href="/")
                h1
                    | fishily opinion
                    img(src="../img/logo.png" alt="" class="logo")
            h2(v-if="page == 'tag'")
                a(href="/") ... / test
            h2(v-if="page == 'index'") All posts
            ul
                li(v-for="post in posts")
                    router-link.post(to="/post/1") {{post.title}}
                    router-link.tag(to="{ name: 'book', params: { id: index } }") {{post.tag}}
                    a.delete(href="/hz" v-if="authorized") del
            .auth
                form(action="/" method="post" v-if="!authorized" v-on:submit.prevent="onAuth")
                    h2 Auth:
                    input(type="password" name="pass" autocomplete="off" v-model="pass")
                h2(v-if="authorized") You authorized
                    a(href="/" class="logout" v-on:click="logout") logout
                a(href="/new" class="newpost" v-if="authorized") new post
</template>

<script>
    var SHA256 = require("crypto-js/sha256");
    var esc = require("../js/esc");

    var $ = require("jquery");

    function ololo() {
        $.ajaxSetup({
            cache: false
        });
        var posts = $.get('./posts.txt', function(data) {
            alert(data);
            return data;
        });
    }

    module.exports = {
        data: function() {
            return {
                authorized: false,
                pass: "",
                page: "index",
                loaded: "1",
                posts: [],
                posts1: [{id: 0, title: "nothing to load", tag: "thoughts", body: "nope"}]
            }
        },
        methods: {
            toggleauth: function() {
                this.authorized = !this.authorized;
            },
            onAuth: function() {
                if (SHA256(this.pass) == "6c64e411823e09ae7e1b0a79bda18a7e82b183bff0f763f8badad600d4ede554") {
                    this.authorized = true;
                }
                this.pass = "";
            },
            logout: function() {
                this.authorized = false;
            },
            load_all: function() 
            {
                this.$http.get('./posts.txt').then(response => { this.loaded = response.body; }, 
                response => { });
            }
        },
        created: function() {
            this.load_all();
//            this.posts = this.load_all();
//            this.loaded = this.load_all();
        }
    }
</script>

<style lang="less">
    #index {}

</style>

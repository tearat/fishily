<template lang="pug">
    #parent
        #index
            //button(@click="toggleauth") auth on\off
            a(href="/")
                h1
                    | fishily opinion
                    img(src="../img/logo.png" alt="" class="logo")
            h2(v-if="page == 'tag'")
                a(href="/") ... / test
            h2(v-if="page == 'index'") All posts
            ul
                li
                    router-link.post(to="/post/1") post post post
                    router-link.tag(to="/tag/test") tag
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
    var esc = require("../esc");
    
    module.exports = {
        data: function() {
            return {
                authorized: false,
                pass: "",
                page: "index"
            }
        },
        methods: {
            toggleauth: function() {
                this.authorized = !this.authorized;
            },
            onAuth: function() {
                if ( SHA256(this.pass) == "6c64e411823e09ae7e1b0a79bda18a7e82b183bff0f763f8badad600d4ede554" )
                    {
                        this.authorized = true;
                    }
                this.pass = "";
            },
            logout: function() {
                this.authorized = false;
            }
        }
    }

</script>

<style lang="less">
    #index {}

</style>

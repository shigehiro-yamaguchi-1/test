<style lang="css" scoped> /* lang : css / scss / less */
@import "../css/style.css"; /* 共通CSS */
</style>

<template>
    <div id="app">
        <navbar></navbar>

        <div class="container">
            <router-view></router-view>
        </div>
        <hr>
        <div class="container-fluid">
            誰もが共感してしまう共通の内容
        </div>
    </div>
</template>


<script>
    export default {
        components: {
            navbar: require('../Navbar.vue'),
        },
    }
</script>
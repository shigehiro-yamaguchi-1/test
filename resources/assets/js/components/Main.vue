<style lang="scss" scoped> /* lang : css / scss / less */
@import "./scss/style.scss"; /* 共通CSS */

div {
    font-size: large;
    color: red;
    font-family: "Hiragino Kaku Gothic Pro";
}
</style>

<template>
    <!--ログイン後-->
    <div v-if="userState.authenticated">
        ログイン後に思わず涙を流してしまう言葉
    </div>
    <!--/ログイン後-->

    <!--ログイン前-->
    <p v-else>
        <router-link to="/login">ログイン</router-link>前に思わず笑ってしまう言葉
    </p>
    <!--/ログイン前-->
</template>

<script>
    import userStore from '../stores/userStore'
    export default {
        data() {
            return {
                userState: userStore.state,
            }
        },
    }
</script>
<template>
  <div>
    <toolbar></toolbar>
    <router-view></router-view>
    <app-footer></app-footer>
    <!-- <forum></forum> -->
    <!-- <createPost></createPost> -->
  </div>
</template>

<script>
import Toolbar from "./Toolbar";
import AppFooter from "./AppFooter";
// import Forum from "./forum/forum";
// import createPost from "./forum/createPost";

export default {
  name: "AppHome",
  components: { Toolbar, AppFooter }
};
</script>

<style>
#app {
  background-color: #e0e0e0;
}
</style>

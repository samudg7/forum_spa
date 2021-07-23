<template>
  <div>
    <toolbar></toolbar>
    <!-- <forum></forum> -->
    <router-view></router-view>
    <app-footer></app-footer>

    <!-- <createPost></createPost> -->
    <v-container>
      <v-layout row wrap>
        <v-flex xs8>
          <post v-for="post in posts" :key="post.path" :post="post"> </post>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
import Toolbar from "./Toolbar";
import AppFooter from "./AppFooter";
// import Forum from "./forum/forum";
// import createPost from "./forum/createPost";

import post from "./forum/post";

export default {
  name: "AppHome",
  components: { Toolbar, AppFooter, post },
  data() {
    return {
      posts: []
    };
  },

  created() {
    axios
      .get("/api/post")
      .then(
        res => (this.posts = res.data)
        //console.log(res);
      )
      .catch(error => console.log(error.response.data));
  }
};
</script>

<style>
#app {
  background-color: #e0e0e0;
}
</style>

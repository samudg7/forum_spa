<template>
  <!-- <v-container>
    <v-layout row wrap>
      <v-flex xs8> -->
  <div>
    <div class="container row">
      <post
        v-for="post in posts"
        :key="post.path"
        :post="post"
        class="ml-auto mr-auto"
      >
      </post>
    </div>
  </div>
  <!-- </v-flex>
    </v-layout>
  </v-container> -->
</template>

<script>
import post from "./post";
export default {
  name: "forum",
  data() {
    return {
      posts: []
    };
  },
  components: { post },
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

<style scoped></style>

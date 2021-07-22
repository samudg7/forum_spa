<template>
  <v-container>
    <v-layout row wrap>
      <v-flex xs8>
        <post v-for="post in posts" :key="post.path" :post="post"> </post>
      </v-flex>
    </v-layout>
  </v-container>
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

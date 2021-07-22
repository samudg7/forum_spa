<template>
  <v-card class="mx-auto" max-width="400">
    <v-card-title>{{ post.title }}</v-card-title>

    <v-card-text class="text--primary">
      <div>{{ post.body }}</div>
    </v-card-text>
    <v-card-text>{{ post.name }}</v-card-text>

    <v-card-text>{{ post.created_at }}</v-card-text>
    <v-card-actions>
      <v-btn color="orange" text @click="destroy(post.id)">
        Delete
      </v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
export default {
  props: ["post"],
  //name: "data"
  methods: {
    destroy(id) {
      axios
        .delete("/api/post/" + id)
        .then(res => this.$router.push("/createPost"))
        .then(res => this.$router.push("/forum"))

        // .then(res => (this.posts = res.data))
        .catch(error => console.log(error.response));
    }
  }
};
</script>

<style scoped></style>

<template>
  <v-card class="mx-auto" max-width="400">
    <v-card-title>{{ post.title }}</v-card-title>

    <v-card-text class="text--primary">
      <div>{{ post.body }}</div>
    </v-card-text>
    <v-card-text>{{ post.name }}</v-card-text>

    <v-card-text>{{ post.created_at }}</v-card-text>
    <v-card-actions>
      <v-btn color="orange" text>
        Delete
      </v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
export default {
  props: ["post"]
  //name: "data"
};
</script>

<style scoped></style>

<template>
  <v-toolbar color="#7CB342">
    <v-toolbar-title>
      forum_spa
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <div>
      <router-link to="/forum" style="text-decoration: none">
        <v-btn text color="#FFFFFF">Post list</v-btn>
      </router-link>
      <router-link to="/createPost" style="text-decoration: none">
        <v-btn text color="#FFFFFF">Add post</v-btn>
      </router-link>
    </div>
  </v-toolbar>
</template>

<script>
export default {
  name: "Toolbar"
};
</script>

<style scoped></style>

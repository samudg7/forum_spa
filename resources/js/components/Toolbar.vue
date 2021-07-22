<template>
  <v-toolbar>
    <v-toolbar-title>
      forum_spa
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <div>
      <router-link to="/forum">
        <v-btn text>Post list</v-btn>
      </router-link>
      <router-link to="/createPost">
        <v-btn text>Add post</v-btn>
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

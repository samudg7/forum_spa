<template>
  <v-toolbar color="#7CB342">
    <v-toolbar-title>
      Test Single Page Application Forum
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <div>
      <router-link to="/forum" style="text-decoration: none">
        <v-btn text color="#FFFFFF">Lista Post</v-btn>
      </router-link>
      <router-link to="/createPost" style="text-decoration: none">
        <v-btn text color="#FFFFFF">Aggiungi Post</v-btn>
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

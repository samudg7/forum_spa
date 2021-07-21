<template>
  <v-toolbar>
    <v-toolbar-title>
      forum_spa
    </v-toolbar-title>
    <v-spacer></v-spacer>
    <div>
      <router-link to="/forum">
        <v-btn text>Lista post</v-btn>
      </router-link>
      <router-link to="/createPost">
        <v-btn text>Aggiungi post</v-btn>
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

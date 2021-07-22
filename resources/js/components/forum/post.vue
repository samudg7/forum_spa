<template>
  <v-container grid-list-sm>
    <!-- <div class="text--primary"> -->
    <!-- Using the elevation prop -->
    <v-hover>
      <template v-slot:default="{ hover }">
        <v-card
          class="mx-auto pa-6"
          max-width="400"
          color="#7CB342"
          :elevation="hover ? 24 : 6"
        >
          <v-card-title>Title: {{ post.title }}</v-card-title>

          <v-card-text class="text--primary">
            <div>Description: {{ post.body }}</div>
          </v-card-text>
          <v-card-text>Author: {{ post.name }}</v-card-text>

          <v-card-text>Data/time creation: {{ post.created_at }}</v-card-text>
          <v-card-actions>
            <v-btn rounded color="#FFFFFF" @click="destroy(post.id)">
              <!-- Delete -->
              <!-- <v-icon color="orange">delete</v-icon> -->
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-trash-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"
                />
              </svg>
            </v-btn>
          </v-card-actions>
        </v-card>
      </template>
    </v-hover>

    <div class="my-6"></div>

    <!-- Using a dynamic class -->
    <!-- <v-hover>
      <template v-slot:default="{ hover }">
        <div
          :class="`elevation-${hover ? 24 : 6}`"
          class="mx-auto pa-6 transition-swing"
        ></div>
      </template>
    </v-hover> -->
    <!-- </div> -->
  </v-container>
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

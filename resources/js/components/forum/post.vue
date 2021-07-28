<template>
  <v-container grid-list-sm>
    <!-- <div class="text--primary"> -->
    <!-- Using the elevation prop -->
    <v-hover>
      <template v-slot:default="{ hover }">
        <v-card
          class="mx-auto pa-6"
          max-width="400"
          color="#FFFFFF"
          :elevation="hover ? 24 : 6"
        >
          <v-card-title>Titolo: {{ post.title }}</v-card-title>

          <v-card-text class="text--primary">
            <div>Descrizione: {{ post.body }}</div>
          </v-card-text>
          <v-card-text>Autore: {{ post.name }}</v-card-text>

          <v-card-text>Data/ora: {{ post.created_at }}</v-card-text>
          <v-card-actions>
            <v-fade-transition>
              <v-overlay v-if="hover" absolute color="#7CB342">
                <v-btn rounded color="#7CB342" @click="destroy(post.id)">
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
              </v-overlay>
            </v-fade-transition>
          </v-card-actions>
        </v-card>
      </template>
    </v-hover>

    <div class="my-6" color="#7CB342"></div>
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

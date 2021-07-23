<template>
  <v-container>
    <v-form @submit.prevent="createPost">
      <v-text-field
        label="Title"
        v-model="form.title"
        type="text"
        required
        color="#7CB342"
      ></v-text-field>

      <v-textarea
        label="Body"
        v-model="form.body"
        type="text"
        required
        rows="10"
        max-rows="15"
        color="#7CB342"
      ></v-textarea>

      <v-text-field
        label="Author"
        v-model="form.name"
        type="text"
        required
        color="#7CB342"
      ></v-text-field>

      <v-btn
        elevation="3"
        color="#7CB342"
        style="margin: 70px; margin-left: 0px"
        type="submit"
        :disabled="disabled"
        >Create</v-btn
      >
    </v-form>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      form: {
        title: null,
        body: null,
        name: null
      }
    };
  },
  methods: {
    createPost() {
      axios
        .post("/api/post", this.form)
        // .then(res => this.console.log(res.data))

        .then(res => this.$router.push(res.data))
        .then(res => this.$router.push("/forum"))

        .catch(error => console.log(error.response.data));
    }
  },
  //disabilita button se i campi sono vuoti
  computed: {
    disabled() {
      return !(this.form.title && this.form.body && this.form.name);
    }
  }
};
</script>

<style></style>

<template>
  <v-footer app bottom fixed padless>
    <v-col class="text-center" cols="12">
      {{ new Date().getFullYear() }} — <strong>Sync Lab Test</strong>
    </v-col>
  </v-footer>
</template>

<script>
export default {
  name: "AppFooter"
};
</script>

<style scoped></style>

<template>
  <v-row  align="center">
    <v-col cols="12" sm="12" class="d-none d-sm-none d-md-flex" md="7">
        <v-img class="mx-auto animation scale" src="./icon.png" max-width="86%"></v-img>
    </v-col>
    <v-col cols="12" sm="12" md="4">
        <Card class="animation-card"></Card>
    </v-col>
  </v-row>
</template>

<script>

import Card from '~/components/Login/CardLogin.vue'

export default {
  components: {
    Card,
  }
}
</script>

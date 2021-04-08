<template>
  <v-row align="center" class="pt-3">
    <v-col cols="12" offset-md="1" sm="12" md="4">
        <Card class="animation"></Card>
    </v-col>
    <v-col cols="12" sm="12" class="d-none d-sm-none d-md-flex" md="7">
        <v-img class="mx-auto animation-card scale" src="./update.png" max-width="80%"></v-img>
    </v-col>
  </v-row>
</template>

<script>
import Card from '~/components/Update/CardUpdate.vue'

export default {
  components: {
    Card,
  }
}
</script>

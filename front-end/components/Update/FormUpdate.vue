<template>
  <div class="my-6">
    <v-text-field
      outlined
      hide-details
      class="rounded-pill py-2"
      color="#866ec7"
      placeholder="Name"
    ></v-text-field>
    <v-text-field
      outlined
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Lastname"
    ></v-text-field>
    <v-text-field
      outlined
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Email"
    ></v-text-field>
    <v-text-field
      outlined
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Phone"
    ></v-text-field>

    <v-btn
      color="#866ec7"
      class="white--text font-weight-bold rounded-pill py-7 elevation-0"
      block
      @click="dialog = true"
      >Update</v-btn
    >

    <v-dialog v-model="dialog" max-width="290">
      <v-card class="pa-5">
        <v-card-text>
          <h3 class="text-center">Your data have been updated correctly!</h3>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn
            block
            color="#866ec7"
            class="white--text"
            @click="dialog = false"
          >
            Close
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dialog: false,
    };
  },
};
</script>

<style>
.v-text-field__slot {
  margin-left: 20px;
}
.theme--light.v-input input::placeholder,
.theme--light.v-input textarea::placeholder {
  color: rgba(0, 0, 0, 0.87);
  font-size: 14px;
}

.v-input--selection-controls .v-input__slot > .v-label,
.v-input--selection-controls .v-radio > .v-label {
  font-size: 14px;
}

.size-14 {
  font-size: 14px !important;
}
</style>
<template>
  <div class="my-6">
    <v-text-field
      outlined
      hide-details
      class="rounded-pill py-2"
      color="#866ec7"
      placeholder="Email or Username"
    ></v-text-field>
    <v-text-field
      outlined
      color="#866ec7"
      type="password"
      hide-details
      class="rounded-pill py-3"
      placeholder="Password"
    ></v-text-field>

    <div class="d-flex justify-space-between">
      <v-checkbox
        class="ma-0 pa-0"
        color="#866ec7"
        label="Remember me"
      ></v-checkbox>

      <a href="#" class="purple-text size-14">Forgot Password?</a>
    </div>

    <v-btn
      color="#866ec7"
      class="white--text font-weight-bold rounded-pill py-7 elevation-0"
      block
      @click="$router.push({path:'/update'})"
      >LOGIN NOW</v-btn
    >

    
  </div>
</template>


<style>
.v-text-field__slot {
  margin-left: 20px;
}
.theme--light.v-input input::placeholder,
.theme--light.v-input textarea::placeholder {
  color: rgba(0, 0, 0, 0.87);
  font-size: 14px;
}

.v-input--selection-controls .v-input__slot > .v-label, .v-input--selection-controls .v-radio > .v-label{
  font-size: 14px;

}

.size-14{
  font-size: 14px !important;
}
</style>
<template>
  <div class="my-6">
    <v-text-field
      outlined
      hide-details
      v-model="form.name"
      class="rounded-pill py-2"
      color="#866ec7"
      placeholder="Name"
    ></v-text-field>
    <v-text-field
      outlined
      v-model="form.lastname"
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Lastname"
    ></v-text-field>
    <v-text-field
      v-model="form.email"
      outlined
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Email"
    ></v-text-field>
    <v-text-field
      outlined
      v-model="form.phone"
      color="#866ec7"
      hide-details
      class="rounded-pill py-3"
      placeholder="Phone"
    ></v-text-field>

    <v-btn
      color="#866ec7"
      class="white--text font-weight-bold rounded-pill py-7 elevation-0"
      block
      @click="updateUser"
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

    <v-snackbar :color="snackbarColor" v-model="snackbar">
      {{ snackbarText }}

      <template v-slot:action="{ attrs }">
        <v-btn color="white" text v-bind="attrs" @click="snackbar = false">
          Close
        </v-btn>
      </template>
    </v-snackbar>
  </div>
</template>

<script>
export default {
  data() {
    return {
      snackbar: false,
      snackbarText: "",
      snackbarColor: "red",

      dialog: false,

      form: {
        id: "",
        name: "",
        lastname: "",
        email: "",
        phone: "",
      },
    };
  },
  mounted() {
    let id = window.localStorage.getItem("id");
    if (!id) {
      this.$router.push({ path: "/" });
    }

    this.form.id = id;
    this.getUser();
  },

  methods: {
    getUser() {
      this.$axios
        .$get(`/api/user/${this.form.id}`)
        .then((res) => {
          this.form = {
            id: res.data.id,
            name: res.data.name,
            lastname: res.data.lastname,
            email: res.data.email,
            phone: res.data.phone,
          };
        })
        .catch((err) => {
          this.snackbar = true;
          this.snackbarText = err.response.data.message;
        });
    },
    updateUser() {
      if (this.form.email != "" && this.form.name != "") {
        this.$axios
          .$put(`/api/user/${this.form.id}`, this.form, null)
          .then((res) => {

            this.dialog = true
          })
          .catch((err) => {
            this.snackbar = true;
            this.snackbarText = err.response.data.message;
          });
      } else {
        this.snackbar = true;
        this.snackbarText = "Debes llenar todos los campos";
      }
    },

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
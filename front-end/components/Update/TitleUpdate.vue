<template>
  <div>
    <h1 class="black--text bolder">
      Almost there! <br />
      <br />
      Update your data
    </h1>
    <h3 class="grey--text pt-5">
      Don't need to update?
      <u @click="exit" class="cursor-pointer purple-text"
        >Go back</u
      >
    </h3>
  </div>
</template>

<script>
export default {
  methods: {
    exit() {
      window.localStorage.removeItem("id");
      this.$router.push({ path: "/" });
    },
  },
};
</script>

<style>
.cursor-pointer {
  cursor: pointer;
}
</style>
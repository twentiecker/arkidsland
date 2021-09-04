<template>
  <div>
    <b-navbar toggleable="lg" type="light">
      <!-- <b-navbar-brand><strong>Arkidsland</strong></b-navbar-brand> -->
      <b-navbar-brand to="/">
        <img
          src="../assets/logo.png"
          class="d-inline-block align-center"
          alt="Arkidsland"
        />
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <b-navbar-nav>
          <b-nav-item to="/">Home</b-nav-item>
          <b-nav-item to="/about">About Us</b-nav-item>
        </b-navbar-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <b-nav-item to="/login" v-if="!user">Login</b-nav-item>
          <b-nav-item to="/signup" v-if="!user">Sign Up</b-nav-item>
          <b-nav-item v-if="user" @click="logout">Logout</b-nav-item>
          <b-nav-form>
            <b-form-input
              size="sm"
              class="mr-sm-2"
              placeholder="Search"
            ></b-form-input>
            <b-button size="sm" class="my-2 my-sm-0" type="submit"
              >Search</b-button
            >
          </b-nav-form>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  // props: ["user"],
  methods: {
    logout() {
      // localStorage.removeItem("user");
      this.$store.dispatch("user", null);
      this.$router.push("/");
    },
  },
  computed: {
    ...mapGetters(["user"]),
  },
};
</script>

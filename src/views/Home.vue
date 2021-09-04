<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <b-container fluid md class="mt-2">
      <h6 v-if="user" align="left">Hi, {{ user.first }} {{ user.last }}</h6>
      <h6 v-if="!user" align="left">Selamat Datang</h6>
      <Banner />
    </b-container>
    <b-container fluid md class="mt-2">
      <Highest />
    </b-container>
    <b-container fluid md class="mt-2">
      <New />
    </b-container>
    <b-container fluid md class="mt-2">
      <Favourites />
    </b-container>
  </div>
</template>

<script>
// @ is an alias to /src
import Banner from "@/components/Banner.vue";
import Highest from "@/components/Highest.vue";
import New from "@/components/New.vue";
import Favourites from "@/components/Favourites.vue";
import { mapGetters } from "vuex";

export default {
  name: "Home",
  // props: ["user"],
  components: {
    Banner,
    Highest,
    New,
    Favourites,
  },
  computed: {
    ...mapGetters(["user"]),
  },
  // data() {
  //   return {
  //     user: null,
  //   };
  // },
  // created: function() {
  //   let self = this;

  //   self.user = JSON.parse(localStorage.getItem("user"));
  // },
};
</script>

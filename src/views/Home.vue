<template>
  <div class="home">
    <!-- <img alt="Vue logo" src="../assets/logo.png" /> -->
    <b-container fluid md class="mt-2">
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

export default {
  name: "Home",
  components: {
    Banner,
    Highest,
    New,
    Favourites,
  },
};
</script>

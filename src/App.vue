<template>
  <div id="app" class="p-md-4">
    <div>
      <Navbar />
    </div>
    <router-view />
  </div>
</template>

<script>
// @ is an alias to /src
import Navbar from "@/components/Navbar.vue";

export default {
  components: {
    Navbar,
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

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>

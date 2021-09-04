<template>
  <b-container fluid class="mt-2">
    <b-row class="justify-content-md-center">
      <b-col cols="12" md="6">
        <div>
          <b-form @submit.prevent="onSubmit" @reset="onReset" v-if="show">
            <b-form-group
              id="input-group-1"
              label="Email address:"
              label-for="input-1"
              description=""
            >
              <b-form-input
                id="input-1"
                v-model="form.email"
                type="email"
                placeholder="Enter email"
                required
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="input-group-2"
              label="Password:"
              label-for="input-2"
            >
              <b-form-input
                id="input-2"
                v-model="form.pass"
                type="password"
                placeholder="Password"
                required
              ></b-form-input>
            </b-form-group>

            <b-button type="submit" variant="primary">Submit</b-button>
            <b-button type="reset" variant="danger">Reset</b-button>
          </b-form>
          <b-card class="mt-3" header="Form Data Result">
            <pre class="m-0">{{ form }}</pre>
          </b-card>
        </div>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
const axios = require("axios");

export default {
  data() {
    return {
      form: {
        email: "",
        pass: "",
      },
      show: true,
    };
  },
  methods: {
    onSubmit() {
      let self = this;
      axios
        .post("action.php", {
          action: "login",
          email: self.form.email,
          pass: self.form.pass,
        })
        .then(function(response) {
          self.form.email = "";
          self.form.pass = "";
          // localStorage.setItem("user", JSON.stringify(response.data.user));
          self.$store.dispatch("user", response.data.user);
        });
      alert("Login succesfull");
      self.$router.push("/");
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.email = "";
      this.form.pass = "";
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>

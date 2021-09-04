<template>
  <b-container fluid class="mt-2">
    <b-row class="justify-content-md-center">
      <b-col cols="12" md="6">
        <div>
          <b-form @submit.prevent="onSubmit" @reset="onReset" v-if="show">
            <b-form-group
              id="input-group-1"
              label="First name:"
              label-for="input-1"
              description=""
            >
              <b-form-input
                id="input-1"
                v-model="form.first"
                type="text"
                placeholder="First name"
                required
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="input-group-2"
              label="Last name:"
              label-for="input-2"
              description=""
            >
              <b-form-input
                id="input-2"
                v-model="form.last"
                type="text"
                placeholder="Last name"
                required
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="input-group-3"
              label="Email address:"
              label-for="input-3"
              description=""
            >
              <b-form-input
                id="input-3"
                v-model="form.email"
                type="email"
                placeholder="Enter email"
                required
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="input-group-4"
              label="Password:"
              label-for="input-4"
            >
              <b-form-input
                id="input-4"
                v-model="form.pass"
                type="password"
                placeholder="Password"
                required
              ></b-form-input>
            </b-form-group>

            <b-form-group
              id="input-group-5"
              label="Confirm Password:"
              label-for="input-5"
            >
              <b-form-input
                id="input-5"
                v-model="form.confirm"
                type="password"
                placeholder="Confirm Password"
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
        first: "",
        last: "",
        email: "",
        pass: "",
        confirm: "",
      },
      show: true,
    };
  },
  methods: {
    onSubmit() {
      let self = this;
      axios
        .post("action.php", {
          action: "signup",
          first: self.form.first,
          last: self.form.last,
          email: self.form.email,
          pass: self.form.pass,
        })
        .then(function(response) {
          self.form.first = "";
          self.form.last = "";
          self.form.email = "";
          self.form.pass = "";
          self.form.confirm = "";
          alert(response.data.message);
        });
      self.$router.push("/login");
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.first = "";
      this.form.last = "";
      this.form.email = "";
      this.form.pass = "";
      this.form.confirm = "";

      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>

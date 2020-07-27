<template>
<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><i class="fas fa-2x" v-bind:class="{'fa-address-card':isActive, 'fa-frown':hasError}"></i></h2></span>
				<h4 class="company_title" v-if="isShow">Registered</h4>
        	<h4 class="company_title" v-else>Registration Failed</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<form class="form-group" style="width:100%;" method="POST" @submit.prevent="formSubmit">
              <input type="hidden" name="_token" :value="csrf" />
							<div class="row">
								<input type="name" name="name" id="name" class="form__input" v-model="name" placeholder="Username">
							  <strong>{{ errors.name[0] }}</strong>
              </div>
              <div class="row">
								<input type="email" email="email" id="email" class="form__input" v-model="email" placeholder="Email">
							  <strong>{{ errors.email[0] }}</strong>
              </div>
							<div class="row">
								<input type="password" name="password" id="password" class="form__input"  v-model="password" placeholder="Password">
              </div>
              <div class="row">
								<input type="password" name="password_confirmation" id="password_confirmation" class="form__input"  v-model="password_confirmation" placeholder="Password">
              </div>
              <strong>{{ errors.password[0] }}</strong>
							<div class="row">
                <div class="col">
                  <router-link to="/" class="btn btn-primary mr-2">Back</router-link>
                </div>
                <div class="col">
                   <button type="submit" class="btn btn-primary">Submit</button>
                </div>
							</div>
						</form>
					</div>
				
				</div>
			</div>
	</div>
</div>
</template>
<script>
export default {
  props: ["csrf", "register-route"],
  data() {
    return {
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
      isShow: true,
      isActive: true,
      hasError: false,
      errors: {
        name: [],
        email: [],
        password: []
      }
    };
  },
  methods: {
    formSubmit: function() {
      axios
        .post(this.registerRoute, {
          name: this.name,
          email: this.email,
          password: this.password,
          password_confirmation: this.password_confirmation
        })
        .then(response => {
          this.$router.go();
        })
        .catch(error => {
          $.each(
            error.response.data.errors,
            function(field, message) {
              this.hasError = true;
              this.isActive = false;
              this.isShow = false;
              this.errors[field] = message;
            }.bind(this)
          );
        });
    }
  }
};
</script>
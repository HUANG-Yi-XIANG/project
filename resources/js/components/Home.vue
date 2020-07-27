<template>
<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><i class="fas fa-2x" v-bind:class="{'fa-male':isActive, 'fa-user-times':hasError}"></i></h2></span>
				<h4 class="company_title" v-if="isShow">WelCome to System</h4>
        	<h4 class="company_title" v-else>Login Failed</h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">
						<form class="form-group" style="width:100%;" method="POST" @submit.prevent="checkUser">
              <input type="hidden" name="_token" :value="csrf" />
							<div class="row">
								<input type="email" name="email" id="email" class="form__input" v-model="email" placeholder="Username">
							</div>
							<div class="row">
								<input type="password" name="password" id="password" class="form__input"  v-model="password" placeholder="Password">
							</div>
              <strong>{{ errors.email[0] }}</strong>
							<div class="row">
								<input type="submit" value="Submit" class="btn">
							</div>
						</form>
					</div>
					<div class="row" style="justify-content:flex-end;">
						  <router-link to="/registered" class="mr-2 ">Registered</router-link>
              ｜
              <router-link to="/password/reset/" class="ml-2">ForgotPassword</router-link>
					</div>
				</div>
			</div>
	</div>
</div>

</template>

<script>
export default {
  props: ["csrf", "register-login"],
  data() {
    return {
      isActive: true,
      hasError: false,
      isShow: true,
      email: "",
      password: "",
      errors: {
        email: []
      }
    };
  },
  methods: {
    checkUser: function() {
      axios.post(this.registerLogin, {
          email: this.email,
          password: this.password
        }).then(response => {
          this.$router.go();
        }).catch(error => {
          $.each(error.response.data.errors,function(field, message) {
              this.errors[field] = message;
              this.hasError = true;
              this.isShow =false;
            }.bind(this)
          );
        });
    }
  }
};
</script>

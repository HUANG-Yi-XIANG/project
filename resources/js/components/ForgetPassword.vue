<template>
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><i class="fas fa-2x" v-bind:class="{'fa-address-card':isActive, 'fa-frown':hasError}"></i></h2>
                </span>
                <h4 class="company_title" v-if="isShow">ForgotPassword</h4>
                <h4 class="company_title" v-else>Registration Failed</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <form class="form-group" style="width:100%;" method="POST" @submit.prevent="forgetPassword">
                            <input type="hidden" name="_token" :value="csrf" />
                            <div class="row">
                                <input type="email" name="email" id="email" class="form__input" v-model="email"
                                    placeholder="Email">
                                <strong>{{ errors.email[0]}}</strong>
                            </div>
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
    <!-- <div>
        <h1 class="text-center mb-5">忘記密碼</h1>
        <form class="was-validated" style="width:400px" method="POST" @submit.prevent="forgetPassword">
            <input type="hidden" name="_token" :value="csrf">
            <div class="row">
                <div class="col-4 d-flex justify-content-center align-items-center"> 
                    <label>Email</label>
                </div>
                <div class="col-8">
                    <input type="email" v-model="email" class="form-control" id="email" placeholder="請輸入信箱" required>
                </div>
            </div>
            <div class="mt-3" style="width:100%; display:flex;justify-content:flex-end">
                <router-link to="/" class="btn btn-primary mr-2">返回</router-link>
                <button type="submit" class="btn btn-primary">送出</button>
            </div>
        </form>
    </div> -->
</template>
<script>
    export default {
        props: ['csrf', 'password-email-route'],
        data() {
            return {
                isShow: true,
                isActive: true,
                hasError: false,
                email: '',
                errors:{
                    email:[],
                }
            };
        },
        methods: {
            forgetPassword: function () {
                axios.post(this.passwordEmailRoute, {
                    email: this.email,
                }).then(response => {
                    alert('發送成功 請至信箱收信');
                    // this.$router.push('/');
                });
            }
        }
    }

</script>

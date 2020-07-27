<template>
    <div class="container-fluid">
        <div class="row main-content bg-success text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><i class="fas fa-2x" v-bind:class="{'fa-edit':isActive, 'fa-frown':hasError}"></i></h2>
                </span>
                <h4 class="company_title" v-if="isShow">UpdatePassword</h4>
                <h4 class="company_title" v-else>Update Failed</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid">
                    <div class="row">
                        <form class="form-group" style="width:100%;" method="POST" @submit.prevent="UpdatePassword">
                            <input type="hidden" name="_token" :value="csrf" />
                            <div class="row">
                                <input type="email" email="email" id="email" class="form__input" v-model="email"
                                    placeholder="Email">
                            </div>
                            <div class="row">
                                <input type="password" name="password" id="password" class="form__input"
                                    v-model="password" placeholder="Password">
                            </div>
                            <div class="row">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form__input" v-model="password_confirmation" placeholder="Password">
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
        props: ['csrf', 'password-update'],
        data() {
            return {
                email: this.$router.history.current.query.email,
                password: '',
                password_confirmation: '',
                token: this.$router.history.current.params.token,
                isActive: true,
                isShow: true,
                hasError: false,
                errors: {
                    password: [],
                },
            };
        },
        methods: {
            UpdatePassword: function () {
                axios.post(this.passwordUpdate, {
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                    token: this.token,

                }).then(response => {
                    alert('修改成功');
                    this.$router.push('/');
                }).catch(error => {
                    $.each(error.response.data.errors, function (field, message) {
                        this.errors[field] = message;
                        this.hasError = true;
                        this.isActive = false;
                        this.isShow = false;
                    }.bind(this));
                });
            }
        }
    }

</script>

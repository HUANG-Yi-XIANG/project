
<template>
  <div class="modal-content">
        <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>
        <div class="modal-body p-0 row">
            <div class="col-12 col-lg-5 ad p-0" style="background-repeat: no-repeat;background-position: center;background-size: 150px 150px;" :style="{backgroundImage:`url(${imgUrl})`}">
            </div>
            <div class="details col-12 col-lg-7">
               
                <h2>User Info</h2>
                <div class="form-group mt-3 pt-3 mb-5">
                    <span>Name</span>
                    <input type="text" class="form-control" placeholder="UserName" v-model="name"> 
                    <span>Email</span>
                    <input type="email" class="form-control" placeholder="email@example.com" v-model="email"> 
                    <button type="submit" class="btn btn-primary mt-3" @click="updateUser">Submit</button>
                        
                </div> 
           
            </div>
        </div>
    </div>
    
</template>

<script>

    export default {
        props:  {
            route: { type: String, required: true }
        },
        data() {
            return {
                imgUrl:this.$attrs.data,
                name: this.$attrs.user,
                email: this.$attrs.email,
            };
        },
        methods: {
      
            updateUser: function () {                
                axios.post(this.route, {
                    name: this.name,
                    email: this.email,
                }).then(response => {
                    alert('success');
                    this.$router.go();
                })
            }
    
 
         }
 
    }

</script>

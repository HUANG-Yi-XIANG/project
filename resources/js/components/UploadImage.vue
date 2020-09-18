
<template>
    <div class="upload_div">
        <span class="upload_label" style="cursor:pointer" @click.prevent="click">
            Upload File
        </span>
     
        <input type="file" class="upload_input" name="image" value="Browse" style="width:70px;cursor:pointer;"  @change="upload">
    
    </div>

</template>
<script>

    export default {
        props:  {
            route: { type: String, required: true }
        },
        data() {
            return {
               imgUrl:'',
            };
        },
        methods: {
            click:function () {                
                $(".upload_input").trigger('click');
            },
            upload: function (e) {
                var reader = new FileReader();
                if(window.FileReader){
                
                    let file = e.target.files[0];
                    const scope = this;
                    reader.onload = function (e) {                        
                        this.imgUrl = e.target.result;
                        scope.getReduce(this.imgUrl);
                    }          
                    reader.readAsDataURL(file);
                }
            },
            getReduce: function(img) {
                let reduceImg = new Image();
                reduceImg.src = img;
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                const scope = this;
                reduceImg.onload = function () {
                    var width = 100;
                    var height = 100;
                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(reduceImg, 0, 0, width, height);
                    scope.uploadData(canvas.toDataURL());
                     
                }
            }, 
            uploadData:function (img) {
                
                 axios.post(`${this.route}/image`, {    
                        img: img,
                        }).then(response => {
                            alert('上傳成功');
                            this.$router.go();
                        })
                
                }
            }
 
    }

</script>

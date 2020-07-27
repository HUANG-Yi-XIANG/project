
<template>
    <div class="upload_div">
        <span class="upload_label">
            Upload File
        </span>
        <input type="file" class="upload_input" name="image" value="Browse" style="width:70px;"  @change="upload">
    </div>

    
</template>
<script>

    export default {
        props: ['csrf', 'upload-image'],
        data() {
            return {
               imgUrl:'',
            };
        },
        methods: {
            
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

                   
                // if (reader.imgUrl != "" && reader.imgUrl != undefined) {
                //     console.log(reader);
                    
                //     this.getData(reader.imgUrl);
                // }
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
                 axios.post(this.uploadImage, {    
                        img: img,
                        }).then(response => {
                            alert('上傳成功');
                            // this.$router.push('/');
                            this.$router.go();
                        })
                
                }
            }
 
    }

</script>

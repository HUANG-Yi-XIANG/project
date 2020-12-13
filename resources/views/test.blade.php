<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="{{asset('js/Screenshot.js')}}"></script>
    <script src="https://cdn.bootcss.com/html2canvas/0.4.1/html2canvas.js"></script> 

</head>
<body>
    <div class="btn btn-outline-primary" id="getView"> get view</div>
    <div id="test">
        <h2>合約</h2>
        <img src="data:image/jpeg;base64,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" alt="" srcset=""> 
        <img src="{{asset('image/S__22216706.jpg')}}" alt="" width="300px">
        <p>134iaosfiosdufosfaafadf</p>
    </div>
    <div id="box1">
    </div>
</body>
</html>
$(function() { 
    $('#getView').click(function () {
        html2canvas(document.getElementById('test'),{
            onrendered: function (canvas) {
                console.log(canvas.toDataURL());
                console.log(canvas);
                $('#box1').html("");
                $('#box1').append(canvas);
            }
        })
    })
}); 
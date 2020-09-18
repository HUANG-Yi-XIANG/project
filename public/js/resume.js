$(document).ready(function(){
    // invoke the carousel
        $('#myCarousel').carousel({
          interval:6000
        });
    
    // scroll slides on mouse scroll 
    $('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){
    
            if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
                $(this).carousel('prev');
                
                
            }
            else{
                $(this).carousel('next');
                
            }
        });
    
    //scroll slides on swipe for touch enabled devices  
         $("#myCarousel").on("touchstart", function(event){
     
            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){
    
            var yMove = event.originalEvent.touches[0].pageY;
            if( Math.floor(yClick - yMove) > 1 ){
                $(".carousel").carousel('next');
            }
            else if( Math.floor(yClick - yMove) < -1 ){
                $(".carousel").carousel('prev');
            }
        });
        $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
        });
    });
        
    });
    //animated  carousel start
    $(document).ready(function(){

    
    //to add  start animation on load for first slide 
    $(function(){
            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    this.addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass(animationName);
                    });
                }
            });
                 $('.item1.active img').animateCss('slideInDown');
                 $('.item1.active h2').animateCss('zoomIn');
                 $('.item1.active p').animateCss('fadeIn');
                 
    });
        
    //to start animation on  mousescroll , click and swipe 
    var item2 = document.getElementsByClassName('item2 active')[0] ;
   
      $("#myCarousel").on('slide.bs.carousel', function () {
            $.fn.extend({
                animateCss: function (animationName) {
                    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                    this.addClass('animated ' + animationName).one(animationEnd, function() {
                        $(this).removeClass(animationName);
                    });
                }
            });
 
    // add animation type  from animate.css on the element which you want to animate
    
            $('.item1 img').animateCss('slideInDown');
            $('.item1 h2').animateCss('zoomIn');
            $('.item1 p').animateCss('fadeIn');
            
            $('.item2 img').animateCss('zoomIn');
            $('.item2 h2').animateCss('swing');
            $('.item2 p').animateCss('fadeIn');
            
            $('.item3 img').animateCss('fadeInLeft');
            $('.item3 h2').animateCss('fadeInDown');
            $('.item3 p').animateCss('fadeIn');
            var barText = document.getElementsByClassName('progress-value');     
            var progressBars = $('.progress-bar');  
            setTimeout(() => {
                item2 = document.getElementsByClassName('item2 active')[0] ;
                console.log(item2);
                
                if( item2 != undefined ) {
                    progressBars= $('.progress-bar');  
                
                    for (let i = 0; i< progressBars.length; i++) {                      
                        let element = progressBars[i];
                        let maxValue = element.attributes['aria-valuenow'].value;
                        element.style.width = `${maxValue}%`;
                        let count = 0;
                        setInterval(() => {
                            if ( count < maxValue) {
                                count += 1;
                                barText[i].innerHTML = `${count}%`;
                            }
                        }, 30);
                   
                    }
                    $('.progress-bar').addClass('aos-animate');
               
                
            } else {            
                for (let i = 0; i< barText.length; i++) {
                    let element = progressBars[i];                    
                    element.style.width = '0%';
                    barText[i].innerHTML='0%';
                    $('.progress-bar').removeClass('aos-animate');
                }
            }
            }, 800);
            
          
        });
       
        
    });
    
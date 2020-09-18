 <html lang="en">

 <head>

     <title>XIANG Resume</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
 </head>
<style>
header.masthead{
    background-image: url("{{ asset('image/main.jpg') }}");
    height: 100vh;
    min-height: 40rem;
    padding-top: 4.5rem;
    padding-bottom: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.greetings{
    display: flex;
    justify-content: center;
    align-items: center;
}
span{
    font-family: 'Montserrat';
    -webkit-font-smoothing: antialiased;
    color: #8a8787d1;
}
h1{
    font-size: 55px;
    font-weight: 700;
    font-family: 'Raleway';
    margin: 0;
    color: #111111;
}
#mainNav {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  background-color: #fff;
  transition: background-color 0.2s ease;
}
#mainNav .navbar-brand {
  font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-weight: 700;
  color: #212529;
}
#mainNav .navbar-nav .nav-item .nav-link {
  color: #6c757d;
  font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-weight: 700;
  font-size: 0.9rem;
  padding: 0.75rem 0;
}
#mainNav .navbar-nav .nav-item .nav-link:hover, #mainNav .navbar-nav .nav-item .nav-link:active {
  color: #f4623a;
}
#mainNav .navbar-nav .nav-item .nav-link.active {
  color: #f4623a !important;
}
@media (min-width: 992px) {
  #mainNav {
    box-shadow: none;
    background-color: transparent;
  }
  #mainNav .navbar-brand {
    color: rgba(255, 255, 255, 0.7);
  }
  #mainNav .navbar-brand:hover {
    color: #fff;
  }
  #mainNav .navbar-nav .nav-item .nav-link {
    color: rgba(255, 255, 255, 0.7);
    padding: 0 1rem;
  }
  #mainNav .navbar-nav .nav-item .nav-link:hover {
    color: #fff;
  }
  #mainNav .navbar-nav .nav-item:last-child .nav-link {
    padding-right: 0;
  }
  #mainNav.navbar-scrolled {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    background-color: #fff;
  }
  #mainNav.navbar-scrolled .navbar-brand {
    color: #212529;
  }
  #mainNav.navbar-scrolled .navbar-brand:hover {
    color: #f4623a;
  }
  #mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link {
    color: #212529;
  }
  #mainNav.navbar-scrolled .navbar-nav .nav-item .nav-link:hover {
    color: #f4623a;
  }
}
#imgMenu{
    background: #ffb633;
    height: 40%;
    padding: 20px;
}
li{
    list-style:none;
}
.box-right{
    position: relative;
    padding-right: 10px;
    background-image: linear-gradient(#ffb633 33%, rgba(255,255,255,0) 0%);
    background-position: right;
    background-size: 1px 12px;
    background-repeat: repeat-y;
}
.box-left{
    position: relative;
    padding-left: 10px;
    background-image: linear-gradient(#ffb633 33%, rgba(255,255,255,0) 0%);
    background-position: left;
    background-size: 1px 12px;
    background-repeat: repeat-y;
}
.yearTile-right{
    background: #ffb633;
    display: unset;
    padding: 10px 10px;
    color: #ffffff;
    position: relative;
    margin-right: 25px;
    font-family: 'Montserrat';
}
.yearTile-right::before{
    content: "";
    position: absolute;
    right: -25px;
    border-top: 24px solid transparent;
    border-bottom: 18px solid transparent;
    border-right: 0 solid transparent;
    border-left: 26px solid #ffb633;
    top: 0;
    bottom: 0;
}
.yearTile-left{
    background: #ffb633;
    display: unset;
    padding: 10px 10px;
    color: #ffffff;
    position: relative;
    margin-left: 25px;
    font-family: 'Montserrat';
}
.yearTile-left::before{
    content: "";
    position: absolute;
    left: -25px;
    border-top: 25px solid transparent;
    border-bottom: 17px solid transparent;
    border-left: 0 solid transparent;
    border-right: 25px solid #ffb633;
    top: 0;
    bottom: 0;
    right: unset;
}
.card{
    background: #ffffff;
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-top: 30px;
    margin-bottom: 60px;
    height: 300px;
    display: flex;
    justify-content: center;
}
.circle::before{
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    content: "\f192";
    font-size: 14px;
    color: #ffb633;
}
.circle-left{
    position: relative;
    left: 50px;
}
.circle-right{
    position: relative;
    right: 50px;
}
.card-Animation{
    transition-duration: 1.5s;
}
.card-Animation-right{
    transform: translateX(-1000px); 
}
.card-Animation-left{
    transform: translateX(1000px); 
}
</style>
 <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 navbar-scrolled" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">XIANG </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#resume">Resume</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger active" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <header class="masthead" id ="page-top">
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center" style="justify-content:end;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div>
                        <span style="font-size:30px;">Hello,I'm XIANG</span>
                        <h1>Full Stack Developer</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section  id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="mt-0 text-center">About Me</h2>
                      
                        <svg class="d-flex w-100 justify-content-center"style="color:#ffb633;" width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <hr class="divider light my-4">
                        <p class="mb-4">My Name is YI-XIANG,HUANG. I was bron on May 9, 1995. I'm 25 years old.<br>
                        Graduated from the Information Engineering Department of St. John's University of Technology.<br>
                        Hobbies is  playing basketball and movies.
                        </p>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mt-5" >
                        <div style="display:flex;align-items: center;">
                            <img src="{{ asset('image/peter.jpg') }}" alt="" style="width:300px;">
                            <div id="imgMenu">
                                <div style="display: flex;height: 100%;align-items: center;width: 100%;">
                                    <ul style="width: 100%;padding-left: 0px;">
                                        <li class="mt-3">
                                            <i class="fab fa-facebook-square fa-2x"></i>
                                        </li>
                                        <li class="mt-3">
                                            <i class="fab fa-instagram fa-2x"></i>
                                        </li>
                                        <li class="mt-3">
                                            <i class="fab fa-github fa-2x"></i>
                                        </li>
                                        <li class="mt-3">
                                            <i class="far fa-envelope fa-2x"></i>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
     
                    </div>
                    <div class="col-lg-6 col-sm-6 ">
                        @include('skill')
                    </div>
                </div>
            </div>
    </section>
    <section id="resume">
        <div class="container mt-0">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mt-0 text-center">My Resume</h2>
                  
                    <svg class="d-flex w-100 justify-content-center"style="color:#ffb633;" width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <hr class="divider light my-4">
                    <p class="mb-4 text-center">Work experience since graduation from St. John's University of Technology
                    </p>
                    
                </div>
            </div>
            <div class="row" style="overflow: hidden;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right card-Animation card-Animation-right" >
                    <div class="mb-5">
                        <h3>Education</h3>
                    </div>
                    <div class="box-right">
                        <div>
                            <h6 class="yearTile-right">SEP 2013 - JUN 2017<span class="circle circle-left"></span></h6>
                            <div class="card">
                                <h4>St. John's University of Technology</h4>
                                <h5>Department of Information Engineering</h5>
                                <p>While in college, Thematic publication
                                    shopping system on the subject and won the second place</p>
                                <div>
                                    <a class="btn btn-primary btn-sm">Read More</a>
                                </div>
                           
                            </div>
                        </div>
                        <div>
                            <h6 class="yearTile-right">AUG 2020 - Now<span class="circle circle-left"></span></h6>
                            <div class="card">
                                <h4>Taiwan House Agent</h4>
                                <h5>Full Stack Developer</h5>
                                <p>Currently mainly responsible for the development of the background system</p>
                                <div>
                                    <a class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left card-Animation card-Animation-left">
                    <div class="mb-5">
                        <h3>Experience</h3>
                    </div>
                    <div class="box-left">
                        <div style="margin-top:100px;">
                            <h6 class="yearTile-left"><span class="circle circle-right"></span>SEP 2018 - JUL 2020</h6>
                            <div class="card">
                                <h4>ClickForce</h4>
                                <h5>Full Stack Developer</h5>
                                <p>During employment I'm mainly responsible for maintenance SSP (Supply Side Platform) system.
                                Main development:
                                1.Report system
                                2.Member group system
                                3.Exchange rate conversion
                                </p>
                                <div>
                                    <a class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
 </body>
<script>
$(document).ready(function () {
  $('.nav-link').click(function (event) {
    event.preventDefault();
    console.log(this);
    
          
  })  
})
 window.onscroll = function () {
    var navBar = document.getElementById('mainNav');
    var y = window.scrollY;
    var bars = document.getElementsByClassName('progress-bar');
    var skillSpan = document.getElementsByClassName('skill span');
    var card = document.getElementsByClassName('card-Animation');
     if (y <= 0) {
        navBar.style.boxShadow = 'none';
        navBar.style.backgroundColor = '#fff0';
     } else {
        navBar.style.boxShadow = '0 0.5rem 1rem rgba(0, 0, 0, 0.15)';
        navBar.style.backgroundColor = '#fff';
     }
        if (y > 500 && y < 1200) {
            for (i = 0; i < bars.length; i++) {
                var value = bars[i].getAttribute('aria-valuenow');
                bars[i].setAttribute('style',`width:${value}%;`);
                bars[i].innerText = `${value}%`;
                skillSpan[i].style.opacity =1;
                // skillSpan[i].innerText = `${value}%`;
            }
        } else {
            for (i = 0; i < bars.length; i++) {
                var value = bars[i].getAttribute('aria-valuenow');
                bars[i].setAttribute('style',`width:0%;`);
                bars[i].innerText = `0%`;
                skillSpan[i].style.opacity = 0;
                // skillSpan[i].style.left=`0%`;
                // skillSpan[i].innerText = `0%`;
            }
        }
        if (y > 1200) {
            card[0].classList.remove('card-Animation-right');
            card[1].classList.remove('card-Animation-left');
        } else {
            card[0].classList.add('card-Animation-right');
            card[1].classList.add('card-Animation-left');
        }
    
 }
 </script>
 </html>
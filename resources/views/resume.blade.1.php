 <html lang="en">

 <head>

     <title>XIANG Resume</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
         integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

     <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
     <script src="{{ asset('js/resume.js') }}"></script>

 </head>

 <body>
     <section class="slide-wrapper">
         <div class="container">
             <div id="myCarousel" class="carousel slide">
                 <!-- Indicators -->
                 <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>

                 <!-- Wrapper for slides -->
                 <div class="carousel-inner">
                     <div class="item item1 active">
                         <div class="fill" style=" background-color:#606160e6;">
                             <div class="inner-content">
                                 <div class="carousel-img">
                                     <img src=" {{asset('image/peter.jpg')}} " alt="sofa" class="img img-responsive" />
                                 </div>
                                 <div class="carousel-desc" style="margin-top: 10rem;">
                                     <div class="row">
                                         <div class="col-lg-6 col-md-12"
                                             style="border: 0;box-shadow: 0px 5px 25px 0px rgba(0,0,0,0.5);">
                                             <div class="card-body" style="height:200px;">
                                                 <div class="h3 mt-3 title">About</div>
                                                 <p> 出生於1995年,宜蘭人,金牛座O型,個性活潑外向喜歡與人交流,興趣是打球、看電影,周末天氣好也喜歡到處走走。</p>
                                                 <br>
                                                 <p>2013/9~2017/6 ， 聖約翰科技大學
                                                     資訊工程系。大學期間在課程中學習到了很多種語言及多媒體相關的專業知識,在畢業專題以小組協力製作「購物系統的拍賣網站」,當中我所負責的項目有報表系統以及會員系統,在大家的努力之下我們小組也獲得了第二名的佳績,也讓我更加確定了未來投入職場的方向。
                                                 </p>
                                             </div>
                                         </div>
                                         <div class="col-lg-6 col-md-12"
                                             style="border: 0;box-shadow: 0px 5px 25px 0px rgba(0,0,0,0.5);">
                                             <div class="card-body" style="height:200px;">
                                                 <div class="h3  title">Basic Information</div>
                                                 <div>
                                                     <div class="row" style="margin-top:1rem;">
                                                         <div class="col-lg-3" style="text-align:right">
                                                             <p style="font-size:20px;">
                                                                 <i class="far fa-address-book"></i>
                                                                 Age：
                                                             </p>
                                                         </div>
                                                         <div class="col-lg-9" style="text-align:left">
                                                             <p style="font-size:20px;">25</p>
                                                         </div>
                                                     </div>
                                                     <div class="row" style="margin-top:1rem;">
                                                         <div class="col-lg-3" style="text-align:right">
                                                             <p style="font-size:20px;">
                                                                 <i class="far fa-envelope"></i>
                                                                 Email：
                                                             </p>
                                                         </div>
                                                         <div class="col-lg-9" style="text-align:left">
                                                             <p style="font-size:20px;">peter790303@gmail.com</p>
                                                         </div>
                                                     </div>
                                                     <div class="row" style="margin-top:1rem;">
                                                         <div class="col-lg-3" style="text-align:right">
                                                             <p style="font-size:20px;">
                                                                 <i class="fas fa-mobile-alt"></i>
                                                                 Phone：
                                                             </p>
                                                         </div>
                                                         <div class="col-lg-9" style="text-align:left">
                                                             <p style="font-size:20px;">0976-738-203</p>
                                                         </div>
                                                     </div>
                                                     <div class="row" style="margin-top:1rem;">
                                                         <div class="col-lg-3" style="text-align:right">
                                                             <p style="font-size:20px;">
                                                                 <i class="fas fa-map-marker-alt"></i>
                                                                 Address：
                                                             </p>
                                                         </div>
                                                         <div class="col-lg-9" style="text-align:left">
                                                             <p style="font-size:20px;">Yilan City, Yilan County 260,
                                                                 Taiwan</p>
                                                         </div>
                                                     </div>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="item item2">
                         <div class="fill" style="background-color:#606160e6;">
                             <div class="inner-content">
                                 <div class="carousel-img">
                                     <img src="{{asset('image/skill.jpg')}} "
                                         alt="white-sofa" class="img img-responsive" />
                                 </div>
                                 <div class="carousel-desc">
                                    <h2>Professional Skills</h2>
                                     
                                     <div class="card aos-init " data-aos="fade-up"
                                         data-aos-anchor-placement="top-bottom">
                                         <div class="card-body">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">HTML</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init "
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="80" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">0%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">CSS</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init"
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="75" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">75%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">JavaScript</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init "
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="70" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">70%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">Bootstrap</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init "
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="70" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">70%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">PHP</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init "
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="70" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">70%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="progress-container progress-primary"><span
                                                             class="progress-badge">Laravel</span>
                                                         <div class="progress">
                                                             <div class="progress-bar progress-bar-primary aos-init "
                                                                 data-aos="progress-full" data-aos-offset="10"
                                                                 data-aos-duration="2000" role="progressbar"
                                                                 aria-valuenow="70" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width:0%;"></div><span
                                                                 class="progress-value">70%</span>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="progress-container progress-primary"><span
                                                                class="progress-badge">MySql</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary aos-init "
                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                    data-aos-duration="2000" role="progressbar"
                                                                    aria-valuenow="70" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width:0%;"></div><span
                                                                    class="progress-value">70%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="progress-container progress-primary"><span
                                                                class="progress-badge">Vue</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary aos-init "
                                                                    data-aos="progress-full" data-aos-offset="10"
                                                                    data-aos-duration="2000" role="progressbar"
                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width:0%;"></div><span
                                                                    class="progress-value">60%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">GCP</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary aos-init "
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="65" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width:0%;"></div><span
                                                                        class="progress-value">65%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="progress-container progress-primary"><span
                                                                    class="progress-badge">Linux</span>
                                                                <div class="progress">
                                                                    <div class="progress-bar progress-bar-primary aos-init "
                                                                        data-aos="progress-full" data-aos-offset="10"
                                                                        data-aos-duration="2000" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width:0%;"></div><span
                                                                        class="progress-value">60%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="item item3">
                         <div class="fill" style="background-color:#606160e6;">
                             <div class="inner-content">
                                 <div class="col-md-6">

                                     <div class="carousel-img">
                                         <img src="http://vocefalandoingles.com/wp-content/uploads/2016/09/sofa.png"
                                             alt="sofa" class="img img-responsive" />
                                     </div>
                                 </div>

                                 <div class="col-md-6 text-left">
                                     <div class="carousel-desc">

                                         <h2>Stylish Sofa</h2>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elit ipsum,
                                             scelerisque non semper eu, aliquet vel odio. Sed auctor id purus nec
                                             tristique. Donec euismod, urna vel dapibus tristique, dolor arcu ultrices
                                             lectus, nec pulvinar est turpis sit amet felis. Duis interdum purus quam,
                                             vitae cursus erat ornare at. Donec congue mi a ipsum tincidunt, imperdiet
                                             vehicula odio rutrum. Nam porta vulputate magna, id pretium lectus iaculis
                                             eu. Ut ut viverra libero.</p>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
 </body>

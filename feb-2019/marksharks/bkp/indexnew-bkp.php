<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page </title>
    
    
    <!--[if IE]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/png" href="http://mogulsdemo.com/mark1/new/Favicon.png">
    <!-- CSS INCLUSIONS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-new.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://mogulsdemo.com/html/kohinoorcontinental/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/master.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slidescroll.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300|Raleway:100" rel="stylesheet">
    <!-- CSS INCLUSIONS -->
    <script src="http://mogulsdemo.com/mark1/new/modernizr.custom.92573.js"></script>
    
	   
    <style type="text/css">
     #footer a{
        margin-right: 0;
     }
        @media(max-width: 991px){
            .navbar-light .navbar-toggler{
                display: block;
            }
        }
        #footer{
            background:#fff;
        }
        #header{
            position: fixed;
        }
        .collapse.show{
           background-color: #2c8078;
           border: 2px solid #fff;
        }
        .collapse.show ul li {
            text-align: center;
        }
        @media(max-width: 480px){
            .navbar-toggler {
                padding: 4px 8px; 
            }
         }

    </style>
	
	 <style>
         
        button, input, select, textarea{
            margin-bottom: 20px;
    padding: 10px;
    width: 100%;
    border-radius: 6px;
    border: 1px solid #ddd;
    box-shadow: 1px 1px 7px 0px #cccccc;
        }
        .col-md-6{float: left;}
        .lt{
            float: left;
        }
        .mb-5 {
    margin-bottom: 6rem!important;
}
       
        
         .col-md-4{
            
            float: left;
            
        }
        
        .btn--dark {
    background-color: #2f2c2c;
}
        .semicircle {
    display: block;
    position: absolute;
    top: 12px;
    left: 12px;
    width: 18px;
    height: 18px;
    display: none;
    overflow: hidden;
}
        .btn--dark:hover {
    background-color: #3f3f3f;
}
        .btn-medium {
    padding: 23px 31px;
}
        .bantext{
            padding: 258px 0px 0px 0px;
            color: #fff;
            font-weight: 700 !important;
            letter-spacing: 4px !important;
        }
        .bandetail{
            padding: 0px 170px 80px 170px;
            color: #fff;
        }

        #header{
            padding-top: 12px;
            padding-bottom: 12px;
            width: 100%;
            position: absolute;
            z-index: 10;
            background-color: rgba(0,0,0,0.34);
        }

        #bg-carousel{
            position: relative;
        }

        #bg-carousel .bg-carousel-caption{
            position: absolute;
            z-index: 2;
            width: 100%;
            top: 300px;
            color: #ffffff;
        }

        #bg-carousel .buttons-container{
            margin-top: 30px;
        }

        #bg-carousel .buttons-container .btn{
            margin-right: 30px;
        }

        #bg-carousel .bg-carousel-caption h3{
            font-weight: 300;
            line-height: 35px;
            letter-spacing: 2px;
        }

        #bg-carousel ul li{
            position: relative;
        }

        #accordion-section{
            margin-bottom: 70px;
        }

        #for-schools{
            padding: 60px 0 20px 0;
        }

        #accordion-section #collapseOne{
            padding-top: 30px;
        }

        #for-schools .row{
            margin-bottom: 60px;
        }

        #for-schools ul.list-app{
            margin-top: 30px;
        }

        #for-schools ul.list-app li{
            margin-bottom: 30px;
            font-weight: 300;
            padding-left: 50px;
        }

        #for-schools ul.list-app li:before{
            content: '\f058';
            font-family: FontAwesome;
            margin-right: 10px;
            font-size: 40px;
            position: absolute;
            margin-left: 3px;
            margin-top: -4px;
            left: 0;
        }

        #for-schools ul.list-app li.active:before{
            color:#ffd700;
        }

        #for-schools p{
            margin-top: 30px;
        }

        #bg-carousel img,#for-schools img{
            width: 100%;
            height: 100%;
        }

        #center-carousel{
            margin-bottom: 70px;
        }

        #center-carousel img{
            width: 100%;
        }

        #reviews{
            margin-bottom: 20px;
        }

        #reviews .card .review-details{
            background-color: #ffffff !important;
            position: relative;
            width: 90%;
            padding: 0 20px 20px 20px;
            margin-left: 5%;
            margin-top: -50px;
            box-shadow: 0 0 10px 0px #c2c2c2;
        }

        #reviews .card{
            margin-bottom: 100px;
        }

        #reviews .card .review-details p{
            font-size: 14px;
        }

        .timeline{
            position: relative;
            background-image: url("<?php echo base_url(); ?>assets/images/dot-tile-50.png");
            background-repeat: repeat;
            background-position: center top;
            background-color: #252525;
            margin-bottom: 70px;
            padding-top: 100px;
            padding-bottom: 100px;
            height: 800px;
            overflow: hidden;
        }



        .timeline .timeline-heading{
            position: absolute;
            margin-top: 470px;
            z-index: 10;
            color: #ffffff;
            font-size: 70px;
            line-height: 70px;
            margin-left: 20%;
        }

        .timeline .timeline-content{
            margin-top: 1100px;
        }


        .timeline .timeline-item:nth-child(odd)
        {
            margin-left: 30px;
        }

        .timeline .timeline-item{
            margin-top: 50px;
        }

        .timeline .timeline-item h5{
            color: #ffd700;
        }


        .timeline .timeline-item p{
            color: #fff !important;
        }
        .Sclpart{
             margin: 112px 0px 46px 0px;
        }
        .queryform{
            padding: 30px 281px;
            float:left;
            
        }
        .wantscl{
                    margin: 0px 0px 0px 0px;
                }
                .pricing-tables-item{
                    height: 500px;
                }
         @media only screen and (min-width: 321px) and (max-width: 480px){
          .bantext{
            padding-top: 60px;
            font-size: 20px!important;
          }
          .bandetail{
            font-size: 12px!important;
            padding: 0px 0px 44px 2px;
          }
          #for-schools{
              padding: 0px 0 14px 0;
          }
          #main-content h1{
            font-size: 20px;
          }
          h5{
            font-size: 18px;
          }

          #reviews .card .review-details p {
            font-size: 12px;
          }
          .p-0{
            height: 180px;
          }
          .pricing-tables-item .pricing-title {
            font-size: 18px;
          }
          .rate{
            font-size: 12px!important;
          }
          .Sclpart{
            margin: 50px 0px 20px 0px;
          }
          .lt{
            width: 50%;
            height: 77px;
          }
          #main-content .bottom-small-underline{
            width: 100%;
          }
          .queryform{
            padding: 0;
          }
          .navbar-light .navbar-toggler{
            width: 14%;
          }
          .logo-container img{
            width: 41%;
          }
          .navbar-toggler{
                padding: 6px 5px;
          }
          #header{
            padding: 0;
          }
          .pricing-tables-item .pricing-tables-icon{
            border: none;
            height: 70px;
          }
          .pricing-tables-item .pricing-tables-icon img{
            width: 60%;
          }
          .pricing-tables-item{
                    height: 380px;
                }
                .col-md-6 {
                   padding: 10px!important;
                }

         }
          @media  only screen and (max-width: 380px){
             .rate{
            font-size: 12px!important;

          }
           .col-md-6 {
                   padding: 10px!important;
                } 
        }
        @media  only screen and (max-width: 991px) {
            .navbar-light .navbar-toggler{
            width: 10%;
          }


            #header{
                position: static;
                background-color: #000;
            }
            #reviews .card .review-details p {
                    font-size: 14px;
            }
            h5{
                    font-size: 15px!important;

            }
             .rate{
            font-size: 14px;

          }
          .col-md-6{
            padding: 25px;
          }
          .queryform{
            padding: 0;
          }

        }
          @media only screen and (min-width: 481px) and (max-width: 768px) {
            .bantext{
                padding: 122px 0px 0px 0px;

            }
            #reviews{
                margin-bottom: 0;
            }
            .col-md-8{
                max-width: 100%!important;
                    padding: 20px;
            }
            .lt {
                float: left;
                width: 50%;
                text-align: center;
                height: 112px;
                }
                .wantscl{
                    margin: 100px 0px 0px 0px;
                    /* margin: 350px 0px 0px 0px; */
                }
                .col-md-6 {
                padding: 5px;
               }
               .pricing-tables-item{
                height: 475px;
               }
           }
           @media only screen and (min-width: 180px) and (max-width: 768px){
        .iconsocial{
            width: 100%;
            text-align: center;
        }
}
            @media only screen and (min-width: 769px) and (max-width: 1024px){
                 .bantext{
                padding: 122px 0px 0px 0px;

            }
            #reviews{
                margin-bottom: 0;
            }
            .col-md-8{
                max-width: 100%!important;
                    padding: 20px;
            }
            .lt {
                float: left;
                width: 50%;
                text-align: center;
                height: 112px;
                }
                .wantscl{
                    margin: 160px 0px 0px 0px;
                }
                .col-md-6 {
                padding: 5px;
               }
           }
            
        @media only screen and (min-width: 181px) and (max-width: 320px){
           #header .navbar .navbar-nav{
            margin-top: 23px;
            font-size: 12px!important;
            text-align: center;
           }
           #header .navbar .navbar-nav .nav-item .nav-link{
            font-size: 12px!important;
            padding: 3px;
           }
           
          .bantext{
            padding-top: 30px;
            font-size: 17px!important;
          }
          .bandetail{
            font-size: 10px!important;
            padding: 0px 0px 34px 2px;
          }
          #for-schools{
              padding: 0px 0 14px 0;
          }
          #main-content h1{
            font-size: 17px;
          }
          h5{
            font-size: 15px;
          }
          #reviews{
            margin-bottom: -50px;
          }
          #reviews .card .review-details p {
            font-size: 10px;
          }
          .p-0{
            height: 150px;
          }
          .pricing-tables-item .pricing-title {
            font-size: 15px;
          }
          .rate{
            font-size: 10px!important;
          }
          .Sclpart{
            margin: 40px 0px 20px 0px;
          }
          .lt{
            width: 45%;
            height: 67px;
          }
          #main-content .bottom-small-underline{
            width: 100%;
          }
          .queryform{
            padding: 0;
          }
          .navbar-light .navbar-toggler{
            width: 10%;
          }
          .logo-container img{
            width: 45%;
          }
          .navbar-toggler{
                padding: 0px 5px;
          }
          #header{
            padding: 0;
          }
          .pricing-tables-item .pricing-tables-icon{
            border: none;
            height: 70px;
          }
          .pricing-tables-item .pricing-tables-icon img{
            width: 60%;
          }
          .pricing-tables-item{
                    height: 380px;
                }
                .col-md-6 {
                   padding: 10px!important;
                }

         }
            

    </style>



</head>


<body>
    <?php include_once "header1.php"; ?>
	<a href="#eightth" class="get-in-t">Get In Touch</a>
        <div class="slidescroll-wrap">
            <!-- this element is required -->
            <div class="main">
                <!-- this element will be animated -->
                <div class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #43cea2;background: -webkit-linear-gradient(to right, #185a9d, #43cea2);
background: linear-gradient(to right, #185a9d, #43cea2);" id="start" data-slidescroll-title-selector="h1">
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="fir">
                        <div class="col-md-12" style="text-align: center;">
                            <h2 style="margin-bottom:0px;" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Experience Learning By Doing.<!--<br> <span class="marks">MarkSharks <span></span></span>--></h2> <img class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s" src="http://mogulsdemo.com/mark1/new/icon.png"> </div>
                        <div class="col-md-12 teet">
                            <p class="andr app_content wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">Learn CBSE Maths and Science with the MarkSharks app. MarkSharks uses active learning techniques, helping you improve your marks by up to 20%. Experience our innovative and clear content for yourself.</p>
							
							<p class="andr app_down wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s" style="padding-bottom:10px;" ><a href="https://play.google.com/store/apps/developer?id=MarkSharks&hl=en"><img class="wow fadeInUp" style="border-radius: 0px;" data-wow-duration="1s" data-wow-delay="2s" src="http://mogulsdemo.com/marksharks/images/googleplay.png"></a> Download now for a 7-day free trial! </p>
                            <p class="srll wow fadeInUp" data-wow-duration="1s" data-wow-delay="3s"><img class="scrl" src="http://www.symodd.com/img/scroll-down.png" /></p>
                            <br/>
                            <div class="col-md-12">
                                <div class="center-do-not-use">
                                    <!--
  <div class="mouse">
    <div class="wheel"></div>
  </div>
-->
                                    <div> <span class="arrow"></span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #114357;background: -webkit-linear-gradient(to right, #F29492, #114357);background: linear-gradient(to right, #F29492, #114357);" id="second" data-slidescroll-title="Second">
                    <!-- these elements hold each content page -->
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="">
                        <div class="col-md-5">
                            <h2>Our Teaching Philosophy: Learn by Doing</h2>
                            <p>Become an active learner with 3D simulations, challenging games, and formative questions. Active learning can boost your marks by up to 20%. Experience our immersive and multisensory content for yourself.</p>
                              <p><a class="see-yourself" href="https://www.youtube.com/watch?v=lgOYAIa23ac">Click the link to see for yourself.</a></p>
                            <div class="button">
                                <!--
                                    <a href="#">
                                        
                                        <img src="http://mogulsdemo.com/mark1/img/play1.png" style="width: 54%;">
                                    </a>
--></div>
                        </div>
                        <div class="col-md-7">
						<!--
                            <video class="homevide"  width="" height="" id="" muted="" preload="auto" poster="" autoplay="" loop="">
                               
			 
                                <source src="http://www.mogulsdemo.com/marksharks/ipad-frame.mp4" type="video/mp4">
                                <!--  <source src="mov_bbb.ogg" type="video/ogg"> </video>-->
								
								
                        <img src="http://mogulsdemo.com/marksharks/images/videoimg.jpg"/></div>
                        <p class="srll"><img class="scrl" src="http://www.symodd.com/img/scroll-down.png" /></p>
                        <br/> </div>
                </div>
                <div class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #B993D6;background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6);background: linear-gradient(to right, #8CA6DB, #B993D6);" id="third" data-slidescroll-title="third">
                    <!-- these elements hold each content page -->
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="">
                        <div class="col-md-5">
                            <h2>Explore Demo Lessons.</h2>
							<p>click the links to download free interactive demos on your android mobile devices for</p>
                           
							 <p><a class="see-yourself" href="https://play.google.com/store/apps/details?id=com.oksedu.marksharks.miniApp.literalInversion&hl=en">Lateral Inversion</a></p>
							<p><a class="see-yourself" href="https://play.google.com/store/apps/details?id=com.oksedu.marksharks.miniApp.friction&hl=en"> Sliding Friction</a></p>
                         
                            <div class="button">
                                <!--
                                    <a href="#">
                                        
                                        <img src="http://mogulsdemo.com/mark1/img/play1.png" style="width: 54%;">
                                    </a>
--></div>
                        </div>
                        <div class="col-md-7">
						<!--
                            <video class="homevide" width="" height="" id="" muted="" preload="auto" poster="" autoplay="" loop="">
                                <source src="http://mogulsdemo.com/mark1/new/Moon.mp4" type="video/mp4" style="border-radius: 15px;">
                                Your browser does not support HTML5 video. </video>-->
								<img class="homevide" src="http://mogulsdemo.com/mark1/img/Formula.gif" /> 
                        </div>
                        <p class="srll"><img src="http://www.symodd.com/img/scroll-down.png"  class="scrl"/></p>
                        <br/> </div>
                </div>
                
                <div id="fifth" class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #4568DC;background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);background: linear-gradient(to right, #B06AB3, #4568DC);" data-slidescroll-title-selector="fifth">
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="">
                        <div class="col-md-5">
                            <h2>Exam Prep Tool: All You Need, In One Place</h2>
                            <p>Our Exam Prep Tool has everything you need to prepare for exams. The Revision Tool has summaries of every key concept tested and links back to any interactive content explaining the topic. You’ll find a glossary of all the key definitions, and hundreds of solved questions.</p>
                            <div class="button">
                                <!--
         <a href="#">
            <img src="http://mogulsdemo.com/mark1/img/play1.png" style="width: 54%;">
        </a>
--></div>
                        </div>
                        <div class="col-md-7" style="text-align:center;">
                            <div class="col-md-7"> <img class="homegif" src="http://mogulsdemo.com/mark1/img/rev.gif" /> </div>
                        </div>
                        <p class="srll"><img src="http://www.symodd.com/img/scroll-down.png" class="scrl"/></p>
                        <br/> </div>
                </div>
                <div id="sixth" class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #800080;background: -webkit-linear-gradient(to right, #ffc0cb, #800080);background: linear-gradient(to right, #ffc0cb, #800080);" data-slidescroll-title-selector="sixth">
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="">
                        <div class="col-md-5">
                            <h2>Score. More.</h2>
                            <p>Use our Pre and Post Tests before and after each chapter to track your progress. With a question bank of over fifty questions per chapter, you can take our post test multiple times to keep improving. After each test you can see and learn from previous mistakes.</p>
                            <div class="button">
                                <!--
                                    <a href="#">
                                        <img src="http://mogulsdemo.com/mark1/img/play1.png" style="width: 54%;">
                                    </a>
--></div>
                        </div>
                        <div class="col-md-7">
                            <video class="homevide"  width="" height="" id="" muted="" preload="auto" poster="" autoplay="" loop="">
                                <source src="http://mogulsdemo.com/mark1/img/slider.mp4" type="video/mp4">
                                <!--  <source src="mov_bbb.ogg" type="video/ogg">-->Your browser does not support HTML5 video. </video>
                        </div>
                    </div>
                </div>
				
				<div id="seventh" class="page" style="padding: 7% 2% 2% 2%;width: 100%;background: #800080;background: -webkit-linear-gradient(to right, #ffc0cb, #800080);background: linear-gradient(to right, #ffc0cb, #800080);" data-slidescroll-title-selector="sixth">
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                    <div class="review_home">
					  
   <div class="pricing-tables pricing-tables-classic medium-padding120 bg-border-color">
    <div class="container">
        
        <div style="text-align: center; margin: 0px 0px 15px 0px;">
        <div class="col-12 mb-3">
                    <h1>Testimonials </h1>
                    <span class="bottom-small-underline"></span>
                </div>
            
        
        </div>
        
        <div class="col-md-12 dlrs">
        <div class="col-lg-4 col-md-6 col-sm-12">
            
            <div class="pricing-tables-item">

                                <div class="pricing-tables-icon">
                                    <img src="http://www.mogulsdemo.com/marksharks/assets/images/prem1.png" alt="personal">
                                </div>
                              <h2 class="pricing-title">Prem <br>
Class 8th Student</h2>
                               
                                <p class="rate">
								My problem was that I always forgot answers while writing my exam paper. But
studying and revising with MarkSharks has helped me to remember all the answers.
I have scored well this time.
</p>
                               

                        </div>
            
            </div>
       
        <div class="col-lg-4 col-md-6 col-sm-12">
            
            <div class="pricing-tables-item">

                                <div class="pricing-tables-icon">
                                    <img src="http://www.mogulsdemo.com/marksharks/assets/images/hardik.png" alt="personal">
                                </div>
                                <h2 class="pricing-title">Hardik Panwar <br>
Class 9th Student</h2>
                               
                                <p class="rate"> I love MarkSharks! It has helped me study, revise, and even do the last minute exam preparations. The simulation exercises, revision tool, glossary, and notes make learning Maths &amp; Science concepts easy.</p>
                               

                        </div>
            
            </div>
			
			
			 <div class="col-lg-4 col-md-6 col-sm-12">
            
            <div class="pricing-tables-item">

                                <div class="pricing-tables-icon">
                                    <img src="http://www.mogulsdemo.com/marksharks/assets/images/ravinder.png" alt="personal">
                                </div>
                                <h2 class="pricing-title">Mr. Ravindra Patil <br>
Parent of Vikram, Class 9th Student</h2>
                            
                                <p class="rate">I always believed that learning should not be restricted to books. I am really 
impressed to see my son apply the concepts he learns in everyday life. All thanks
to MarkSharks, my son's performance in exams has also improved tremendously!</p>
                              

                        </div>
            
            </div>
			
			
        </div>
        
       
    
    </div>
        </div>
     
					  
					 
 
                    </div>
                </div>
				
				
				<div id="eightth" class="page" style="padding: 10% 2% 2% 2%;width: 100%;background: #800080;background: -webkit-linear-gradient(to right, #ffc0cb, #800080);background: linear-gradient(to right, rgb(255, 192, 203), rgb(122, 149, 251));" data-slidescroll-title-selector="sixth">
                    <svg class="waves" width="1440px" height="151px" viewBox="0 0 1440 151" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M912.991178,66.4593918 C797.063995,82.3093166 700.419678,99.9377008 407.073503,99.9377008 C113.727328,99.9377008 -65.7078119,79.5645454 -65.7078119,79.5645454 L4.60677034,177.012232 L1459.69351,177.012232 C1459.69351,177.012232 1758.75555,11.6921642 1603.51394,1.88562492 C1448.27233,-7.92091441 1028.91836,50.609467 912.991178,66.4593918 Z" id="wavey" fill="#FFFFFF" opacity="1"></path>
                    </svg>
                    <div class="particles">
                        <!--data-aos="fade-down"-->
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                        <div class="particle"></div>
                    </div>
                        <div class="col-md-12 wantscl" style="text-align: center;">
        <div class="col-12 mb-3">
                    <h1>Get in touch with us to revolutionize you and your child’s learning!</h1>
                    <span class="bottom-small-underline"></span>
            
                </div>
            
        <div class="col-md-12 queryform ">
		<form action="http://mogulsdemo.com/php/mrks/send_query.php" method="post">
        <div class="col-md-6"><input type="text" name="name" placeholder="Name" required></div>
        <div class="col-md-6"><input type="tel" name="phone" placeholder="Phone" required></div>
        <div class="col-md-6"><input type="email" name="email" placeholder="Email" required></div>
        <div class="col-md-6"><input type="textarea" name="comment" placeholder="Mesage"></div>
            <div class="col-md-12" style="float:left;"><input type="submit" value="Submit" style="background: #36D1DC;background: -webkit-linear-gradient(to right, #5B86E5, #36D1DC);background: linear-gradient(to right, #5B86E5, #36D1DC);color: #fff;text-transform: uppercase;"></div>
        </form>
        </div>
        </div>
                </div>
				
				
            </div>
        </div>
        <!--HOMEPAGE FOOTER-->
        <div id="footer">
            <div class="bottom-row">
                <div class="">
                    <div class="">
                        <div style="float: left;z-index: 99999999999;position: inherit;">
                            <ul class="social">
                                <li><a href='https://www.facebook.com/mymarksharks/' target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href='https://twitter.com/mymarksharks?lang=en' target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href='https://www.instagram.com/mymarksharks/' target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 text-center">
                            <!--                    <a href="<?php echo base_url(); ?>loadfront/faq">FAQ</a>--><a href="<?php echo base_url(); ?>loadfront/career">CAREER</a>
                            <!--                    <a href="<?php echo base_url(); ?>loadfront/ourbrand">OUR BRAND</a>-->
                            <a href="<?php echo base_url(); ?>loadfront/termsandconditions">TERMS & CONDITIONS</a>
                            <!-- <a href="<?php echo base_url(); ?>loadfront/sitemap">SITE MAP</a> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
		 
		  


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slidescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://mogulsdemo.com/html/kohinoorcontinental/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script>
            $(document).ready(function () {
                $('.main').slidescroll({
                    'pagesSelector': '.page'
                });
            });
        </script>
		
		 <style>
		 .review_home h1{font-size: 28px;
    color: #fff;
    font-weight: 100;
    letter-spacing: 0px;
    line-height: 31px;
    text-transform: uppercase;}
	
	.review_home .pricing-title {
       font-size: 14px;
    margin-bottom: 15px;
    display: block;
    color: #000;
    font-weight: bold;
    line-height: 20px;
}

.review_home .pricing-tables-item .rate {
       font-weight: bold;
    color: #000;
    margin-bottom: 0;
    line-height: 24px;
    font-size: 13px;
}

.review_home .pricing-tables-item .pricing-tables-icon {
  width: 100px;
    height: 100px;
    border: 0 solid #f7f9f9;
    border-radius: 50%;
    position: relative;
    margin: 0 auto 0;
}
.review_home .pricing-tables-icon img{
        width: 85%;
    border-radius: 15px;
    box-shadow: 1px 1px 16px #ffffff00;
}
.review_home .pricing-tables-item { padding:10px 25px;background-color: rgba(255, 255, 255, 0.48);
    box-shadow: 15px 0 80px rgba(0, 0, 0, 0.2);
    border-radius: 10px;}
	
.get-in-t {
    position: fixed;
    right: -63px;
    top: 50%;
    z-index: 999999;
    background: #2177be;
    padding: 10px 20px;
    transform: rotate(-90deg);
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 2px;
}
.get-in-t:hover{text-decoration:none; color:#fff;}
.get-in-t:focus{text-decoration:none; color:#fff;}
	
.review_home .pricing-tables-item {
    height: 370px;
}

.app_content{width:80%;}
.app_content {
    font-size: 16px !important;
    line-height: 33px;
    line-height: 25px !important;
    margin-bottom: 0px;
    padding-bottom: 7px;
}
		 </style>
</body>

</html>
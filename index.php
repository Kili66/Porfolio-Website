<?php 
 session_start();
    if( isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['username'])) {

    
    // code...
}

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Above Free Responsive Template | Template Stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/Css/flaticon/flaticon.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1200);
            });
        });
    </script>
</head>

<body>
    <div class="header" id="head">
        <div class="container">
            <div class="header-top">
                <div class="logo">
                    <a href="index.php">PORTFOLIO</a>
                </div>
                <div class="top-menu">
                    <span class="menu"> </span>
                    <ul>
                        <nav class="cl-effect-5">
                            <li><a class="active" href="#home"><span data-hover="Home">home</span></a></li>
                            <li><a href="#about" class="scroll"><span data-hover="about">about-me</span></a></li>
                            <li><a href="#work" class="scroll"><span data-hover="work"><span>work</span></a></li>
                            <li><a href="#Login" class="scroll"><span data-hover="Login">Login</span></a></li>
                            <li><a href="#contact" class="scroll"><span data-hover="contact">contact</span></a></li>
                            <li><a class="active" href="#register"><span data-hover="Register">Sign up</span></a></li>
                        </nav>
                    </ul>
                </div>
                <!--script-nav-->
                <script>
                    $("span.menu").click(function() {
                        $(".top-menu ul").slideToggle("slow", function() {});
                    });
                </script>
                <div class="clearfix"></div>
            </div>
            <div class="index-banner">
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <h1>hello world,</h1>
                                    <h2>i am <span>Cyber security researcher & web developper</span></h2>
                                    <h2>from CHAD</h2>
                                </div>
                            </div>
                        </article>
                        <article style="position: relative; width: 100%; opacity: 1;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <h1>Content here,</h1>
                                    <h2><span>Cyber Security &  web developper</span></h2>
                                    <h2>Contrary</h2>
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner_center">
                                    <!-- <h1>Lorem Ipsum ,</h1> -->
                                    <h2>Contrary to <span>&  designer</span></h2>
                                    <h2>reproduced below</h2>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="about-section" id="about" id="about">
            <div class="container">
                <div class="about-header">
                    <h3>about me</h3>
                    <div class="about-text">
                        <p>Hello and Welcome to my website !!!.</p>
                        <p>Hi!! My name is Mariam. I'm 22 years old. I'm in computer Engineering Department and i'm interested in cybersecurity and web development... </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-sectiongrids">
                    <div class="col-md-6 about-leftgrid">
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Html/Css</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Cyber intelligence</h4>
                                </div>
                                <div class="percentage">
                                    <p>40%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Ethical Hacking</h4>
                                </div>
                                <div class="percentage">
                                    <p>45%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Html/Css</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 about-rightgrid">
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Network</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Linux</h4>
                                </div>
                                <div class="percentage">
                                    <p>75%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Cybersecurity</h4>
                                </div>
                                <div class="percentage">
                                    <p>50%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                        <div class="polls">
                            <div class="poll">
                                <div class="poll-desc">
                                    <h4>Web development</h4>
                                </div>
                                <div class="percentage">
                                    <p>50%</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="skills">
                                <div style="width:75%"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="arrow1">
                    <a href="#work" class="scroll"><img src="images/arrow1.png" alt="" /></a>
                </div>
            </div>
        </div>
        <!-- about-section-ends -->
        <div class="works-section" id="work" id="work">
            <div class="works-header">
                <h3>works</h3>
                <p>This is Mariam Kili Bechir website </p>
            </div>
            <div class="portfolio-section-bottom-row" id="portfolio">
                <div class="container">

                    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true // 100% fit in a container
                            });
                        });
                    </script>
                    <link rel="stylesheet" href="css/swipebox.css">
                    <script src="js/jquery.swipebox.min.js"></script>
                    <script type="text/javascript">
                        jQuery(function($) {
                            $(".swipebox").swipebox();
                        });
                    </script>
                    <!-- Portfolio Ends Here -->
                    <div class="sap_tabs">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Branding</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Print</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Web design</span></li>
                                <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Photography</span></li>
                                <div class="clearfix"></div>
                            </ul>
                            <div id="portfoliolist">
                                <div class="resp-tabs-container">
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-1.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-2.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-3.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-3.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-4.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-4.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-5.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-5.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-6.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-6.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-7.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-7.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-8.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-8.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-5.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-5.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-6.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-6.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-7.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-7.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-8.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-8.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">

                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-2.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-3.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-3.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-4.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-4.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-1.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-2.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-2.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
                                        <div class="tab_img">
                                            <div class="col-md-3 img-top grid_box">
                                                <a href="images/pic-1.jpg" class="swipebox" title="Image Title">
                                                    <img src="images/pic-1.jpg" class="img-responsive" alt="">
                                                    <span class="zoom-icon"></span>
                                                </a>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="arrow">
                        <a href="#Login" class="scroll"><img src="images/arrow.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- portfolio-section-ends -->
<div class="services-section" id="Login">
    <div class="container">
    <?php
       // hhhhhhhhhhhhhhhhhhhhhh

       if(isset($_POST['variable']))

    if(isset($_POST['username']))
    ?>
        <div class="services-header">
            <h3>LOGIN</h3>
        </div>
    <div class="wrapper ">
    <div class="h2 text-center">Enter your login details</div>
    <form action="" method="POST">
        <div class="form-group py-2">
            <div class="input-field">
            <input type="text" placeholder="Username or Email Address" required class=""> </div>
        </div>
        <div class="form-group py-1 pb-2">
        <div class="input-field"> 
        <input type="text" placeholder="Enter your Password" required class=""> 
        </div>
        <br>
        <div class="d-flex align-items-start">
            <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
            <div class="ml-auto"> <a href="#" id="forgot">Forgot Password?</a> </div> <br>
        </div> 
        <button class="btn btn-block text-center my-3" style="color: black;">Log in</button>
        <div class="text-center pt-3 text-muted">Not a member? <a href="register.php">Sign up</a></div>
    </form>
</div>
    </div>
    </div>
        <!-- services-section-ends -->
    </div>
    <div class="footer-section" id="contact" id="contact">
        <div class="container">
            <div class="contact-header">
                <h3> contact</h3>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                    a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
            </div>
            <div class="social-icon">
                <a href="#"><i class="icon1"></i></a>
                <a href="#"><i class="icon2"></i></a>
                <a href="#"><i class="icon3"></i></a>
                <a href="#"><i class="icon4"></i></a>
                <a href="#"><i class="icon5"></i></a>
                <a href="#"><i class="icon6"></i></a>
                <a href="#"><i class="icon7"></i></a>
                <a href="#"><i class="icon8"></i></a>
            </div>
            <div class="contact">
                <form>
                    <div class="col-md-4 contactgrid">
                        <input type="text" class="text" value=" name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
                    </div>
                    <div class="col-md-4 contactgrid">
                        <input type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
                    </div>
                    <div class="col-md-4 contactgrid">
                        <input type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
                    </div>
                    <div class="col-md-8 contactgrid1">
                        <textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';">Your Message</textarea>
                    </div>
                    <div class="col-md-4 contactgrid2">
                        <input type="submit" value="[send message]">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="footer-bottom">

                <p>&copy; Mariam Kili Bechir . All rights Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>

            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
            </script>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        </div>

    </div>
    </div>


</body>

</html>
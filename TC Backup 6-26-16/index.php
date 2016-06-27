<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Think.Connect</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet"  href="css/elements.css" />
    <script src="js/my_js.js"></script> 
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <style>
        #about img{
            max-height: 315px;
        }
        #about p {
            color: #000;
        }
        #services img{
            height: 100%;
            width: 100%;
            /*max-height: 600px;*/
        }
        #skills img{
            height: 100%;
            width: 100%;
            /*max-height: 600px;*/
        }
        .mydivhide {
            display: none
            }
    </style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onclick = "check(event)">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <i class="fa fa-play-circle"></i>-->
                    <span class="light"><div id="headerlogo"><img src="img/TC-animation-try.gif"></div></span> <!--</span><span style="color:#2592c5">-->
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#works">Works</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#skills">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <img class="headerlogo" src="img/profile2.png" alt="">
                        <h1 class="brand-heading">Think.<span style="color:#2592c5">Connect</span></h1>
                        <a href="#home" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Home Section -->
 <div id="welcomeback">   
    <section id="home" class="container content-section text-center">
     <div class="welcome-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>WELCOME QOUTES</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et.m ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feu</p>
            </div>
        </div>
     </div>
    </section>
</div>

    <!-- Works Section -->
    <section id="works" class="content-section text-center">
        <div class="works-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>WORKS</h1>
                    <HR>
                    <p><span>All</span><span>Website</span><span>Articles</span><span>Grayscale</span></p>
                </div>
            </div>
                
<!-- Works Grid  --><section class="main">
            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item1.jpg"/>
                    <div class="content">
                        <h2 class="title">SL Ruiz Furniture</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item2.jpg"/>
                    <div class="content">
                        <h2 class="title">Microsoft</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item3.jpg"/>
                    <div class="content">
                        <h2 class="title">Apple</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item4.jpg"/>
                    <div class="content">
                        <h2 class="title">Kudz Fried Chicken</h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item1.jpg"/>
                    <div class="content">
                        <h2 class="title">SL Ruiz Furniture</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item2.jpg"/>
                    <div class="content">
                        <h2 class="title">Microsoft</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item3.jpg"/>
                    <div class="content">
                        <h2 class="title">Apple</h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#works" class="work page-scroll">
                    <img class="media" src="img/tryimages/item4.jpg"/>
                    <div class="content">
                        <h2 class="title">Kudz Fried Chicken</h2>
                    </div>
                </a>
            </div>

        </section><!-- End of Works Grid  -->
     </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
    <div class="about-section">
        <div class="row">
            <!--<div class="col-lg-8 col-lg-offset-2">-->
		                    <img src="img/abouttitle.png" />
                            <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et.m ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feu
                            </p>		                    
		                 
            <!--</div>-->
        </div>
     </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container content-section text-center">
    <div class="services-section">
        <div class="row">
            <!--<div class="col-lg-8 col-lg-offset-2">-->
                            <div id="picbox"><img src="img/services.png" /></div>
            <!--</div>-->
        </div>
     </div>
    </section>

     <!-- Team Section -->
    <section id="team" class="content-section text-center">
        <div class="team-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>TEAM</h1>
                    <HR>
                    
                </div>
            </div>
<!-- Team Grid  --><section class="main">
        <div id="items">
            <div class="item">
                <a id="1" class="work page-scroll">
                    <img class="media" src="img/tryimages/greggy.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/greggy.gif"/>
                    <!--<h2 class="title">Click</h2>!-->
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="2" class="work page-scroll">
                    <img class="media" src="img/tryimages/dennise.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/dennise.gif"/>
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="3" class="work page-scroll">
                    <img class="media" src="img/tryimages/jm.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/jm.gif"/>
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="4" class="work page-scroll">
                    <img class="media" src="img/tryimages/hannah.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/hannah.gif"/>
                    </div>
                </a>
            </div>
        </div>
    </section><!-- End of Works Grid  -->
            <div id="pages">
                <div id="1" class="mydivhide">
                <h1>Greggy Rick Go</h1><h4>/Chief Executive Officer</h4>
                </div>
                <div id="2" class="mydivhide">
                <h1>Dennise Recuerdo</h1><h4>/Secretary</h4>
                </div>
                <div id="3" class="mydivhide">
                <h1>Jude Marlon Alegro</h1><h4>/Head Web Developer</h4>
                </div>
                <div id="4" class="mydivhide">
                <h1>Hannah Lois Aliposa</h1><h4>/Head Content Writer</h4>
                </div>
            </div>


            <!-- Team Grid  --><section class="main">
        <div id="items2">
            <div class="item">
                <a id="5" class="work page-scroll">
                    <img class="media" src="img/tryimages/rd.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/rd.gif"/>
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="6" class="work page-scroll">
                    <img class="media" src="img/tryimages/soc.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/soc.gif"/>
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="7" class="work page-scroll">
                    <img class="media" src="img/tryimages/anj.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/anj.gif"/>
                    </div>
                </a>
            </div>

            <div class="item">
                <a id="8" class="work page-scroll">
                    <img class="media" src="img/tryimages/ian.png"/>
                    <div class="content">
                    <img class="media" src="img/tryimages/ian.gif"/>
                    </div>
                </a>
            </div>
          </div>
        </section><!-- End of Works Grid  -->
        <div id="pages2">
                <div id="5" class="mydivhide">
                <h1>Ruth Danielle Aliposa</h1><h4>/Head Web Designer</h4>
                </div>
                <div id="6" class="mydivhide">
                <h1>Christopher Emmanuel Socong</h1><h4>/Web Developer</h4>
                </div>
                <div id="7" class="mydivhide">
                <h1>Angineth Bantiles</h1><h4>/Web Content Writer</h4>
                </div>
                <div id="8" class="mydivhide">
                <h1>Ian Kevin Mendova</h1><h4>/Web Developer</h4>
                </div>
            </div>
     </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="content-section text-center">
    <div class="skills-section">
        <div class="row">
            <!--<div class="col-lg-8 col-lg-offset-2">-->
                            <div id="picboxskills"><img src="img/skills.png" /></div>
            <!--</div>-->
        </div>
     </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Contact</h1>
                    <HR>
                    <ul id="contacticons">
                        <li><img src="img/contacticons/address.png">Lorem ipsum dolor sit amet,consectetuer adipiscing elit</li>
                        <li><img src="img/contacticons/phone.png">0917 325 6776</li>
                        <li><img src="img/contacticons/email.png">think.connect@gmail.com</li>
                    </ul>
                    <ul id="socialmediaicons">
                    	<li><img id="popup" onclick ="div_show()" src="img/socialicons/mail_icon.png"></li>
                    	<li><img src="img/socialicons/fb_icon.png"></li>
                    	<li><img src="img/socialicons/twitter_icon.png"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Think.Connect 2014</p>
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

    <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
    <script>
            $("#items a").click(function() {
            var id = $(this).attr("id");
            $("#pages div#" + id + "").toggle("slow").siblings().hide("slow");
        });
    </script>
    <script>
            $("#items2 a").click(function() {
            var id = $(this).attr("id");
            $("#pages2 div#" + id + "").toggle("slow").siblings().hide("slow");
        });
    </script>    
    <!-- Popup div starts here -->
                    <div id="abc"><div id="popupContact"> 

                        <!-- contact us form -->
                            <form action="secure_email_code.php" method="post" id="form" >
                                <img src="img/close.png" id="close"/>
                                <h2>Drop Us A Mail</h2><hr/>
                                <input type ="text" name="vname" id="name" value="" placeholder="Your Name"/>
                                <input type ="text" name="vemail" id="email" value="" placeholder="Your Email"/>
                                <textarea name="msg" id="msg" placeholder="Type your text here..."></textarea>
                                <a id="submit" href="javascript: check_empty()">Send</a>
                            </form>
                            <h3><?php include "secure_email_code.php"?></h3>
                    </div></div> 
                     <!-- Popup div ends here -->
</body>

</html>

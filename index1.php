<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TKJ Stembayo | Home</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery2.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.flexisel.js"></script>
    
    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

	<?php
	$user_name = "root";
	$password = "";
	$database = "nyoba";
	$host_name = "localhost"; 
	 
	mysql_connect($host_name, $user_name, $password);
	$find_db=mysql_select_db($database);
 
	if ($find_db) {
	 
	 echo "Database  Ada";
	 
	}else {
	 
	 echo "Database Tidak Ada";
	 
	}
	 
	?>

  </head>
  <body>
    <!-- Header Section -->
    <div class="header page-scroll navbar-fixed-top">
		<div class="container">
			<div class="row">
			  	<div class="col-md-12">
					<div class="header-left">
					 	<div class="logo">
							<a href="index.html"><img src="img/logo tkj.png" alt=""/></a>
						</div>
						<div class="menu">
					  		<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav navbar-nav" id="nav">
						    	<li><a class="page-scroll" href="#">Home</a></li>
						    	<li><a class="page-scroll" href="profil.html">Profil</a></li>
						    	<li><a class="page-scroll" href="prestasi.html">Prestasi</a></li>
						    	<li><a class="page-scroll" href="event.html">Event</a></li>
								<li><a class="page-scroll" href="berita.html">Berita</a></li>				
								<div class="clear"></div>
							</ul>
				    	</div>							
	    		    	<div class="clear"></div>
	    	    	</div>
	            	<div class="header_right"><!-- start search-->
				      	<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
								<img src="img/search.png"/>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"></span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
		           		<div class="clear"></div>
	       			</div>
	      		</div>
		 	</div>
	    </div>
	</div>
	
	<!-- Home Section -->
    <div id="home">
        <div class="container text-center">
            <!-- Navigation -->
            <div class="content">
                <h4>Another Legendary Engineer</h4>
                <hr>
                <div class="header-text btn">
                    <h1><span id="head-title"></span></h1>
                </div>
            </div>

            <a href="#profil" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- Meet Us Section -->
    <div class="segitiga-a"></div>
    <div id="profil">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                    	<div class="space"></div>
                        <h2>PROFIL</h2>
                        <hr>
                    </div>
                    <p>iki kan ra kanggo soale</p>
                    <div>
                    	<a href="profil.html" class="btn read-more-btn">More Information</a>
                    </div>
                    <a href="#prestasi" class="down-btn page-scroll">
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="space"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="segitiga-b"></div>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
            </div>
        </div>
    </div>

    <!-- prestasi Section -->
    <div class="segitiga-a"></div>
    <div id="prestasi">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <div class="space"></div>
                        <h2>Prestasi</h2>
                        <hr>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <figure class="bar sd round">
              			<img class="strech round" src="img/team/01.jpg" alt=""> 
              			<figcaption class="round">
              				<h5>Prestasi</h5>
              				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti ... 
              				<a href="#" class="btn go-to-btn edit-record" data-toggle="modal" data-target="#myModal" data-id="Nor Arifah">Detail</a>
              			</figcaption>  
          			</figure>
                </div>

                <div class="col-md-4 col-sm-4">
                    <figure class="bar sd round">
              			<img class="strech round" src="img/team/02.jpg" alt=""> 
              			<figcaption class="round">
              				<h5>Prestasi</h5>
              				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti ... 
             				<a href="#" class="btn go-to-btn edit-record" data-toggle="modal" data-target="#myModal" data-id="Nor">Detail</a>
              			</figcaption>  
          			</figure>
                </div>

                <div class="col-md-4 col-sm-4">
                    <figure class="bar sd round">
              			<img class="strech round" src="img/team/03.jpg" alt=""> 
              			<figcaption class="round">
              				<h5>Prestasi</h5>
              				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti ... 
            				<a href="#" class="btn go-to-btn edit-record" data-toggle="modal" data-target="#myModal" data-id="Nor Arifah">Detail</a>
              			</figcaption>  
          			</figure>
                </div>
            </div>
            <div class="bar">
            <a href="prestasi.html" class="btn read-more-btn">More Information</a>
            </div>
            <a href="#event" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
            <div class="space"></div>
        </div>
    </div>
    <div class="segitiga-b"></div>

    <!-- Call-to-Action Section -->
    <div id="cta">
    	<div class="overlay">
	        <div class="container text-center">
	            <h1>"Jangan Bermimpi Jika Tak Berani Jatuh"</h1>
	            <h3>Kata Kata Bijak</h3>
	        </div>
        </div>
    </div>

    <!-- Portfolio Section -->
<!--    <div class="segitiga-a"></div>
    <div id="event">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <div class="space"></div>
                        <h2>EVENTS</h2>
                        <hr>
                    </div>                    
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <!--<div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Logo Design</h5>
                                    <p class="lead">Client Seal</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Stationery</h5>
                                    <p class="lead">Design Project</p>
                                    <div class="hline"></div>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Branding</h5>
                                    <p class="lead">Metalbrand</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 nopadding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h5>Business Card</h5>
                                    <p class="lead">Clothing Line</p>
                                    <div class="hline"></div>
                                </div>
                            </a>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    <!--    <div class="space"></div>
        <div class="text-center">
            <div class="bar">
            	<a href="event.html" class="btn read-more-btn">More Information</a>
            </div>
            <a href="#contact" class="down-btn page-scroll"><span class="fa fa-angle-down"></span></a>
            <div class="space"></div>
        </div>
    </div>
    <div class="segitiga-b"></div>

    <!-- Clients Section -->
<!--    <div id="clients">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Our Partners</h2>
                    <hr>
                </div>

                <ul class="clients">
                    <li><a href="#"><img src="img/clients/01.png" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="img/clients/02.png" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="img/clients/03.png" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="img/clients/04.png" class="img-responsive" alt="..."></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <!--<div class="segitiga-a"></div>
    <div id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>About Us</h2>
                        <hr>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/02.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Lian Gwapa</h4>
                                <p class="small">CEO/Founder</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/04.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Jenn Pereira</h4>
                                <p class="small">Web Coder</p>
                                <hr>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team">
                                <img src="img/team/03.jpg" class="img-responsive img-circle" alt="...">
                                <br>
                                <h4>Alan Podemski</h4>
                                <p class="small">Web Designer</p>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-2 col-sm-2">
                    <div class="team hire">
                        <h4>We Are Hiring!</h4>
                        <hr>
                        <div class="space"></div>
                        <a href="#">
                            <span class="fa fa-paper-plane-o fa-2x"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#contact" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>

        </div>
    </div>
    <div class="segitiga-b"></div>-->

        <!-- Testimonial Section -->
    <!--<div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>What my Clients Say...</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3>Et iusto odio dignissimos ducimus qui blanditiis <br>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint <br>occaecati cupiditate non provident. </h3>
                    <br>
                    <h6>LJ, Abc Company</h6>
                  </div>

                  <div class="item">
                    <h3>Fusce dapibus, tellus ac cursus commodo, tortor<br> mauris condimentum. Duis mollis, est non commodo luctus, nisi erat </h3>
                    <br>
                    <h6>Kai, Web Geekster</h6>
                  </div>

                  <div class="item">
                    <h3>Cras justo odio, dapibus ac facilisis in, egestas <br>eget quam. Donec id elit non mi porta gravida at eget metus.</h3>
                    <br>
                    <h6>Jenn, Coders' Playground</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>-->
    

    <!-- Contact Section -->
    <div class="segitiga-a"></div>
    <div id="contact">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Us</h2>
                <hr>
            </div>
            <div class="space"></div>

            <div class="row">
                <div class="col-md-3">
                    <address>
                        <strong>Alamat</strong><br>
                        <br>
                       	SMK N 2 Depok Sleman<br>
                        55281, Yogyakarta<br>
                        Phone: (gk tau)
                        <ul class="social">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                          </ul>
                    </address>
                </div>

                <div class="col-md-9">
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                                <input type="text" class="form-control" placeholder="Phone No.">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Email">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                        <div class="text-right">
                            <a href="#" class="btn send-btn">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <nav id="footer">
        <div class="container">
            <div class="pull-left">
                <p>2017 © ECodingCorp. All Rights Reserved.</p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>
    
    <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="bootstrap.js"></script>
        <script>
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('hasil.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>

    <script src="js/owl.carousel.js"></script>
    <script src="js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["Teknik Komputer Jaringan", "SMK N 2 DEPOK SLEMAN" ],
            typeSpeed: 90,
            loop: true,
            startDelay: 90
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" boot="js/jquery.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { 
    setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
    </script>
    <script src="js/responsive-nav.js"></script>

  </body>
</html>
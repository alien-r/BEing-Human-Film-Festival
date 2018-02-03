<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Home | BEing Human Film Festival</title>
    
    <!--Favicon-->
    <link rel="icon" type="image/png" href="content/images/BHico.png" sizes="16x16">
    <!--Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Meta Data-->
    <meta name="keywords" content="bhff2018, bhff, BEing Human Film Festival, international, film festival, short films, film making, inner-west sydney, sydney, australia, high school students, school project, education, youth, being human, news, promo video, current news, useful links, home page, homepage, compassion, understanding, tolerance, 108 lives project, one community, special screening, grand final event, fundraising">
    <meta name="description" content="Stay up-to-date with all current BEing Human Film Festival news and find useful links by visting the BHFF home page">
    <!--Open Graph Data-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.beinghumanfilmfestival.com/">
    <meta property="og:title" content="Home | BEing Human Film Festival">
    <meta property="og:image" content="content/images/BHFFog.jpg">
    <meta property="og:description" content="Stay up-to-date with all current BEing Human Film Festival news and find useful links by visting the BHFF home page">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Roboto" rel="stylesheet">
    <!--Base href-->
    <!--<base href="http://www.beinghumanfilmfestival.com/" target="_blank">-->
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--Font Awesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet"	type="text/css"	href="css/styles.css">
</head>
<?php
    
    include_once ('php/connection.php');

    $sql = "select * from homepageContent where ContentID = 1";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    $contentTitle = $row['ContentTitle'];
    $contentSubtitle = $row['ContentSubtitle'];
    $contentBody = $row['ContentBody'];
    
?>
<body id="index">
    <!--Header-->
    <nav class="navbar navbar-expand-lg navbar-toggleable-md fixed-top">
        <div class="container">
            <!--Logo-->
            <a href="index.php" class="navbar-brand my-1"><img class="logo"  src="content/images/BHFFlogo.png"/></a>
            <!--Nav Menu-->
            <div class="collapse navbar-collapse justify-content-center" id="nav-menu">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a class="nav-link px-3 py-2" href="index.php">Home</a>
                    </li>
                    <li class="dropdown d-none d-lg-block d-xl-block"><!--Dropdown menu-->
                        <a class="px-3 py-2 nav-link dropdown-toggle" href="about.html" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="contact.html">Contact Us</a>
                        </div>
                    </li>
                    <li class="d-lg-none d-xl-none "><!--Dropdown menu when collapsed-->
                        <a class="navbar-item px-3 nav-link" href="about.html">About</a>
                        <ul class="nav-list">
                            <li class="navbar-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown d-none d-lg-block d-xl-block"><!--Dropdown menu-->
                        <a class="navbar-item px-3 py-2 nav-link dropdown-toggle" href="registration.html" data-toggle="dropdown">Registration</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="guidelines.html">Guidelines</a>
                            <a class="dropdown-item" href="terms-and-conditions.html">Terms and Conditions</a>
                        </div>
                    </li>
                    <li class="d-lg-none d-xl-none"><!--Dropdown menu when collapsed-->
                        <a class="navbar-item px-3 nav-link" href="registration.html">Registration</a>
                        <ul class="nav-list">
                            <li class="navbar-item"><a class="nav-link" href="guidelines.html">Guidelines</a></li>
                            <li class="navbar-item"><a class="nav-link" href="terms-and-conditions.html">Terms and Conditions</a></li>
                        </ul>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link px-3 py-2" href="sponsors.html">Sponsors</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link px-3 py-2" href="charities.html">Charities</a>
                    </li>
                    <li class="dropdown d-none d-lg-block d-xl-block"><!--Dropdown menu-->
                        <a class="px-3 py-2 nav-link dropdown-toggle" href="2018-videos.php" data-toggle="dropdown">Videos</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="2017-videos.php">2017 Videos</a>
                        </div>
                    </li>
                    <li class="d-lg-none d-xl-none "><!--Dropdown menu when collapsed-->
                        <a class="navbar-item px-3 nav-link" href="2018-videos.php">Videos</a>
                        <ul class="nav-list">
                            <li class="navbar-item"><a class="nav-link" href="2017-videos.php">2017 Videos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="social-media navbar-brand mx-auto mb-0">
            	<a target="_blank" href="https://www.youtube.com/channel/UCyB2dBvrMTHzn6MvhH_cceg/featured"><img class="icon" src="content/images/Youtube_circle_colour.png" /></a>
                <a target="_blank" href="https://www.facebook.com/Being-Human-Film-Festival-719578074898975/"><img class="icon" src="content/images/Facebook_circle_colour.png" /></a>
                <a href="#"><img class="icon" src="content/images/Instagram_circle_colour.png" /></a>
                <a href="#"><img class="icon" src="content/images/Twitter_circle_color.png" /></a>
		<p class="hashtag d-inline d-lg-none d-xl-none mb-0">#bhff2018</p><!--For xs to md-->
          	<p class="hashtag text-center d-none d-lg-block d-xl-block mb-0">#bhff2018</p><!--For lg to xl-->
            </div>
            <button class="d-lg-none d-xl-none"><i class="fa fa-bars fa-lg navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#nav-menu"></i></button><!--Font Awesome bars icon-->
        </div>
    </nav>
    <!--Page Contents-->
    <div class="hero">
        <div class="hero-video d-none d-lg-block d-md-block mb-0">
            <video class="" id="" autoplay loop>
                <source src="content/video/BHFFvideohero.mp4" type="video/mp4">
            </video>
        </div>
        <div class="hero-image d-sm-block s-xs-block d-md-none">
            <img src="content/images/BHFFhero.jpg">
        </div>
    </div>
    <div class="index">
        <div class="container-fluid col-10 col-lg-8 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-4">
                    <div>
                        <h1 class="home-title mb-0 text-center text-lg-right pr-1"><?php echo $contentTitle; ?></h1>
                    </div>
                    <div class="dash">
                        <img src="content/images/dashedborder-rego%20v2.svg" class="slideRight" alt="dashed underline" height="10" width="110"> 
                    </div>
                    <div>
                        <h3 class="text-center text-lg-right home-subtitle"><?php echo $contentSubtitle; ?></h3>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="home-body pl-1"><?php echo $contentBody; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center quick-links">
                <!--Quicklinks lg display-->
                <div class="linkgroup my-3 btn-group d-none d-lg-block">
                    <a href="registration.html"><button type="button" class="link-button btn p-3 m-3">How To Enter</button></a>
                    <a href="judges-register.html"><button type="button" class="link-button btn p-3 m-3">Become A Judge</button></a>
                    <a href="2018-videos.php"><button type="button" class="link-button btn p-3 m-3">Videos</button></a>
                    <a href="guidelines.html"><button type="button" class="link-button btn p-3 m-3">Resources</button></a>
                </div>
                <!--Quicklinks md display-->
                <div class="linkgroup my-3 d-none d-md-block d-lg-none">
                    <div class="row">
                        <a href="registration.html"><button type="button" class="link-button btn p-3 m-3">How To Enter</button></a>
                        <a href="judges-register.html"><button type="button" class="link-button btn p-3 m-3">Become A Judge</button></a>
                    </div>
                    <div class="row">
                        <a href="2018-videos.php"><button type="button" class="link-button btn p-3 m-3">Videos</button></a>
                        <a href="guidelines.html"><button type="button" class="link-button btn p-3 m-3">Resources</button></a>
                    </div>
                </div>
                <!--Quicklinks sm display-->
                 <div class="linkgroup my-3 d-md-none">
                     <div class="row">
                        <a href="registration.html"><button type="button" class="link-button btn p-3 m-3">How To Enter</button></a>
                     </div>
                     <div class="row">
                        <a href="judges-register.html"><button type="button" class="link-button btn p-3 m-3">Become A Judge</button></a>
                     </div>
                     <div class="row">
                         <a href="2018-videos.php"><button type="button" class="link-button btn p-3 m-3">Videos</button></a>
                     </div>
                     <div class="row">
                         <a href="guidelines.html"><button type="button" class="link-button btn p-3 m-3">Resources</button></a>
                     </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center pt-3 pb-5 sponsorbox">
                <a target="_blank" href="http://www.jmcacademy.edu.au/"><img class="img-fluid mx-4 py-4" src="content/images/JMC.gif"></a>
                <a target="_blank" href="http://www.sydneyshortfilmschool.com/"><img class="img-fluid mx-4 py-4" src="content/images/SSFS.gif"></a>
                <a target="_blank" href="https://canterbury.ljhooker.com.au/"><img class="img-fluid mx-4 py-4" src="content/images/LJHooker.gif"></a>
                <a target="_blank" href="https://www.greenavenue.com.au/"><img class="img-fluid mx-4 py-4" src="content/images/GreenAve.gif"></a>
                <a target="_blank" href="https://www.dendy.com.au/"><img class="img-fluid mx-4 py-4" src="content/images/Dendy.gif"></a>
                <a target="_blank" href="https://www.palacecinemas.com.au/"><img class="img-fluid mx-4 py-4" src="content/images/PalaceCinemas.gif"></a>
                <a target="_blank" href="#"><img class="img-fluid mx-4 py-4" src="content/images/DaVinci.gif"></a>
            </div>        
        </div>   
    </div>
    
            
    <!--Footer-->
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
				<div class="col-sm-2 cols">
                </div>
                <div class="col-sm-2 cols">
                    <h5><a class="footer-heading" href="index.php">BEing Human Film Festival</a></h5>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="registration.html">Registration</a></li>
						<li><a href="guidelines.html">Guidelines</a></li>
						<li><a href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 cols">
                    <h5><a class="footer-heading" href="2018-videos.php">Videos</a></h5>
                    <ul>
                        <li><a href="2018-videos.php">BHFF Entries 2018</a></li>
                        <li><a href="2017-videos.php">BHFF Entries 2017</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 cols">
                    <h5><a class="footer-heading" href="charities.html">Charities</a></h5>
                    <ul>
                        <li><a target="_blank" href="http://www.108lives.org/">108 Lives Project</a></li>
                        <li><a target="_blank" href="https://www.facebook.com/108livesAustralia/">One Community</a></li>
                     </ul>
                </div>
				<div class="col-sm-3 cols">
                    <h5><a class="footer-heading" href="#">Sponsors</a></h5>
                    <ul>
                        <li><a target="_blank" href="http://www.jmcacademy.edu.au/">JMC Academy</a></li>
                        <li><a target="_blank" href="http://www.sydneyshortfilmschool.com/">Sydney Short Film School</a></li>
                        <li><a target="_blank" href="https://canterbury.ljhooker.com.au/">LJ Hooker Canterbury</a></li>
						<li><a target="_blank" href="https://www.greenavenue.com.au/">Green Avenue Design</a></li>
						<li><a target="_blank" href="https://www.dendy.com.au/">Dendy Cinemas</a></li>
                        <li><a target="_blank" href="https://www.palacecinemas.com.au/">Palace Cinemas</a></li>
                        <li><a target="_blank" href="#">Da Vinci Restaurant Summer Hill</a></li>
					</ul>
                </div>
				<div class="col-sm-1 cols">
                </div>
			</div>
		</div>	
		<div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 cols">
                </div>
				<div class="col-sm-2 cols">
                    <ul>
                        <h5><li><a class="footer-heading" href="judges-register.html">Judges Register</a></li></h5>
                        <h5><li><a class="footer-heading" href="login.php">Admin Login</a></li></h5>
                     </ul>
					</div>
				<div class="col-sm-2 cols">
                </div>
				<div class="col-sm-2 cols">
                </div>
				<div class="col-sm-2 cols">
				<div class="social-networks">
					<a target="_blank" href="https://www.youtube.com/channel/UCyB2dBvrMTHzn6MvhH_cceg/featured"><img class="footer-icon" src="content/images/Youtube_circle_bw.png"></a>
					<a target="_blank" href="https://www.facebook.com/Being-Human-Film-Festival-719578074898975/"><img class="footer-icon" src="content/images/Facebook_circle_bw.png"></a>
					<a target="_blank" href="#"><img class="footer-icon" src="content/images/Instagram_circle_bw.png"></a>
					<a target="_blank" href="#"><img class="footer-icon" src="content/images/Twitter_circle_bw.png"></a>
					<p class="hashtag d-inline align-middle">#bhff2018</p>
				</div>
				</div>
				<div class="col-sm-2 cols">
                </div
                </div>
			</div>
            </div>
			<div class="copyright">
                <p class="text-center">&copy; 2017 BEing Human Film Festival</p>
            </div>
    </footer>
<!--Javascript-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/backgroundVideo.js"></script>
<script>
    $('.dropdown').hover(function(){
        $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
        }, function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
    });
    
    $('.dropdown .nav-link').click(function(){
        location.href = this.href;
    });
    
        $('.sponsorbox').css({top: 50});

    
    $(window).scroll( function(){    
        $('.linkgroup').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
        if( bottom_of_window > bottom_of_object ){
                $(this).animate({opacity: 1},900);
            }            
        });
    });


    
    $(window).scroll( function(){    
        $('.sponsorbox').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
        if( bottom_of_window > bottom_of_object ){
                $(this).animate({top: 0, opacity: 1},900);
            }            
        });
    });
    



</script>
</body>
</html>

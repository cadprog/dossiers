<?php

include "../Models/Inscription.php";
 
 $inscription = new Inscription();

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Metas Page details-->
<title>SenSchOol</title>
<meta name="description" content="UX designer and web developer">
<meta name="author" content="">
<!-- Mobile Specific Metas-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--main style-->
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/skins/default.css" data-name="skins">

<!--google font style-->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!--font-family: 'Metrophobic', sans-serif;-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600italic,600,700italic,700' rel='stylesheet' type='text/css'>
<!--font-family: 'Open Sans', sans-serif; -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,500,300italic,300,100,500italic' rel='stylesheet' type='text/css'>
<!--font-family: 'Roboto', sans-serif; -->

<!-- font icon css style-->
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body onLoad="load()" onUnload="GUnload()">

<!--wrapper start-->
<div class="wrapper" id="wrapper"> 
  <!-- Preloader -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!--Header start -->
  <header> 
    <!--Language start -->
   
    <!--/Language end --> 
    <!--menu start-->
    <div class="menu">
      <div class="navbar-wrapper">
        <div class="container"> 
          <!-- Navbar start -->
          <div class="navwrapper">
            <div class="navbar navbar-inverse navbar-static-top">
              <div class="container">
                <div class="logo"><a href="#"><span class="img-circle">S</span>enSchOol</a> </div>
               
                 <!--Language -->
                
                <!--/Language --> 
                
              </div>
            </div>
          </div>
          <!-- Navbar end --> 
        </div>
      </div>
    </div>
    <!--menu end--> 
    
    <!--banner start -->
    <div class="header_v1">
      <div class="banner row" id="banner">
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 noPadd slides-container" style="height:100%"> 
          <!--background slide show start-->
          <div class="slide"> 
            <!--Header text1 start-->
            <div class="container hedaer-inner">
              <div class="bannerText">
                <h3>Bienvenue</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua.</p>
                <p><a href="connexion.php" class="smooth">Se Connecter <i class="fa fa-angle-right"></i></a></p>
              </div>
            </div>
            <!--Header text1 end--> 
            <img src="img2.JPG" alt="image01"></div>
          <div class="slide"> 
            <!--Header text2 start-->
            <div class="container hedaer-inner">
              <div class="bannerText">
                <h3>Choix</h3>
                <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua2.</p>
                <p><a href="connexion.php" class="smooth">Se Connecter <i class="fa fa-angle-right"></i></a></p>
              </div>
            </div>
            <!--Header text2 end--> 
            <img src="img8.JPG" alt="image02">
          </div>

          <!--background slide show end--> 
        </div>
      </div>
    </div>
    <!--banner end --> 
    
    <!--Header form -->
    <div class="container form-header">
      <div class="form-container">
        <h2>Devenir membre<span>Veuillez vous inscrire!</span></h2>
        <div class="row">
          <form method="POST" action="../Controllers/inscriptionController.php">
          <?php

                          $inscription->input1("login");
                          $inscription->input2("motdepasse");
                          $inscription->liste("communaute");
                           $inscription->submit();
                           // $inscription->reset();
              ?>
            </form>
        </div>
      </div>
    </div>
    <!--/Header form --> 
    
  </header>
  <!--Header end --> 
  
  <!--Footer start-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="pull-left">
          <p>&copy; 2019 SENSCHOOL</p>
        </div>
        <div class="pull-right"><a class="gototop smooth" href="#wrapper">Go To Top<i class="fa fa-chevron-up"></i></a></div>
      </div>
    </div>
  </footer>
  <!--Footer end --> 
</div>
<!--wrapper end--> 

<!--modernizr js--> 
<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
<!--jquary min js--> 
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--for placeholder jquery--> 
<script type="text/javascript" src="js/jquery.placeholder.js"></script> 

<!--for header jquery--> 
<script type="text/javascript" src="js/stickUp.js"></script> 
<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
"use strict";
//<![CDATA[
	$('.header_v1 #banner').superslides({
	  animation: 'fade',
	  play: 5000
	});
//]]>
</script> 

<!--for portfolio jquery--> 
<script src="js/jquery.isotope.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" property="stylesheet" id="theme" href="css/jquery-ui-1.8.16.custom.css">
<link type="text/css" rel="stylesheet" property="stylesheet" href="css/lightbox.min.css">
<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script> 
<script type="text/javascript" src="js/jquery.ui.rlightbox.js"></script> 

<!--for video lightbox -->
<link rel="stylesheet" property="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--contact form js--> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
<!--Newsletter js--> 
<script type="text/javascript" src="js/jquery.subscribe.js"></script> 
<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=ABQIAAAAjU0EJWnWPMv7oQ-jjS7dYxSPW5CJgpdgO_s4yyMovOaVh_KvvhSfpvagV18eOyDWu7VytS6Bi1CWxw" type="text/javascript"></script> 
<script type="text/javascript">
	"use strict";
    //<![CDATA[
    var map;

    function load() {
      if (GBrowserIsCompatible()) {
        map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(-37.817682, 144.957595), 13);
        document.getElementById("map").checked = true;
        toggleZoom(false);
      }
    }

    function toggleZoom(isChecked) {
      if (isChecked) {
        map.enableScrollWheelZoom();
      } else {
        map.disableScrollWheelZoom();
      }
    }

    //]]>
</script> 

<!--about jquery--> 
<script src="js/jquery.classyloader.min.js"></script> 
<script defer src="js/jquery.flexslider.js"></script> 
<script src="js/jquery.easing.js"></script> 
<script src="js/jquery.mousewheel.js"></script> 
<script defer src="js/slideroption.js"></script> 

<!--Home Testimonial --> 
<script>


</script> 

<!--for coundown jquary--> 
<script type="text/javascript" src="js/jquery.countTo.js"></script> 
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
  //enabling stickUp on the '.navbar-wrapper' class
	$('.navbar-wrapper').stickUp({
		parts: {
		  0: 'banner',
		  1: 'features',
		  2: 'courses',
		  3: 'teachers',
		  4: 'pricing',
		  5: 'testimonial',
		  6: 'blog',
		  7: 'contact'
		},
		itemClass: 'menuItem',
		itemHover: 'active',
		topMargin: 'auto'
		});
	
		// run rlightbox
		$( ".lb" ).rlightbox();
		$( ".lb_title-overwritten" ).rlightbox({overwriteTitle: true});
		
		$('.flexslider').flexslider({
			animation: "fade",
			animationLoop: true,
			slideshow: true,
			pauseOnAction: false,
			slideshowSpeed: 7000,
			controlNav: true,
			start: function(slider){
			$('body').removeClass('loading');
			}
		});		
	
	var activeImage;

	var getmaxHeight = 0;
	$(".testimonialText li").each(function(index, element) {
        if($(this).height()>getmaxHeight){
			getmaxHeight = $(this).height();
			$(".footerTopContent").height(getmaxHeight);
			}
    });
	
    $(".testimonialText li").fadeTo("fast",0);
	$(".testimonialText li:first").fadeTo("fast",1);
	$(".imageSlide .imageBox").removeClass("activeImage");
	$(".imageSlide .imageBox:first").addClass("activeImage");
	$(".imageSlide .imageBox").mouseenter(function(){
		if(!$(this).hasClass("activeImage")){
			var gi = $(this).index();
			//console.log(gi);
			$(".imageSlide .imageBox").removeClass("activeImage");
			$(this).addClass("activeImage");
			$(".testimonialText li").fadeTo("fast",0);
			$(".testimonialText li:eq("+gi+")").fadeTo("fast",1);
			}
	})
		
	// Video lightbox
	$("a[data-rel^='prettyPhoto']").prettyPhoto();	
	
	// for client work jquary
	var windowBottom = $(window).height()+0;
	var index=0;
	$(document).scroll(function(){
		divposition = parseInt($('.factabout').offset().top),10;
		divsrollpos = parseInt($(window).scrollTop()),10;
		ctop = parseInt(divposition-divsrollpos),10;
		if(ctop<Math.round(windowBottom/2)){
			if(index==0){	
				
				$('.timer').each(count);
				
			}
			index++;
		}
	});



function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
}
	
	
	});

});
</script> 

<!--for theme custom jquery--> 
<script src="js/custom.js"></script>
</body>
</html>


   <?php    
		  
		use Tutorialspoint\gallery ;
		use Tutorialspoint\logos ;



$logo = logos::first();
		  
		  
		  $gallery = gallery::get();
		  $gallery2 = gallery::get();
		  
		  ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#">
 <head profile="http://gmpg.org/xfn/11"> 
  <title>Photo </title> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   
    
      
  <link rel="stylesheet" type="text/css" href="/photo/style.css"> 
  <link rel="stylesheet" type="text/css" href="/photo/responsive.css"> 
  <link rel="stylesheet" id="thim-awesome-css" href="/photo/font-awesome.min.css" type="text/css" media="all"> 
  <link rel="icon" href="{{$logo->image}}" type="image/x-ico"> 
  <!-- This site is optimized with the Yoast SEO plugin v5.7.1 - https://yoast.com/wordpress/plugins/seo/ --> 
  <link rel="canonical" href="-698030199"> 
  <meta property="og:locale" content="en_US"> 
  <meta property="og:type" content="article"> 
  <meta property="og:title" content="Photo"> 
  
  <!-- / Yoast SEO plugin. --> 
  <link rel="dns-prefetch" href="{{$logo->image}}"> 
  <link rel="dns-prefetch" href="{{$logo->image}}"> 
  <link rel="dns-prefetch" href="{{$logo->image}}"> 
 
  <style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style> 
  <link rel="stylesheet" id="slider-css-css" href="/photo/jquery.bxslider.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="slider-home-css-css" href="/photo/home-slider-css.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="wp-block-library-css" href="/photo/style.min.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="contact-form-7-css" href="/photo/styles.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="font-awesome-css" href="/photo/font-awesome.min.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="wpdm-bootstrap-css" href="/photo/bootstrap.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="wpdm-front-css" href="/photo/front.css" type="text/css" media="all"> 
  <link rel="stylesheet" id="tp_twitter_plugin_css-css" href="/photo/tp_twitter_plugin.css" type="text/css" media="screen"> 
  
  <link rel="stylesheet" id="jetpack_css-css" href="/photo/jetpack.css" type="text/css" media="all"> 
  <script type="text/javascript" src="/photo/jquery.js"></script> 
  <script type="text/javascript" src="/photo/jquery-migrate.min.js"></script> 
  <script type="text/javascript" src="/photo/jquery.bxslider.js"></script> 
  <script type="text/javascript" src="/photo/script.js"></script> 
  <script type="text/javascript" src="/photo/front.js"></script> 
  <script type="text/javascript" src="/photo/chosen.jquery.min.js"></script> 
  <meta name="generator" content="WordPress Download Manager 2.9.59"> 
  <link rel="https://api.w.org/" href="-1963548384"> 
   
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/photo/wlwmanifest.xml"> 
  <link rel="shortlink" href="P7ZDwA-80"> 
  
  <link rel="alternate" type="application/json+oembed" href="embed"> 
  
  <link rel="alternate" type="text/xml+oembed" href="embed"> 



  <link rel="dns-prefetch" href="v0.wordpress.com"> 
  <style type="text/css">img#wpstats{display:none}</style> 
  <style id="custom-css-css">article.page{max-height:500px}article.page ul.new-report{list-style:none;padding-left:0 !important}article.page ul.new-report li{background-color:#077a3b;margin-right:5px;float:left;width:27%;padding:15px;text-align:center;margin-bottom:0;min-height:180px}article.page ul.new-report li a{color:#ffde20;overflow:hidden;text-decoration:none}article#post-1925.page ul.new-report li h3,article#post-2041.page ul.new-report li h3,aritcle##post-2253.page ul.new-report li h3{text-align:center;color:#ffde20 !important;font-weight:100;font-size:medium;min-height:40px;margin-bottom:15px}article.page ul.new-report li i,article.page ul.new-report li p{text-align:center;bottom:-15px}@media (max-width:767px){article.page ul.new-report li{width:40%}article.page ul.new-report{margin-left:0}}@media (max-width:480px){article.page ul.new-report li{width:100%}}</style> 
 

  <link rel="pingback" href="xmlrpc.php"> 
  <script type="text/javascript" src="/photo/script.js"></script> 
 
  <script src="/photo/jquery.min.js"></script> 
  <script type="text/javascript" src="/photo/stickyfloat.min.js"></script> 
  <script type="text/javascript" src="/photo/easySlider1.7.js"></script> 
  <script type="text/javascript">
        $(document).ready(function(){   
            $("#slider").easySlider({
                auto: true, 
                continuous: true,
                numeric: true
            });
        }); 
    </script> 
 </head> 
 <body> 

  <div id="modal"> 
   <div id="transparent-close" style="background:transparent;width: 100%;height: 100%;z-index: 201;position: absolute;" onclick="closeModal('modal','video');"></div> 
   <div id="enclose"> 
    <div id="close" onclick="closeModal('modal','video');">
     &nbsp;
    </div> 
    <div id="pop-video"></div> 
    <div id="pop-video-content"></div> 
    <div id="pop-image"></div> 
    <div id="pop-content"></div> 
   </div> 
  </div> 
  <div id="container"> 
   <header> 
    <div id="header" class="offset"> 
     <div class="fill"> 
      <div id="logo"> 
       <a href="/"><img  style="border-radius: 100%" alt="" src="{{$logo->image}}"></a> 
      </div> 
     </div> 
     <div id="mobile-menu" class="green white-font" onclick="toggleElem('navigation');">
      <img class="menu-icon" src="menu-icon-min.png">&nbsp;&nbsp;Menu
     </div> 
     <nav id="navigation"> 
      <div class="menu-main-menu-container">
       <ul id="main-menu" class="nav navbar-nav">
        <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-33"><a href="/"><span data-hover="Home">Home</span></a></li> 
      
       </ul>
      </div> 
     </nav> 
    </div> 
   </header> 
   <!-- #header --> 
   <div id="body-span" class="offset"> 
    <aside id="left-nav" class="section">
     <ul class="float sub-menu menu-odd menu-depth-1">
      <li id="menu-item-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-496"><a href="/"><span data-hover="Photo">Home</span></a></li>
     
     </ul>
    </aside>
    <!--#left-nav
    -->
    <div id="middle-content" class="section"> 
  
     <div id="content" class="offset"> 
      <div class="page-title"> 
       <div class="title-box green yellow-font">
        Photo
       </div> 
      </div> 
      
      
      
      <article id="post-496" class="post-496 page type-page status-publish has-post-thumbnail hentry  white black-font"> 
       <div class="entry-content">
       
        <div class="post-thumb-holder">
        
        <?php   foreach($gallery  as $gallery){    ?>
        
         <div id="thumb-img-19{{  $gallery->id }}" data-link="{{  $gallery->image }}<?php  foreach($gallery2 as $second) {  ?>|{{ $second->image }}<?php   } ?> " onclick="showModal('19{{  $gallery->id }}','image');" style="background-image:url('{{  $gallery->image }}');" class="post-thumb-item green post-items">
          <div class="title-overlay">
           <p id="thumb-title-19{{  $gallery->id }}">{{  $gallery->text1 }} </p>
          </div>
          <div id="item-desc-1972" class="hide"></div>
         </div>
         
         
         <?php   } ?>
          
      
        </div> 
       </div>
       <!--.entry-content --> 
      </article>
      <!-- #post-496--> 
     </div>
     <!-- #content --> 
    </div>
    <!--#middle-content
    -->
 
    <!--#right-nav--> 
   </div>
   <!--#body-span--> 
   <style type="text/css">li#menu-item-290 > .dropdown-menu {right: -220px;left: inherit;}</style> 
   <!--<div class="offset">--> 
 
   <!--.white-offset--> 
   <footer class="green"> 
    <div class="disclaimer green white-font center-font">
    <br/>
    <br/>
    </div> 
    <div id="copyright">
     
     <a class="white-font" href="/"></a>
    </div> 
   </footer> 
  </div> 
  <!-- #container --> 
  <script type="text/javascript" src="/photo/stickyfloat.jquery.easing.js"></script> 
  <script type="text/javascript">
		var currentScreenWidth = window.innerWidth;
		//alert(currentScreenWidth);
		if (currentScreenWidth <= 760) {
			var navHeight = document.getElementById('left-nav').offsetHeight;
			document.getElementById('middle-content').style.paddingBottom = navHeight+'px';
		}
            // FIX PAGE WIDTH TO FIT BROWSER
            /*var screenWidth = window.innerWidth;
            var contentWidth = parseInt(document.getElementById('body-span').style.width);
            var leftBarWidth = parseInt(document.getElementById('left-nav').style.width);
            var rightBarWidth = parseInt(document.getElementById('right-nav').style.width);
            var subtractWidth = leftBarWidth+rightBarWidth;
            var middleWidth = contentWidth - subtractWidth;
            document.getElementById('middle-content').style.width = middleWidth+'px';*/
        </script> 
  <style type="text/css">h3.media-heading a {display: none !important;}h3.media-heading span{margin-left: 0px !important;}.well.c2a3 .media-body{font-size: 10pt !important;}</style> 
  <div style="display:none"> 
  </div> 

  <script type="text/javascript" src="/photo/scripts.js"></script> 
  <script type="text/javascript" src="/photo/jquery.form.min.js"></script> 
  <script type="text/javascript" src="/photo/devicepx-jetpack.js"></script> 
  <script type="text/javascript" src="/photo/gprofiles.js"></script> 
  <script type="text/javascript">
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script> 
  <script type="text/javascript" src="/photo/wpgroho.js"></script> 
  <script type="text/javascript" src="/photo/new-tab.min.js"></script> 
  <script type="text/javascript" src="/photo/wp-embed.min.js"></script> 
  <script type="text/javascript" src="/photo/e-201939.js" async defer></script> 
   
 </body>
</html>
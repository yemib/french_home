<!DOCTYPE html>
<?php 
use Tutorialspoint\page;
use Tutorialspoint\contact_detail;
use Tutorialspoint\logos;

$pages = page::where('publish'  , 'yes')->paginate(6);

$contact  = contact_detail::first();
$logo  = logos::first();


?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
 <head> 
  <!-- Basic Page Needs --> 
  <meta charset="utf-8"> 
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]--> 
  <title>@yield('title')  The Nigeria French Language Village</title> 
  
  
  <meta name="author" content="themesflat.com"> 
  <!-- Mobile Specific Metas --> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <!-- Bootstrap  --> 
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"> 
  <!-- Theme Style --> 
  <link rel="stylesheet" type="text/css" href="/css/style.css"> 
  <!-- Responsive --> 
  <link rel="stylesheet" type="text/css" href="/css/responsive.css"> 
  <!-- Colors --> 
  <link rel="stylesheet" type="text/css" href="/css/color1.css" id="colors"> 
  <link rel="stylesheet" type="text/css" href="css"> 
  <!-- Animation Style --> 
  <link rel="stylesheet" type="text/css" href="/css/animate.css"> 
  <!-- Favicon and touch icons  --> 
  <link href="{{ $logo->image  }}" rel="apple-touch-icon-precomposed" sizes="48x48"> 
  
  
  <link href="{{ $logo->image  }}" rel="apple-touch-icon-precomposed"> 
  <link href="{{ $logo->image  }}" rel="shortcut icon"> 
  <!-- Slider Revolution CSS Files --> 
  <link rel="stylesheet" type="text/css" href="/css/settings.css"> 
  <link rel="stylesheet" type="text/css" href="/css/layers.css"> 
  <link rel="stylesheet" type="text/css" href="/css/navigation.css"> 
  
  

 </head> 
 <body> 
  <div id="loading-overlay"> 
   <div class="loader"></div> 
  </div> 
  <!-- /.loading-overlay --> 
 
 <?php  if(session('error')){   ?>
 <script>  alert('error okay')     </script>
 
 <?php  } ?>
 @include('menu')
 
 

@yield('slidder')

  
  <div class="main-homepage1 mobi-mt30"> 
  
  
   
    @yield('content')
   
  </div> 
  
  
  <footer class="style1"    style="background-color:#000080 !important ; color: white"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-lg-4 col-md-6 col-sm-6"> 
      <div class="widget-text"> 
       <a href="/"><img  style="border-radius: 100%"  height=""  width="100"  src="{{ $logo->image  }}" alt="image"></a> 
       
 
       
      </div> 
   
      <!-- /widget-contact --> 
     </div> 
    
     <div   class="col-sm-12">
      <p>  <a     href="tel: {{$contact->phone1}}" style="">   {{$contact->phone1}}   </a>    </p> 
      
        <p>  <a   href="malto: {{$contact->email}}" style="">   {{$contact->email}}   </a>    </p> 
        
            
                    <p>  <span   style="">   {{$contact->address}}   </span>    </p> 
                    
                      
                    <p>  <a href="https://frenchvillage.edu.ng:2096/"   style="">  Webmail  </a>    </p>  
                    
                    
                         
          
        
        
       
        
       
        
                    
                      </div>
     
    </div> 
   </div> 
  </footer>
  
    
  <div class="bottom"   style="background:rgba(11,53,252,1.00)"> 
   <div class="container"> 
    <div class="row"> 
     <div class="col-lg-12"> 
      <div class="wrap-bottom clearfix"> 
       <div class="title-bottom"> 
        <p>© 2019  The  Nigeria French Language  Village. All Rights Reserved</p> 
       </div> 
       <div class="social-bottom"> 
        <ul> 
         <li class="social-share"><a href="{{$contact->facebook}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
          
         <li class="social-share"><a href="{{$contact->twitter}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li> 
         
        
         
   
         
         <li class="social-share"><a href="{{$contact->linkedin}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> 
        </ul>
        
       
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 

  
  <a id="scroll-top"><i class="fas fa-arrow-up"></i></a> 
  <script src="/js/jquery.min.js"></script> 
  <script src="/js/main.js"></script> 
  <script src="/js/rev-slider.js"></script> 
  <script src="/js/owl.carousel.min.js"></script> 
  <script src="/js/jquery-countTo.js"></script> 
  <script src="/js/jquery-waypoints.js"></script> 
  <script src="/js/bootstrap.min.js"></script> 
  <script src="/js/images-loaded.js"></script> 
  <script src="/js/jquery.isotope.min.js"></script> 
  <script src="/js/jquery-fancybox.js"></script> 
  <script src="/js/jquery.easing.js"></script> 
  <!-- Slider --> 
  <script src="/js/jquery.themepunch.tools.min.js"></script> 
  <script src="/js/jquery.themepunch.revolution.min.js"></script> 
  <script src="/js/rev-slider.js"></script> 
  <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading --> 
  <script src="/js/revolution.extension.actions.min.js"></script> 
  <script src="/js/revolution.extension.carousel.min.js"></script> 
  <script src="/js/revolution.extension.kenburn.min.js"></script> 
  <script src="/js/revolution.extension.layeranimation.min.js"></script> 
  <script src="/js/revolution.extension.migration.min.js"></script> 
  <script src="/js/revolution.extension.navigation.min.js"></script> 
  <script src="/js/revolution.extension.parallax.min.js"></script> 
  <script src="/js/revolution.extension.slideanims.min.js"></script> 
  <script src="/js/revolution.extension.video.min.js"></script>  
 </body>
</html>
<?php

use Tutorialspoint\slidders;
use Tutorialspoint\page;

$moving_news  = page::find(17);
$select_slide  = slidders::where('publish', 'yes')->get();
$select_slide2  = slidders::where('publish', 'yes')->get()
?>



<link href="/asset_files/css_003.css" rel="stylesheet"
 property="stylesheet" type="text/css" media="all">

<style>


  /* ===== SLIDER CORE ===== */
#carousel1 {
    position: relative;
}

.carousel-inner {
    overflow: hidden;
}



.slider-bg {
    position: relative;
    width: 100%;
     height: 450px; 
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    background-color: #000;
    overflow: hidden;
}

/* Blurred background layer */
.slider-bg::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: inherit;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; /* fills space */
    filter: blur(20px);
    transform: scale(1.15);
    opacity: 0.6;
}

/* Foreground (real image) */
.slider-bg::after {
    content: "";
    position: absolute;
    inset: 0;
    background-image: inherit;
    background-position: center;
    background-repeat: no-repeat;
    background-size: contain;
    z-index: 2;
}

/* Smooth zoom animation */
.carousel .item.active .slider-bg {
    transform: scale(1.03);
}

/* ===== CAPTION STYLING ===== */
.carousel-caption {
    background: rgba(0, 0, 0, 0.45);
    padding: 25px;
    border-radius: 8px;
    animation: fadeUp 1.2s ease-in-out;
}

.carousel-caption h3 {
    font-size: 34px;
    font-weight: bold;
    color: #fff;
}

.carousel-caption p {
    font-size: 18px;
    color: #f1f1f1;
}

/* Caption animation */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* ===== CONTROLS ===== */
.carousel-control {
    background: none;
}

.carousel-control .glyphicon {
    background: rgba(0,0,0,0.6);
    padding: 15px;
    border-radius: 50%;
}

/* ===== INDICATORS ===== */
.carousel-indicators li {
    background-color: #fff;
}

.carousel-indicators .active {
    background-color: #007bff;
}



/* ===== MOBILE RESPONSIVENESS ===== */
@media (max-width: 768px) {
    .slider-bg {
       
        background-size: contain;
    }

    .carousel-caption {
        padding: 15px;
    }

    .carousel-caption h3 {
        font-size: 20px;
    }

    .carousel-caption p {
        font-size: 14px;
    }
}

</style>


<div class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: 0px; box-sizing: border-box ">

  <div class="container-fluid">
    <div class="row">

      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="wpb_revslider_element wpb_content_element">



              <div class="forcefullwidth_wrapper_tp_banner" id="rev_slider_2_1_forcefullwidth" style="position:relative;width:100%;height:auto;margin-top:0px;margin-bottom:0px">


                <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin: 0px auto; background: transparent none repeat scroll 0% 0%; padding: 0px; height: 450px; position: absolute; overflow: visible; left: 0px;">

                  <!-- START REVOLUTION SLIDER 5.4.6.3.1 fullwidth mode -->
                  <div id="rev_slider_2_1" class="rev_slider fullwidthabanner revslider-initialised tp-simpleresponsive rev_redraw_on_blurfocus" style="max-height: 450px; margin-top: 0px; margin-bottom: 0px; height: 450px;" data-version="5.4.6.3.1" data-slideactive="rs-5">

                    <!-----boostrap moving images  ------>
                    <div id="carousel1" class="carousel slide" data-ride="carousel">


                      <ol class="carousel-indicators">

                        <?php $count2 =  0;
                        foreach ($select_slide2   as $select_slide2) {      ?>

                          <li data-target="#carousel1" data-slide-to="{{ $count2  }}"></li>


                        <?php $count2++;
                        } ?>

                      </ol>



                      <div class="carousel-inner" role="listbox">

                        <?php $count    =  0;
                        foreach ($select_slide  as $slidder) {  ?>


                          <div class="item  <?php if ($count    ==  0) {  ?>   active   <?php   } ?>">


                         <!--    <div style="background-image:url('{{$slidder->image}}') ; background-position: center ;
                             background-size: cover; background-repeat: no-repeat;height: 400px; width: 100%">


                            </div> -->

                            <div class="slider-bg"
                              style="background-image:url('{{$slidder->image}}')">
                            </div>



                            <div class="carousel-caption">
                              <h3>{{ $slidder->text1  }}</h3>
                              <p>{{ $slidder->text2  }}</p>
                            </div>
                          </div>


                        <?php $count++;
                        } ?>


                      </div>


                      <a class="left carousel-control" href="/#carousel1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                        <a class="right carousel-control" href="/#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span></a>
                    </div>







                  </div>


                </div>
                <div class="tp-fullwidth-forcer" style="width: 100%; height: 450px;"></div>
              </div><!-- END REVOLUTION SLIDER -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div style="position: absolute ; width: 100%; ">
    <marquee style="color: black">
      <p> {!! $moving_news->body !!} </p>
    </marquee>
  </div>
</div>
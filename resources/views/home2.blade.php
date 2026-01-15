 @extends('layouts.index2')

 @section('content')

 <?php

  use Tutorialspoint\servicess;
  use Tutorialspoint\page;
  use Tutorialspoint\contact_detail;
  use Tutorialspoint\slidders;
  use Tutorialspoint\logos;
  use Tutorialspoint\management;

  $management  = management::where('publish', 'yes')->paginate(10);

  $logo = logos::first();
  $service  = servicess::where('publish', 'yes')->orderby('id', 'desc')->paginate(6);


  $contact  = contact_detail::first();

  $select_slide  = slidders::where('publish', 'yes')->orderby('id', 'desc')->get();

  ?>



 @section('slidder')


 @include('slidder2')



 @endsection

 <!---   echo home here   ---->


 <?php
  $vision  = page::find(2);

  $mission  = page::find(3);

  $mandate  = page::find(4);

  ?>



 <div class="">




   <div class="vc_row-full-width vc_clearfix"></div>
   

   <div class="vc_row wpb_row vc_row-fluid vc_custom_1549569823241 vc_row-has-fill">
     <div class="container">
       <div class="row">
         <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">

               <div class="wpb_text_column wpb_content_element ">
                 <div class="wpb_wrapper">
                   <p style="color: #fff; font-size: 30px; font-weight: 300; 
                   text-align: center; width: 84%; margin: 0 auto;">  Welcome To The Nigeria French Language Village </p>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="vc_row wpb_row vc_row-fluid vc_custom_1493194014927 vc_row-has-fill">
     <div class="container">
       <div class="row">

         <div class="wpb_column vc_column_container vc_col-sm-6">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">
               <div class=" fh-icon-box-2 light-version icon-center" style="background-image: url()"> <span class="fh-icon"><i class="fa fa-eye"></i></span>
                 <h4>Our Vision</h4>

                 <div class="sub-title">------------------------------</div>
                 <div class="desc">

                   <?php echo ($vision->body) ?>



                 </div>
               </div>

             </div>
           </div>
         </div>


         <div class="wpb_column vc_column_container vc_col-sm-6">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">

               <div class=" fh-icon-box-2 light-version icon-center" style="background-image: url()"> <span class="fh-icon"><i class="fa fa-bullseye"></i></span>




                 <h4>Our Mission</h4>
                 <div class="sub-title">------------------------------</div>

                 <div class="desc"  style="padding: 0px !important ; font-size: 12px;">

                   <?php echo ($mission->body); ?>


                 </div>
               </div>
             </div>
           </div>
         </div>





         <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">
               <div class="fh-section-title clearfix  text-left style-2">
                 <h2>Mandate </h2>
               </div>
               <div class="vc_empty_space" style="height: 12px"><span class="vc_empty_space_inner"></span></div>

               <div class="wpb_text_column wpb_content_element  vc_custom_1549490752347">
                 <div class="wpb_wrapper" style="color: rgba(255,255,255,1.00) !important">


                   <?php echo ($mandate->body) ?>



                 </div>
               </div>
               <div class="vc_btn3-container  about-btn vc_btn3-inline">
                 <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-white" href="/page/5/history" title="Read More">Read More</a>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="vc_row wpb_row vc_row-fluid vc_custom_1549613157949">
     <div class="container">
       <div class="row">
         <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">
               <div class="fh-section-title clearfix  text-center style-1">
                 <h2> </h2>
               </div>

               <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>



               <div class="vc_row wpb_row vc_inner vc_row-fluid">


                 <div align="center" style="clear: both">

                   <div class="wrap-btn" style="display: inline-block">
                     <a href="http://www.portal.frenchvillage.edu.ng/paynow" class="btn btn-success">Pay Tuition </a>
                   </div>



                   <div class="wrap-btn" style="display: inline-block">
                     <a href="http://www.portal.frenchvillage.edu.ng/confirmpayment" class="btn btn-success">Check Payment Status </a>
                   </div>




                   <div class="wrap-btn" style="display: inline-block">
                     <a href="http://www.portal.frenchvillage.edu.ng/confirm_registration_code" class="btn btn-success">Confirm Registration Payment </a>
                   </div>




                   <div class="wrap-btn" style="display: inline-block">
                     <a class="btn btn-success" href="http://www.portal.frenchvillage.edu.ng/register" class="flat-button-arrow">Application Form </a>
                   </div>



                   <div class="wrap-btn" style="display: inline-block">
                     <a class="btn btn-success" href="http://www.portal.frenchvillage.edu.ng/login" class="flat-button-arrow">School Portal </a>
                   </div>

                   <div class="wrap-btn" style="display: inline-block">
                     <a class="btn btn-success" href="https://frenchvillage.edu.ng:2096/" class="flat-button-arrow">Webmail </a>
                   </div>






                   <div class="wrap-btn" style="display: inline-block">
                     <a class="btn btn-success" href="/page/9/Anthem" class="flat-button-arrow">Village Anthem </a>
                   </div>



                   <div class="wrap-btn" style="display: inline-block">
                     <a class="btn btn-success" href="/gallery_view" class="flat-button-arrow">Gallery </a>
                   </div>




                   <div class="wrap-btn" style="display: inline-block">

                     <a class="btn btn-success" href="/page/16/faq" style="" title=""> FAQ </a>

                   </div>






                 </div>



               </div>



               <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="vc_row wpb_row vc_row-fluid vc_custom_1549569841401 vc_row-has-fill">
     <div class="container">
       <div class="row">
         <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">
               <div class="fh-section-title clearfix  text-center style-2">


                 <h2>Latest News</h2>


               </div>
               <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>


               <div class="fh-latest-post ">
                 <div class="owl-carousel owl-theme">

                   <?php foreach ($service   as $service) {  ?>


                     <div class="item">


                       <div class="owl-item" style="width: 300px;">

                         <div class="item-latest-post no-thumb">
                           <div class="entry-thumbnail"><a href="/newsletter/{{$service->id}}/news"><i class="fa fa-link" aria-hidden="true"></i></a></div>


                           <div class="entry-header">
                             <a href="/newsletter/{{$service->id}}/news">
                               <div style="background-image: url('{{$service->image}}') ; background-position: center ; background-size: contain ; height: 100px ; background-repeat: no-repeat"> </div>
                             </a>

                             <div class="entry-meta"><span class="meta posted-on" style="color: white"><a href="/newsletter/{{$service->id}}/news" rel="bookmark"><i style="color: white" class="fa fa-clock-o" aria-hidden="true"></i><time style="color: white" class="entry-date published updated" datetime="2019-02-08T00:11:12+00:00"> {{ $service->created_at }} </time></a></span></div>
                             <h2 class="entry-title"><a href="/newsletter/{{$service->id}}/news"> {{ $service->title }} </a></h2>
                           </div>



                           <div class="line"></div>
                         </div>
                       </div>

                     </div>

                   <?php   } ?>




                 </div>





                 <div class="post-list owl-carousel owl-theme" id="post-slider-5de23be02c7e9" style="opacity: 1; display: block;">




                   <div class="owl-controls clickable">
                     <div class="owl-pagination">
                       <div class="owl-page active"><span class=""></span></div>
                       <div class="owl-page"><span class=""></span></div>
                     </div>
                   </div>




                 </div>




               </div>
               <div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>




               <div class="vc_btn3-container vc_btn3-center">
                 <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-icon-left vc_btn3-color-default" href="/event" title="Read More"><i class="vc_btn3-icon fa fa-adjust"></i> Click For More News</a>
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>






   <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: 0px; box-sizing: border-box; width: 1349px;">
     <div class="container-fluid">
       <div class="row">
         <div class="wpb_column vc_column_container vc_col-sm-12">
           <div class="vc_column-inner ">
             <div class="wpb_wrapper">
               <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                 <div class="wpb_wrapper">



                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6980390253807!2d2.892601514273933!3d6.432820695345869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b6257735a5093%3A0x709631afff924fc9!2sNIGERIA%20FRENCH%20LANGUAGE%20VILLAGE!5e0!3m2!1sen!2sng!4v1575147388419!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>


   <div class="vc_row-full-width vc_clearfix"></div>


   <section class="location-section ">
     <div class="container">
       <div class="row justify-content-center">
         <div class="">

           <div class="location-card shadow-lg">
             <div class="icon-box">
               <i class="flaticon-pin"></i>
             </div>

             <div class="location-content text-center">
               <h5 class="mb-2">Visit Our Location</h5>
               <p class="mb-0">
                 <?php echo htmlspecialchars($contact->address); ?>
               </p>
             </div>
           </div>

         </div>
       </div>
     </div>
     <style>
       .location-section {
         /*  background: linear-gradient(135deg, #f0f7ff, #ffffff); */
       }

       .location-card {
         background: #ffffff;
         border-radius: 16px;
         padding: 5px 5px;
         text-align: center;
         transition: all 0.3s ease;
       }

       .location-card:hover {
         transform: translateY(-6px);
         box-shadow: 0 15px 40px rgba(0, 123, 255, 0.25);
       }

       .icon-box {
         width: 30px;
         height: 30px;
         background: #007bff;
         color: #ffffff;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 32px;
         margin: 0 auto 5px;
       }

       .location-content h5 {
         font-weight: 600;
         color: #0d1b2a;
       }

       .location-content p {
         font-size: 16px;
         color: #555;
         line-height: 1.6;
       }
     </style>
   </section>


 </div>


 @endsection
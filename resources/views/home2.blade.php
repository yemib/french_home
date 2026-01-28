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
                   text-align: center; width: 84%; margin: 0 auto;"> Welcome To The Nigeria French Language Village </p>

                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>



   @include('sections.vision_mission_mandade')







   @include('sections.latest_news')




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
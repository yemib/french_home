<!---thhe banner is here  ---->
  @extends('layouts.index')

@section('content')
  
  <?php  

use Tutorialspoint\servicess;
use Tutorialspoint\page;
use Tutorialspoint\contact_detail;
use Tutorialspoint\slidders;
use Tutorialspoint\logos;
use Tutorialspoint\management;

$management  = management::where('publish' , 'yes')->paginate(10);

$logo = logos::first();
$service  = servicess::where('publish' , 'yes')->orderby('id', 'asc')->paginate(6);


$contact  = contact_detail::first();

$select_slide  = slidders::where('publish' , 'yes')->get();

?>



@section('slidder')


@include('slidder')

     
               
@endsection
   
     <!---   echo home here   ---->
       
       
       <?php  
		   $vision  = page::find(2);
		   $mission  = page::find(3);
		   $mandate  = page::find(4);
		   
		   ?>
        
        
         
         
         
    <section  style="position: relative" class="flat-features-5"> 
    
    
    

    <div class="container"> 
     <div class="row"> 
     
     
     
      <div class="col-lg-6 col-md-6 col-sm-6"> 
       <div class="title-features-5"> 
        
        <h2>Welcome To The Nigeria French Language Village  </h2> 
       </div> 
       
       
          <style> 
		   
		   .heading_text{
			   
		
			    text-shadow: 2px 2px  rgba(21,39,248,1.00) ;
			   
			   
		   }
		   
		   </style>
       
       <br/>
       <br/>
       <br/>
   
       
       
       
       <div  class="desktop">
        <h1  class="heading_text"> Our Mandate </h1>
           <br/>
            <span  style="color: black"> {!!    $mandate->body   !!}  </span>
            
       </div>
       
      </div> 
      <div class="col-lg-6 col-md-6 col-sm-6"> 
       <div class="content-features-5"> 
    
     
        <p> 
        <h1  class="heading_text"> Our Vision </h1>
        <br/>
		   <span  style="color: black">     {!!   $vision->body   !!}  </span>
          
          
          <br/>
          
          
           <h1   class="heading_text"> Our Mission </h1>
           <br/>
            <span  style="color: black"> {!!    $mission->body   !!}  </span>
            
            
            <br/>
              
          
            
             <div  class="phone">
        <h1   class="heading_text"> Our Mandate </h1>
            <span  style="color: black"> {!!    $mandate->body   !!}  </span>
            
       </div>
            
          
          </p> 
        
        
        
        
        <div class="inner-features-5 clearfix"> 
         <div class="image-features-5"> 
         
       
         
         
         </div> 
         <div class="name-features-5"> 
          
         </div> 
        </div> 
        
        
        
        
       </div> 
      </div> 
     
     
		<div    style="clear: both">
    
         <div class="wrap-btn"   style="display: inline-block"> 
          <a href="http://www.portal.frenchvillage.edu.ng/paynow" class="flat-button-arrow">Pay  Tuition </a> 
         </div>   
         
         <div class="wrap-btn"   style="display: inline-block"> 
          <a href="http://www.portal.frenchvillage.edu.ng/confirmpayment" class="flat-button-arrow">Check Payment Status </a> 
         </div>
         
                  
                  
                   
         <div class="wrap-btn"   style="display: inline-block"> 
          <a href="http://www.portal.frenchvillage.edu.ng/register" class="flat-button-arrow">Application Form </a> 
         </div>
         
                
                
                 <div class="wrap-btn"   style="display: inline-block"> 
          <a href="http://www.portal.frenchvillage.edu.ng/login" class="flat-button-arrow">School Portal </a> 
         </div>   
         
           <div class="wrap-btn"   style="display: inline-block"> 
          <a href="https://frenchvillage.edu.ng:2096/" class="flat-button-arrow">Webmail </a> 
         </div>   
         
          
         
         
            
               
                     <div class="wrap-btn"   style="display: inline-block"> 
          <a href="/page/9/Anthem" class="flat-button-arrow">Village Anthem </a> 
         </div> 
         
            
          
         
         
        
            </div>
     
     </div> 
    </div> 
   </section> 
   
   
   
   
   
   
   <section class="flat-services"> 
    <div  style="position: relative" class="container"> 
     <div class="row fix-height-box"> 
      <div class="col-sm-12"> 
       <div class="title-section style1"> 
        <p></p> 
        <div class="content-inner clearfix"> 
         <div class="wrap-contentt"> 
          <h2><a href="">News</a></h2> 
         </div> 
        
        </div> 
       </div> 
      </div>
      
      <div  align="center">
      @include('newsletter_list')
      </div>
      
    
      
       <div    align="center" style="clear: both  ; position: absolute ; bottom: -105px ; left: 40% " class="wrap-btn"> 
          <a href="/event" class="flat-button-arrow">View All</a> 
         </div> 
         
         
     </div> 
    </div> 
   </section> 
   
<!---
   <section class="flat-features-2"> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-lg-12"> 
       <div class="title-section"> 
        <p>  </p> 
        <div class="content-inner clearfix"> 
         <div class="wrap-contentt"> 
          <h2><a href="#">Staff</a></h2> 
         </div> 
       
        </div> 
       </div> 
      </div> 
      
      
    
      
       
       <?php   foreach($management  as $management){   ?>
        
          <div class="col-md-4"> 
       <article class="post"> 
        <div class="featured-post"> 
         <img src="{{ $management->image }}" alt="image"> 
        </div> 
        <div class="content-post"> 
         
         <h4><a href="#">{{ $management->name }}</a></h4> 
         
         <h5  style="color: green">  {{ $management->position }}  </h5>
         <p></p> 
        </div> 
       </article> 
      </div> 
           
           
           <?php   }?>
          
     

     
     
       <div style="clear: both" class="wrap-btn"> 
          <a href="/staff" class="flat-button-arrow">View All</a> 
         </div> 
     </div> 
    </div> 
   </section> 
   
--->
   
    
    @endsection
  


<!---thhe banner is here  ---->
  @extends('layouts.index')

@section('content')


  
  
  <?php 

use Tutorialspoint\management;

$management  = management::where('publish' , 'yes')->where('description'  ,  $category )->get();   ?>
  

    @section('title')
Staff
@endsection

     
      <div class="page-title"   style=" background-repeat: no-repeat; background-size: cover"> 
   <div class="container"> 
    <div> 
     <div class="row"> 
      <div class="col-lg-12"> 
       <div class="page-title-heading"> 
        <h1> <a  style="text-shadow: 2px 0 0 green, -2px 0 0 green, 0 2px 0 green, 0 -2px 0 green, 1px 1px green, -1px -1px 0 green, 1px -1px 0 green, -1px 1px 0 green; "  href="#">  
<?php  

switch($category){
		
	case 'lectures':
		echo('Lectures');
		break;
	case 'academics':
		echo('Academics');
			
		break;
	case 'bursary':
		echo('Bursary');
		break;
	case 'directorate':
		echo('Directorate');
		break;
	case 'health':
		echo('Health Services');
		break;
	case 'library':
		echo('Library');
		break;
	case 'registry':
		echo('Registry');
		break;
		
		
	case 'work':
		echo('Work And Services');
		break;
	
		
	case 'directors':
		echo('Director And Principals');
		break;
	
	
		
	default:
		echo('Staff');
}


?>
</a> </h1> 
       </div> 
       
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  
  
  
  
   <section class="flat-features-2"> 
    <div class="container"> 
     <div class="row"> 
      <div class="col-lg-12"> 
       <div class="title-section"> 
        <p>  </p> 
        <div class="content-inner clearfix"> 
         <div class="wrap-contentt"> 
          <h2><a href="#"></a></h2> 
         </div> 
       
        </div> 
       </div> 
      </div> 
      
      
    
      
       
       <?php   foreach($management  as $management){   ?>
        
          <div class="col-md-4"> 
       <article class="post"> 
        <div class="featured-post"> 
        
        <?php   if( $management->image  != '  ') {   ?>
         <img src="{{ $management->image }}" alt="image"> 
         
          <?php    }?>
         
        </div> 
        <div class="content-post"> 
         
         <h4><a href="#">{{ $management->name }}</a></h4> 
         
         <h5  style="color: green">  {{ $management->position }}  </h5>
         <p></p> 
        </div> 
       </article> 
      </div> 
           
           
           <?php   }?>
          
     

   
     </div> 
    </div> 
   </section> 
   
   @endsection
   

<?php 
use Tutorialspoint\contact_detail;
use Tutorialspoint\logos;

$contact  = contact_detail::first();
$logo  = logos::first();

?>
  

    <div class="header-inner"   style="background-color: rgba(78,45,245,0.2);"> 
    
    
   <div class="top-bar style1"> 
    <div class="container-fluid"> 
     <div class="top-bar-inner clearfix"> 
      <div class="top-bar-info"> 
      
 
      
       <ul> 
       
        <li class="top-bar-email">  <p class="content"><a   href="http://www.portal.frenchvillage.edu.ng/login"  style="color: black"><img    src="{{ $logo->image }}" alt="image" width="50" height="50"   style="border-radius: 100%;"   data-retina="{{ $logo->image }}" data-width="274" data-height="40"></a> </p> </li>   
        
         
          
           
            
              <li class="top-bar-email">  <p class="content"><a   href="http://www.portal.frenchvillage.edu.ng/login"  style="color: black">Eportal</a> </p> </li> 
        
        <li class="top-bar-phone">  <p class="content"><a style="color: black"  href="/admins" title="">Admin Login</a></p> </li> 
        
        
        
        <li class="top-bar-address"> <p class="content"> <a   href="/gallery_view"  style="color: black" title=""> Gallery </a> </p> </li> 
       
         <li class="top-bar-address"> <p class="content"> <a   href="/page/16/faq" style="color: black" title=""> FAQ </a> </p> </li> 
        
        
        
        <li class="top-bar-address"> <p class="content"> <a   href="https://frenchvillage.edu.ng:2096/"  style="color: black" title=""> Webmail </a> </p> </li> 
        
        
       </ul> 
      </div> 
      <div class="top-bar-language clearfix"> 
       <div class="top-bar-select"> 
         
       </div> 
       <div class="top-bar-button"> 
       <!---
        <a href="" class="elm-btn hvr-sshutter-out-vertical"></a>
        
        ---->
          
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   
   
   
   <header class="style1" id="header"> 
    <div id="site-header"> 
     <div class="container-fluid"> 
      <div class="header-wrap clearfix   phone_header"   style=""> 
      
      
       <div id="logo" class="logo  phone"> 
        <a href=""><img    src="{{ $logo->image }}" alt="image" width="50" height="50"   style="border-radius: 100%;  width: 50px !important  ; height: 50px!important"   data-retina="{{ $logo->image }}" data-width="274" data-height="40"></a> 
       </div> 
       
       
       
       <div class="mobile-button"> 
        <span></span> 
       </div> 
       
       
       <div class="nav-wrap"  style="width: 100%;"  > 
        <nav id="mainnav" class="mainnav"> 
         <ul class="menu"> 
         
         
         <li>  <a   style="color: rgba(255,255,255,1.00)"  href="/">  HOME   </a> </li>
         
         
          <li class=""> <a   style="cursor: pointer" title="">About Us</a> 
           <ul class="sub-menu"> 
            <li class="active"><a href="/page/5/history" title="">Our  History</a></li> 
            
            
            
        
              
           </ul>
           <!-- /.sub-menu --> </li> 
        
           
          <li class=""> <a style="cursor: pointer" title="">Admission / Registration </a> 
           <ul class="sub-menu"> 
            <li class="active"><a href="http://www.portal.frenchvillage.edu.ng/register" title="">Application Form  </a></li> 
            <li><a href="http://www.portal.frenchvillage.edu.ng/login" title="">NFLV Portal</a></li> 
            
        
            
      
           </ul>
           <!-- /.sub-menu --> </li> 
        
          
            
         <li>  <a  href="/paynow">PAYMENT </a> </li>
          
           
          <li> 
          <a style="cursor: pointer"  title="">Programmes</a> 
          
          
           <ul class="sub-menu"> 
           
           <li> <a>  Language Immersion Programme (LIP)  </a>
			   
         <ul   class="sub-menu">
         
          
            
            <li><a href="/page/10/Universities" title="">Universities</a></li>
              
          
                     <li><a href="/page/11/Colledge_of_Education" title="">College of Education </a></li>
                                 
                                 
                                  </ul>
          
          
          </li>
           
           
         <li>  <a  style="cursor: pointer">  FSP/CONSULT Programmes</a>
          
           <ul  class="sub-menu">
           
              
              
            <li><a href="/page/12/Diploma" title="">Diploma(One Year) </a></li> 
               
                  <li><a href="/page/13/Module" title=""> Module (Three Month)</a></li> 
         
               
                     <li><a href="/page/14/Evening_Programme" title=""> Evening Programme</a></li>   
                
                
                    <li><a href="/page/15/Weekend_Programme" title=""> Weekend Programme</a></li>
                    
                    
                    <li><a href="/page/26/Summer_Holiday_Camp" title=""> Summer Holiday Camp (For Secondary Schools)</a></li>
                     
                      
                    <li><a href="/page/27/Easter_Holiday_Camp" title=""> Easter Holiday Camp(in the West Coast)</a></li>
                    
                    
                     <li><a href="/page/28/Easter_Holiday_Camp" title=""> Teachers Workshop</a></li>
                     
                     
                     <li><a  style="font-size: 12px" href="/page/29/Other_customised_programme" title=""> Other customised programme </a></li>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                
                 </ul>
           
           </li>
            
              
         
        
            
         
          
            <!--- <li><a href="" title="">News Letter</a></li> ---->
           </ul>
           <!-- /.sub-menu --> </li>
                               
          <li> <a style="cursor: pointer"  title="">Department</a> 
           <ul class="sub-menu"> 
           
           
           
            <li><a href="/department/18/directors" title="">Principal  Officers</a></li> 
            
            
            
            
           
              <li><a href="/department/19/directorate" title="">Directorate</a></li> 
              
         
			   
            <li><a href="/department/20/academics" title="">Academic</a></li> 
            
            <li><a href="/department/21/bursary" title="">Bursary</a></li> 
            
            
   
            
            
            <li><a href="/department/22/library" title="">Library</a></li> 
            
            
            
            <li><a href="/department/23/registry" title="">Registry</a></li>
            
            
            
            <li><a href="/department/24/health" title="">Health Services</a></li> 
             
               
            <li><a href="/department/25/work" title="">Work &amp; Services </a></li> 
            <!--- <li><a href="" title="">News Letter</a></li> ---->
           </ul>
           <!-- /.sub-menu --> </li> 
           
           
           
                                   
          <li> <a style="cursor: pointer"  title="">Resources</a> 
           <ul class="sub-menu"> 
         <!--   <li><a href="{{ asset('resources/NFLV Student Brochure-Edited For Web.pdf')  }}" title="">Student Brochure</a></li> --->
            <li><a href="{{ asset('resources/Teaching Resources-NFLV.pdf')  }}" title="">Teaching Resources</a></li> 
            <li><a href="/page/9/Anthem" title="">Village Anthem</a></li> 
            <!--- <li><a href="" title="">News Letter</a></li> ---->
           </ul>
           <!-- /.sub-menu --> </li>
                                      
                                      
                                      
                                      
                                      
                                       
                                       <li>  <a   href="http://www.portal.frenchvillage.edu.ng/login">  Eportal  </a> </li> 
                                          
                     <li>  <a   href="https://frenchvillage.edu.ng:2096/"  style="color: black" title=""> Webmail </a>  </li>                    
  
         
         
         
         <li>  <a   href="/gallery_view"  style="" title=""> Gallery </a>  </li> 
       
         <li>  <a   href="/page/16/faq" style="" title=""> FAQ </a></li> 
        
        
         
         
        
         </ul> 
        </nav> 
       </div>
       <!-- /.nav-wrap --> 
      </div> 
     </div> 
    </div> 
   </header> 
  </div> 
  
 
<style>

	.menu li>a  {
		
		color:white  !important;
		text-shadow: 2px 2px 4px #000000;
		
	}
	
	.menu li>a:hover{
		
		color: rgba(255,0,0,1.00) !important;
	}
	.sub-menu  li>a {
		
		color:black  !important;
		
	}

</style>
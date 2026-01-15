 @extends('admin_folder/index')
         @section('content')
         
         <?php 
use Tutorialspoint\management;

if(isset($edit)){
	
	  $service =  management::find($id);
	
}

?>
         
         
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Add Staff</h3>
              </div>
              <div class="panel-body">
               
               <a   class="btn btn-primary" href="/managements">  Staff List     </a>
                <form  method="post" action="@if(isset($service)) /managements/{{ $service->id }}  @else /managements @endif"  enctype="multipart/form-data"   >
                 
                  {{ csrf_field() }}
              
                  <div class="form-group">
                    <label>Name</label>
                    <input  required   type="text" class="form-control" placeholder="Name" value="@if(isset($service)) {{$service->name}} @endif"   name="name" >
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label>Position</label>
                    <input required  name="position" class="form-control"     placeholder="Position"  value="@if(isset($service)) {{ $service->position  }}  @endif"  />
                    
                   
                  </div>  
					
                       
                       
                        
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input   name="phone" class="form-control"     placeholder="Phone"  value="@if(isset($service)) {{ $service->phone  }}  @endif"  />
                    
                   
                  </div>
                          
                          
                          
                           <div class="form-group">
                    <label>Description</label>
                  
                    
                   <textarea  class="form-control"  placeholder="Description"   name="category"  >@if(isset($service)) {{ $service->category  }}  @endif</textarea>
                   
                   
                  </div>
                  
                         
                                       
                   
                     <div class="form-group">
                    <label>Category</label>
                    
                    <select class="form-control"   required    name="description"> 
                    @if(isset($service)) 
                    
                      <option>{{ $service->description  }}</option> @endif
                     <option  value="directors">Director And Principals</option>
                     
                     
                     <!---
                     <option  value="lectures">Lectures</option>   ---->
                     
                     
                     
                     <option  value="academics">Academics</option>
                     <option  value="bursary">Bursary</option>
                     <option  value="directorate">Directorate</option>
                     <option value="health">Health Services</option>
                     <option  value="library">Library</option>
                     <option  value="registry">Registry</option>
                     <option    value="work">Work And Services</option>
                     
                        </select>
                    
                    
                   
                  </div>
                
                  
                  
                 
                  <div class="form-group">
                   
                   <div   id="preview" @if(isset($service)) style="background-image: url({{ $service->image }}); height: 200px"  @endif >       </div>
                   
                   
                   <input  id="pre_input"     type="hidden"   name="image"    />
                   
                   
                    <label  class="btn btn-primary"  for="file-input">Upload Picture</label>
                   
                   
                     
                  <div class="checkbox">
                   
                    <?php  if(isset($service)) { ?>
              
                    <label>
                    
                      <input  name="publish"   value="yes"  @if($service->publish  =='yes')  checked @endif  type="checkbox"> Published
                    </label>
                     
                     
                     <?php   } else{   ?>
                     
                    <label><input  name="publish"   value="yes"    type="checkbox" checked> Published</label>
                    
                    <?php   } ?>
                  </div>
                   
                   <input       type="file"   style="display: none"   id="file-input"   name="picture" >
                  </div>
                  
                  
                       <?php  if(isset($service)) { ?>
                              
                              <input    type="hidden"     name="_method"   value="PUT"/>
                              
                               <input type="submit" class="btn btn-default" value="Update">
                               
                               
                               
                       
                       <?php  }else{    ?>
                  
                  <input type="submit" class="btn btn-default" value="Submit">
                  
                  
                  <input type="reset" class="btn btn-danger" value="Reset"    onClick="$('#preview').hide()">
                  
                  
                  <?php    } ?>
                  
                </form>
              </div>
              </div>

          </div>
       @endsection
    
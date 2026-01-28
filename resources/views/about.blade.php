<!---thhe banner is here  ---->
@extends('layouts.index2')

@section('content')

<?php

use Tutorialspoint\page;


$page = page::find($id);

?>

@section('title')

{{ $page->title  }}

@endsection




<div class="page-header title-area style-1">

  <div class="header-title blog-title" style="background-position: 50% 94px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-title"> {{ $page->title  }} </h1>
        </div>
      </div>
    </div>
  </div>

</div>







<div id="content" class="site-content">


  <div class="container">
    <div class="row">

      <div style="width: 100% !important" id="primary" class="content-area col-md-8 col-sm-12 col-xs-12">

        <main id="main" class="site-main ">

          <article id="post-2786" class="blog-wrapper post-2786 post type-post status-publish format-standard hentry category-latest-news no-thumb">

            <div class="content-features-5">

              <!---   echo home here   ---->




              <?php

              if ($id  == 9) {

              ?>



                <audio controls autoplay>

                  <source src="{{   asset('/village.mpeg')  }}" type="audio/mpeg">

                  Your browser does not support the audio update it .

                </audio>


              <?php

              }


              ?>



              <br />
              <br />
              <br />

              <div style="color: rgba(0,0,0,1.00)"> {!! $page->body !!} </div>



              <?php if (isset($department)) {  ?>

                <div align="center">
                  <br />

                  <?php if ($department  != 'directors') {  ?>

                    <div class="wrap-btn" style="display: inline-block">
                      <a href="/staff/{{ $department }}" class="btn btn-primary">STAFF </a>
                    </div>


                  <?php   } else { ?>

                    <div class="wrap-btn" style="display: inline-block">
                      <a href="/management" class="btn btn-primary">STAFF </a>
                    </div>

                  <?php

                  }  ?>

                </div>

              <?php    } ?>


            </div>


          </article>
        </main>

      </div>

    </div>
  </div>




</div>




@endsection
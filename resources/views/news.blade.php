<!---thhe banner is here  ---->
  @extends('layouts.index2')

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
$service  = servicess::where('publish' , 'yes')->orderby('id', 'desc')->paginate(10);


$contact  = contact_detail::first();

$select_slide  = slidders::where('publish' , 'yes')->get();

?>


  
  @section('title')

The Nigeria French Village News

@endsection

  
<div class="page-header title-area style-1">

	<div class="header-title blog-title" style="background-position: 50% 94px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-title">The Nigeria French Village News</h1>				</div>
			</div>
		</div>
	</div>
	
</div>




	<div id="content" class="site-content">
		
		<div class="container">
			<div class="row">

	<div  style="width: 100% !important" id="primary" class="content-area col-md-8 col-sm-12 col-xs-12">
		<main id="main" class="site-main ">

		<?php  foreach($service  as $news)  {   ?>
						 
				
<article id="post-2786" class="blog-wrapper post-2786 post type-post status-publish format-standard hentry category-latest-news no-thumb">


	<div class="entry-thumbnail">
		<a href="/newsletter/{{ $news->id }}/heading"><i class="fa fa-link" aria-hidden="true"></i></a>
	</div>
	<header class="entry-header">
					<h2 class="entry-title"><a href="/newsletter/{{ $news->id }}/heading">{{ $news->title  }}</a></h2>
		
		<div class="entry-meta">
			<span class="meta posted-on"><a href="/newsletter/{{ $news->id }}/heading" rel="bookmark"><i class="fa fa-clock-o" aria-hidden="true"></i><time class="entry-date published updated" datetime="2019-02-08T00:11:12+00:00"> {{ $news->created_at  }}  </time></a></span>
							<span class="meta cat-link">
				<a href="/newsletter/{{ $news->id }}/heading" class="category-link"><i class="fa fa-tags" aria-hidden="true"></i>Latest News</a>			</span>
				
		</div><!-- .entry-meta -->

		
	</header><!-- .entry-header -->

<a  href="/newsletter/{{ $news->id }}/heading"> 
	<div  style="height: 100px ; overflow: hidden ; text-overflow: ellipsis" class="entry-content">
	
	{!! $news->body  !!}

			</div>
			
			</a>
			<!-- .entry-content -->

	<footer class="entry-footer clearfix">
				<div class="post-author-avatar">
			<img alt="" src="" class="avatar avatar-50 photo" width="50" height="50">		</div>
		<div class="post-author-info">
			<h3 class="author-name"></h3>
		</div>
			</footer>

</article><!-- #post-## -->

			
			
			<?php  } ?>
			
			
			
			
			
			<?php  echo $service->links()  ?>
			
				

		
		</main><!-- #main -->
	</div><!-- #primary -->

		<!-- #secondary -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div><!-- #content -->
 




 
    @endsection
  
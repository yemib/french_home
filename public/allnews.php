<?php include_once "header.php";
include "server.php"; ?>
<section id="content">	
			
	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
		
		<h1>News</h1>
		
								<p class="breadcrumb"><a href='index.html'>Home</a> / <a href="">News</a> / Latest News</p>								
		
	</section>
	<!-- Page Heading -->


	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="post-content">
		    <h1>Latest News</h1>
		<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
				    <?php
                    $select = "SELECT  * FROM event ORDER BY id desc";
                    $result = $db->query($select);
                    if ($result->num_rows>0){
                    	while($rows=$result->fetch_assoc()){
                     		$id = $rows['id'];
                     		$title = $rows['title'];
                     		$img = $rows['img'];?>
				    	<?php echo "<a href='news.php?id=$id'>";?>
				    <div class="col-md-6" style="height:504px">
				        <img src="img/<?php echo $rows['img'];?>" alt="" style="height:300px; width:520px">
				        <h3 align="" style="font-weight: 700;"><?php echo $rows['title'];?></h3>
				        Posted on <span><i class="fa fa-calendar"></i>&nbsp&nbsp<?php echo $rows['time_post']; ?></span>
				        	<!-- Post Meta Track -->
				<!--<div class="post-meta-track animate-onscroll">-->
					
				<!--	<table class="project-details">-->
						
				<!--		<tr>-->
				<!--			<td class="share-media">-->
				<!--				<ul class="social-share">	-->
				<!--					<li>Share this:</li>-->
				<!--					<li class="facebook"><a href="#" class="tooltip-ontop" title="Facebook"><i class="icons icon-facebook"></i></a></li>-->
				<!--					<li class="twitter"><a href="#" class="tooltip-ontop" title="Twitter"><i class="icons icon-twitter"></i></a></li>-->
				<!--					<li class="google"><a href="#" class="tooltip-ontop" title="Google Plus"><i class="icons icon-gplus"></i></a></li>-->
				<!--					<li class="pinterest"><a href="#" class="tooltip-ontop" title="Pinterest"><i class="icons icon-pinterest-3"></i></a></li>-->
				<!--					<li class="email"><a href="#" class="tooltip-ontop" title="Email"><i class="icons icon-mail"></i></a></li>-->
				<!--				</ul>-->
				<!--			</td>-->
				<!--			<td class="tags">Tags: </td>-->
				<!--		</tr>-->
						
				<!--	</table>-->
					
				<!--</div>-->
				<!-- /Post Meta Track -->
				    </div>
				    <?php echo "</a>"?>
                   <?php } 
			              	} ?>
				</div>
			</div>
		
	</section>
	<!-- /Section -->
		
</section>		
<?php include_once "footer.php"?>
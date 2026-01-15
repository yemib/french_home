<?php include "header.php";
include "server.php";
$result = mysqli_query($db, "SELECT * FROM work where id = 1");
$fetch = mysqli_fetch_assoc($result);
?>
<section id="content">	
			
	<!-- Page Heading -->
	<section class="section page-heading animate-onscroll">
		
		<h1>Works and Services</h1>
		
								<p class="breadcrumb"><a href='index.php'>Home</a> / <a href="">Units</a> / Works and Services</p>								
		
	</section>
	<!-- Page Heading -->

	<!-- Section -->
	<section class="section full-width-bg gray-bg">
		<div class="post-content">
		    <h1>Works and Services</h1>
		<div class="row">
				<div class="col-md-12">
				  <h5><?php echo $fetch['name']; ?></h5>
				  </div>
		</div>
		</div>
		   	
	</section>
	<!-- /Section -->
		
</section>		
<?php include_once "footer.php"?>
<?php

use Tutorialspoint\contact_detail;
use Tutorialspoint\logos;

$contact  = contact_detail::first();
$logo  = logos::first();

?>




<header id="masthead" class="site-header clearfix">

	<div class="header-main clearfix">
		<div class="site-contact">
			<div class="container">
				<div class="row">
					<div class="site-logo col-md-3 col-sm-6 col-xs-6">
						<a href="" class="logo">

							<div style="height: 70px  ; width: 100%; background-image: url('{{ $logo->image }}'); background-position:center  ;
							 background-size: contain; background-repeat: no-repeat"> </div>



						</a>
						<h1 class="site-title"><a href="" rel="home">The Nigeria French Language Village</a></h1>
						<h2 class="site-description"></h2>
					</div>
					<div class="site-extra-text col-md-9 col-sm-6 col-xs-6">
						<div class="extra-item item-text">
							<div class="style-2">
							<!-- 	<div class="location item-2">
									<i class="flaticon-pin"></i>
									<div>
										<span>Visit our Location :</span>
										<?php echo ($contact->address)  ?>
									</div>
								</div> -->

								<!---
	​<div class="opening item-2">
		<i class="flaticon-clock"></i>
		<div>
			<span>Opening Hours :</span>
			Mon - Fri: 8am - 5pm
		</div>
	</div>

----->

								​<div class="contact item-2">
									<i class="flaticon-web"></i>
									<div>
										<span>Send us a Mail:</span>
										<?php echo ($contact->email)  ?><br />


									</div>
								</div>



								​<div class="contact item-2">
									<i class="flaticon-web"></i>
									<div>
										<span>Send us a Mail:</span>

										<?php echo ($contact->pinterest)  ?>

									</div>
								</div>







								<!-- 
								<div class="contact item-2">

									<div>


										<a style="color: black" href="/admins" title="">Admin Login</a>






									</div>
								</div> -->



							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site-menu">
			<div class="container">
				<div class="row">
					<div class="site-nav col-sm-12 col-xs-12 col-md-12">
						<nav id="site-navigation" class="main-nav primary-nav nav">

							<ul id="primary-menu" class="menu">






								<li> <a style="color: rgba(255,255,255,1.00)" href="/"> HOME </a> </li>


								<li class=""> <a style="cursor: pointer" title="">About Us</a>
									<ul class="sub-menu">
										<li class="active"><a href="/page/5/history" title="">Our History</a></li>





									</ul>
									<!-- /.sub-menu -->
								</li>


								<li class=""> <a style="cursor: pointer" title="">Admission / Registration </a>
									<ul class="sub-menu">
										<li class="active"><a href="http://www.portal.frenchvillage.edu.ng/register" title="">Application Form </a></li>

										<li><a href="http://www.portal.frenchvillage.edu.ng/login" title="">NFLV Portal</a></li>


										<li> <a href="http://www.portal.frenchvillage.edu.ng/paynow" class="">Pay Tuition </a> </li>


										<li> <a href="http://www.portal.frenchvillage.edu.ng/confirm_registration_code" class="">Confirm Registration Payment </a> </li>






										<li> <a href="http://www.portal.frenchvillage.edu.ng/confirmpayment" class="">Check Payment Status </a> </li>




									</ul>
									<!-- /.sub-menu -->
								</li>



								<li> <a href="https://www.portal.frenchvillage.edu.ng/paynow">PAYMENT </a> </li>


								<li>
									<a style="cursor: pointer" title="">Programmes</a>


									<ul class="sub-menu">

										<li> <a> Language Immersion Programme (LIP) </a>

											<ul class="sub-menu">



												<li><a href="/page/10/Universities" title="">Universities</a></li>


												<li><a href="/page/11/Colledge_of_Education" title="">College of Education </a></li>


											</ul>


										</li>


										<li> <a style="cursor: pointer"> FSP/CONSULT Programmes</a>

											<ul class="sub-menu">



												<li><a href="/page/12/Diploma" title="">Diploma(One Year) </a></li>

												<li><a href="/page/13/Module" title=""> Module (Three Month)</a></li>


												<li><a href="/page/14/Evening_Programme" title=""> Evening Programme</a></li>


												<li><a href="/page/15/Weekend_Programme" title=""> Weekend Programme</a></li>


												<li><a href="/page/26/Summer_Holiday_Camp" title=""> Summer Holiday Camp (For Secondary Schools)</a></li>


												<li><a href="/page/27/Easter_Holiday_Camp" title=""> Easter Holiday Camp(in the West Coast)</a></li>


												<li><a href="/page/28/Easter_Holiday_Camp" title=""> Teachers Workshop</a></li>


												<li><a style="font-size: 12px" href="/page/29/Other_customised_programme" title=""> Other customised programme </a></li>














											</ul>

										</li>







										<!--- <li><a href="" title="">News Letter</a></li> ---->
									</ul>
									<!-- /.sub-menu -->
								</li>

								<li> <a style="cursor: pointer" title="">Department</a>
									<ul class="sub-menu">



										<li><a href="/department/18/directors" title="">Principal Officers</a></li>





										<li><a href="/department/19/directorate" title="">Directorate</a></li>



										<li><a href="/department/20/academics" title="">Academic</a></li>

										<li><a href="/department/21/bursary" title="">Bursary</a></li>





										<li><a href="/department/22/library" title="">Library</a></li>



										<li><a href="/department/23/registry" title="">Registry</a></li>



										<li><a href="/department/24/health" title="">Health Services</a></li>


										<li><a href="/department/25/work" title="">Work &amp; Services </a></li>
										<!--- <li><a href="" title="">News Letter</a></li> ---->
									</ul>
									<!-- /.sub-menu -->
								</li>




								<li> <a style="cursor: pointer" title="">Resources</a>
									<ul class="sub-menu">
										<!--<li><a href="{{ asset('resources/NFLV Student Brochure-Edited For Web.pdf')  }}" title="">Student Brochure</a></li> --->
										<li><a href="{{ asset('resources/Teaching Resources-NFLV.pdf')  }}" title="">Teaching Resources</a></li>
										<li><a href="/page/9/Anthem" title="">Village Anthem</a></li>
										<!--- <li><a href="" title="">News Letter</a></li> ---->
									</ul>
									<!-- /.sub-menu -->
								</li>






								<li> <a href="http://www.portal.frenchvillage.edu.ng/login"> Eportal </a> </li>

								<li> <a href="https://frenchvillage.edu.ng:2096/" style="" title=""> Webmail </a> </li>











							</ul>



						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>



	<a href="/#" class="navbar-toggle">
		<span class="navbar-icon">
			<span class="navbars-line"></span>
		</span>
	</a>
</header>
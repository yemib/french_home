<?php

use Tutorialspoint\contact_detail;
use Tutorialspoint\logos;

$contact  = contact_detail::first();
$logo  = logos::first();

?>


<style>
	/* ===========================
   /* ===========================
   INSTITUTIONAL HEADER
=========================== */

	.institution-header {
		background: #ffffff;
		/* padding: 35px 0; */
		border-bottom: 1px solid #e6e6e6;
	}

	/* FLEX WRAPPER */
	.header-inner {
		display: flex;
		align-items: center;
		gap: 28px;
	}

	/* LOGO */
	.header-logo img {
		height: 95px;
		width: auto;
	}

	/* TEXT AREA */
	.header-text h1 {
		font-size: 2rem;
		font-weight: 700;
		color: #102542;
		margin: 0;
	}

	.header-text p {
		font-size: 1rem;
		color: #555;
		margin-top: 8px;
		max-width: 700px;
		line-height: 1.5;
	}

	/* SUBTLE DIVIDER */
	.divider {
		display: block;
		width: 80px;
		height: 3px;
		background: #caa400;
		margin: 10px 0;
	}

	/* RESPONSIVE */
	@media (max-width: 768px) {
		.header-inner {
			flex-direction: column;
			text-align: center;
		}

		.divider {
			margin: 12px auto;
		}

		.header-logo img {
			height: 80px;
		}
	}

	/* LOGO CONTAINER */
	.header-logo {
		width: 120px;
		/* fixed visual space */
		height: 120px;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	/* LOGO IMAGE */
	.header-logo img {
		max-width: 100%;
		max-height: 100%;
		width: auto;
		height: auto;
		object-fit: contain;
		/* NO distortion */
	}

	#fh-header-minimized {
		display: none !important;

	}
</style>



<header id="masthead" class="site-header clearfix" style="position: relative !important; padding-top: 0px  ; padding-bottom: 0px;">

	<div class="header-main clearfix">

		<!-- TOP HEADER -->
		<!-- PREMIUM TOP HEADER -->
		<header class="institution-header">
			<div class="container" style="width: 100%; padding:0px  ; padding-left: 5px;">
				<div class="header-inner">

					<!-- LOGO -->
					<div class="header-logo">
						<img src="{{ $logo->image }}" alt="NFV Logo">
					</div>

					<!-- TEXT -->
					<div class="header-text">
						<h1>The Nigeria French Language Village</h1>
						<span class="divider"></span>

					</div>

				</div>
			</div>
		</header>




		<div class="site-menu">
			<div class="container" style="width: 100%; padding:0px  ; padding-left: 5px;">
				<div class="row">
					<div class="site-nav col-sm-12 col-xs-12 col-md-12">
						<nav id="site-navigation" class="main-nav primary-nav nav">

						<ul id="primary-menu" class="menu">
							 @foreach ($menus as $menu)
									 @include('menu.partials.menu-item', ['menu' => $menu])
							     

							 @endforeach


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
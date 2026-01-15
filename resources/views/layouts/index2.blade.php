<!DOCTYPE html>

<?php

use Tutorialspoint\page;
use Tutorialspoint\contact_detail;
use Tutorialspoint\logos;

$pages = page::where('publish', 'yes')->paginate(6);

$contact  = contact_detail::first();
$logo  = logos::first();


?>


<html class="js_active vc_desktop vc_transform vc_transform vc_transform wf-roboto-n3-active wf-opensans-n6-active wf-active" lang="en-US">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="xmlrpc.php">





	<title>@yield('title') The Nigeria French Language Village</title>




	<link rel="alternate" type="application/rss+xml" title="" href="feed/">


	<link rel="alternate" type="application/rss+xml" title="" href="">


	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
			"ext": ".png",
			"source": {
				"concatemoji": "http:\/\/\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.19"
			}
		};
		! function(a, b, c) {
			function d(a) {
				var c, d, e, f = b.createElement("canvas"),
					g = f.getContext && f.getContext("2d"),
					h = String.fromCharCode;
				if (!g || !g.fillText) return !1;
				switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
					case "flag":
						return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
					case "diversity":
						return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
					case "simple":
						return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
					case "unicode8":
						return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
				}
				return !1
			}

			function e(a) {
				var c = b.createElement("script");
				c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}
			var f, g, h, i;
			for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
				c.DOMReady = !0
			}, c.supports.everything || (g = function() {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
				"complete" === b.readyState && c.readyCallback()
			})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>


	<script src="/asset_files/wp-emoji-release.js" type="text/javascript"></script>





	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>


	<link rel="stylesheet" id="events-manager-css" href="/asset_files/events_manager.css" type="text/css" media="all">

	<link rel="stylesheet" id="news-manager-front-css" href="/asset_files/front.css" type="text/css" media="all">

	<link rel="stylesheet" id="rs-plugin-settings-css" href="/asset_files/settings.css" type="text/css" media="all">


	<style id="rs-plugin-settings-inline-css" type="text/css">
		#rs-demo-id {}

		.tp-caption.fp_content_layer,
		.fp_content_layer {
			color: #ffc811;
			font-size: 24px;
			line-height: 36px;
			font-weight: 400;
			font-style: normal;
			font-family: Roboto;
			text-decoration: none;
			background-color: transparent;
			border-color: transparent;
			border-style: none;
			border-width: 0 0 0 0px;
			border-radius: 0 0 0 0px
		}

		.tp-caption.fh_button,
		.fh_button {
			color: rgba(255, 255, 255, 1);
			font-size: 16px;
			line-height: 16px;
			font-weight: 700;
			font-style: normal;
			font-family: Open Sans;
			text-decoration: none;
			background-color: rgba(0, 0, 0, 0);
			border-color: #ffffff;
			border-style: solid;
			border-width: 2 2 2 2px;
			border-radius: 30px 30px 30px 30px
		}

		.tp-caption.fh_button:hover,
		.fh_button:hover {
			color: #ffffff;
			text-decoration: none;
			background-color: #ffc811;
			border-color: #ffc811;
			border-style: solid;
			border-width: 2 2 2 2px;
			border-radius: 30px 30px 30px 30px;
			cursor: pointer
		}

		.factoryplus-arrow {
			background-color: transparent;
			border: 2px solid #fff;
			min-width: 55px;
			min-height: 55px;
			transition: 0.5s;
		}

		.factoryplus-arrow:hover {
			border-color: #ffc811;
			background-color: transparent;
		}

		.factoryplus-arrow:before {
			display: none;
		}

		.factoryplus-arrow:hover .fa {
			color: #ffc811;
		}

		.factoryplus-arrow .fa {
			color: #fff;
			font-size: 18px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			transition: 0.5s;
		}

		.factoryplus-arrow.tp-leftarrow .right-arrow {
			display: none;
		}

		.factoryplus-arrow.tp-rightarrow .left-arrow {
			display: none;
		}
	</style>

	<link rel="stylesheet" id="wp-fullcalendar-css" href="/asset_files/main.css" type="text/css" media="all">
	<link rel="stylesheet" id="jquery-ui-css-css" href="/asset_files/jquery-ui.css" type="text/css" media="all">
	<link rel="stylesheet" id="jquery-ui-css-theme-css" href="/asset_files/theme.htm" type="text/css" media="all">
	<link rel="stylesheet" id="factoryhub-fonts-css" href="/asset_files/css.css" type="text/css" media="all">
	<link rel="stylesheet" id="factoryhub-icons-css" href="/asset_files/factoryplus-icons.css" type="text/css" media="all">
	<link rel="stylesheet" id="flaticon-css" href="/asset_files/flaticon.css" type="text/css" media="all">
	<link rel="stylesheet" id="bootstrap-css" href="/asset_files/bootstrap.css" type="text/css" media="all">

	<link rel="stylesheet" id="fontawesome-css" href="/asset_files/font-awesome_002.css" type="text/css" media="all">
	<link rel="stylesheet" id="factoryhub-css" href="/asset_files/style.css" type="text/css" media="all">

	<style id="factoryhub-inline-css" type="text/css">
		.site-header .logo img {
			width: 386px;
			height: 45px;
		}

		.topbar {
			background-color: #f7f7f7;
		}

		.site-footer {
			background-color: #04192b;
		}

		.footer-widgets {
			background-color: #04192b;
		}

		/* Color Scheme */

		/*Background Color*/

		.main-background-color,
		.page-header.style-2 .page-button-link a:hover,
		.main-nav li li:hover>a:after,
		.main-nav ul.menu>li>a:before,
		.header-v2 .menu-item-button-link,
		.numeric-navigation .page-numbers:hover,
		.numeric-navigation .page-numbers.current,
		.project-nav-ajax .numeric-navigation .page-numbers.next:hover,
		.project-nav-ajax .numeric-navigation .page-numbers.next:focus,
		.primary-mobile-nav .menu-item-button-link a,
		.fh-btn,
		.fh-btn:hover,
		.fh-btn:focus,
		.fh-btn-2,
		.fh-btn-2:hover,
		.fh-btn-2:focus,
		.post-author .box-title:after,
		.blog-wrapper .entry-thumbnail a i,
		.blog-classic .blog-wrapper .entry-footer:before,
		.socials-share a:hover,
		.service .service-thumbnail a:before,
		.single-service blockquote:before,
		.single-project .single-project-title:before,
		.all-project ul.filter li:after,
		.all-project ul.filter li.active:after,
		.all-project ul.filter li:hover:after,
		.project-inner .project-summary,
		.project-inner .project-icon,
		.comments-title:after,
		.comment-reply-title:after,
		.comment-respond .form-submit .submit,
		.comment-respond .form-submit .submit:hover,
		.comment-respond .form-submit .submit:focus,
		.widget .widget-title:after,
		.woocommerce .added_to_cart,
		.woocommerce button.button,
		.woocommerce a.button,
		.woocommerce input.button,
		.woocommerce #respond input#submit,
		.woocommerce .added_to_cart:hover,
		.woocommerce button.button:hover,
		.woocommerce a.button:hover,
		.woocommerce input.button:hover,
		.woocommerce #respond input#submit:hover,
		.woocommerce .added_to_cart:focus,
		.woocommerce button.button:focus,
		.woocommerce a.button:focus,
		.woocommerce input.button:focus,
		.woocommerce #respond input#submit:focus,
		.woocommerce .added_to_cart.alt,
		.woocommerce button.button.alt,
		.woocommerce a.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit.alt,
		.woocommerce .added_to_cart.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce .added_to_cart.alt:focus,
		.woocommerce button.button.alt:focus,
		.woocommerce a.button.alt:focus,
		.woocommerce input.button.alt:focus,
		.woocommerce #respond input#submit.alt:focus,
		.woocommerce .shop-toolbar h2:after,
		.woocommerce .woocommerce-billing-fields h3:after,
		.woocommerce h3 label:after,
		.woocommerce h3.payment_heading:after,
		.woocommerce #order_review_heading:after,
		.woocommerce .cart_totals h2:after,
		.woocommerce .cross-sells h2:after,
		.woocommerce .col2-set h2:after,
		.woocommerce #order_review h3:after,
		.woocommerce #reviews #review_form .comment-form .form-submit input.submit,
		.woocommerce .related.products h2:after,
		.woocommerce .related.products .owl-controls .owl-buttons div:hover,
		.woocommerce form.checkout #payment div.place-order .button,
		.woocommerce .widget_price_filter .price_slider .ui-slider-handle,
		.woocommerce nav.woocommerce-pagination ul li .page-numbers:hover,
		.woocommerce nav.woocommerce-pagination ul li .page-numbers.current,
		.woocommerce-account form.login .button,
		.woocommerce-account form.register .button,
		.woocommerce-account form.login .button:hover,
		.woocommerce-account form.register .button:hover,
		.woocommerce-account form.login .button:focus,
		.woocommerce-account form.register .button:focus,
		.woocommerce-cart table.cart td.actions .coupon .button,
		.woocommerce-cart table.cart td.actions .coupon .button:hover,
		.woocommerce-cart table.cart td.actions .coupon .button:focus,
		.woocommerce-cart .wc-proceed-to-checkout a.button,
		.woocommerce-cart .wc-proceed-to-checkout a.button:hover,
		.woocommerce-cart .wc-proceed-to-checkout a.button:focus,
		.footer-widgets .fh-form-field .subscribe:after,
		div.fh-latest-project .item-project .project-summary,
		.owl-controls .owl-buttons div:hover,
		.main-nav div.menu>ul>li>a:before {
			background-color: #4fa226
		}

		.tp-caption.fh_button:hover,
		.fh_button:hover {
			background-color: #4fa226 !important;
		}

		/*Border Color*/

		.page-header.style-2 .page-button-link a:hover,
		.main-nav li li:hover>a:before,
		.project-nav-ajax .numeric-navigation .page-numbers.next:hover,
		.project-nav-ajax .numeric-navigation .page-numbers.next:focus,
		.service:hover .service-inner,
		.single-project .entry-thumbnail .owl-controls .owl-pagination .owl-page:hover span,
		.single-project .entry-thumbnail .owl-controls .owl-pagination .owl-page.active span,
		.service-sidebar .services-menu-widget li:hover a:after,
		.service-sidebar .services-menu-widget li.current-menu-item a:after,
		.woocommerce .related.products .owl-controls .owl-buttons div:hover,
		.woocommerce nav.woocommerce-pagination ul li .page-numbers:hover,
		.woocommerce nav.woocommerce-pagination ul li .page-numbers.current,
		.woocommerce ul.products li.product .add_to_cart_button,
		.woocommerce ul.products li.product .added_to_cart,
		.backtotop {
			border-color: #4fa226
		}

		.tp-caption.fh_button:hover,
		.fh_button:hover,
		.factoryplus-arrow:hover {
			border-color: #4fa226 !important;
		}

		/*Border Bottom*/

		.blog-grid .blog-wrapper:hover .entry-footer {
			border-color: #4fa226
		}

		/*Border Left*/

		blockquote {
			border-color: #4fa226
		}

		/*Border Top*/

		.main-nav ul ul ul {
			border-color: #4fa226
		}

		/*Color*/

		.socials a:hover,
		.main-color,
		.topbar .topbar-left i,
		.topbar .topbar-socials li:hover a,
		.page-header.style-2 .subtitle,
		.site-extra-text .item-2 i,
		.site-extra-text .social a:hover,
		.main-nav a:hover,
		.main-nav li li:hover.menu-item-has-children:after,
		.main-nav li li:hover>a,
		.main-nav ul.menu>li.current-menu-item>a,
		.main-nav ul.menu>li:hover>a,
		.main-nav ul.menu>li.current-menu-item>a:after,
		.main-nav ul.menu>li:hover>a:after,
		.header-v1 .menu-item-text i,
		.post-navigation a:hover,
		.portfolio-navigation .nav-previous a:hover,
		.portfolio-navigation .nav-next a:hover,
		.project-nav-ajax .numeric-navigation .page-numbers.next,
		.project-nav-ajax .numeric-navigation .page-numbers.next span,
		.primary-mobile-nav ul.menu li.current-menu-item>a,
		.entry-meta a:hover,
		.entry-meta .meta.views:hover,
		.entry-meta .fa,
		.blog-grid .blog-wrapper.col-4 .posted-on a,
		.single-service cite span,
		.project cite span,
		.metas i,
		.backtotop,
		.backtotop .fa,
		.backtotop:hover,
		.backtotop:hover .fa,
		.comment .comment-reply-link:hover,
		.widget_recent_comments li:hover>a,
		.widget_rss li:hover>a,
		.widget_categories li:hover,
		.widget_pages li:hover,
		.widget_archive li:hover,
		.widget_nav_menu li:hover,
		.widget_recent_entries li:hover,
		.widget_meta li:hover,
		ul.service-menu li:hover,
		.widget_categories li:hover:before,
		.widget_pages li:hover:before,
		.widget_archive li:hover:before,
		.widget_nav_menu li:hover:before,
		.widget_recent_entries li:hover:before,
		.widget_meta li:hover:before,
		ul.service-menu li:hover:before,
		.widget_categories li:hover>a,
		.widget_pages li:hover>a,
		.widget_archive li:hover>a,
		.widget_nav_menu li:hover>a,
		.widget_recent_entries li:hover>a,
		.widget_meta li:hover>a,
		ul.service-menu li:hover>a,
		.widget_categories li:hover>a:before,
		.widget_pages li:hover>a:before,
		.widget_archive li:hover>a:before,
		.widget_nav_menu li:hover>a:before,
		.widget_recent_entries li:hover>a:before,
		.widget_meta li:hover>a:before,
		ul.service-menu li:hover>a:before,
		.widget-about a:hover,
		.related-post .post-text .post-date i,
		.popular-post .post-text .post-date i,
		.service-sidebar .services-menu-widget li:hover a,
		.service-sidebar .services-menu-widget li.current-menu-item a,
		.service-sidebar .side-contact .fa,
		.woocommerce .star-rating span:before,
		.woocommerce div.product div.summary p.price>span,
		.woocommerce div.product div.summary p.price ins,
		.woocommerce #reviews #review_form .comment-form .comment-form-rating .stars a,
		.woocommerce .quantity .increase:hover,
		.woocommerce .quantity .decrease:hover,
		.woocommerce ul.products li.product .price>span,
		.woocommerce ul.products li.product .price ins,
		.woocommerce form.checkout table.shop_table td span.amount,
		.woocommerce table.shop_table td.product-subtotal,
		.woocommerce .widget_product_categories li:hover,
		.woocommerce .widget_product_categories li:hover a,
		.woocommerce .widget_product_categories li:hover a:before,
		.woocommerce ul.product_list_widget li>span.amount,
		.woocommerce ul.product_list_widget li ins,
		.woocommerce-wishlist table.shop_table tr td.product-stock-status span.wishlist-in-stock,
		.woocommerce-wishlist table.shop_table tbody .product-price>span,
		.woocommerce-wishlist table.shop_table tbody .product-price ins,
		.woocommerce-account form.login a.lost-password,
		.woocommerce-account form.register a.lost-password,
		.woocommerce-account .woocommerce-MyAccount-navigation ul li:hover a,
		.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,
		.woocommerce-cart a.remove:hover i,
		.site-footer .footer-copyright a,
		.footer-widgets .widget-title,
		.footer-widgets .menu li a:before,
		.footer-widgets .menu li:hover a,
		.footer-widgets .footer-widget-socials li:hover a,
		.latest-post .post-date,
		.footer-social a:hover,
		.fh-team div.team-member ul li a,
		.woocommerce ul.products li.product .add_to_cart_button,
		.woocommerce ul.products li.product .added_to_cart,
		.blog-wrapper.sticky .entry-title:before,
		.header-v4 .main-nav ul.menu>li:hover>a,
		.header-v4 .main-nav ul.menu>li:hover>a:after,
		.main-nav div.menu>ul>li.current_page_item>a,
		.main-nav div.menu>ul>li:hover>a,
		.main-nav div.menu>ul>li.current_page_item>a:after,
		.main-nav div.menu>ul>li:hover>a:after,
		.main-nav ul.menu>li.current-menu-parent>a:after,
		.main-nav ul.menu>li.current-menu-parent>a,
		.header-transparent .main-nav ul.menu>li:hover>a,
		.header-transparent .main-nav ul.menu>li:hover>a:after {
			color: #4fa226
		}

		.tp-caption.fp_content_layer,
		.fp_content_layer,
		.factoryplus-arrow:hover .fa {
			color: #4fa226 !important;
		}

		.fh-team .team-member,
		.blog-wrapper .entry-thumbnail a,
		.service .service-thumbnail a,
		.fh-service .entry-thumbnail a,
		.project-inner .pro-link,
		.fh-latest-post .item-latest-post .entry-thumbnail a {
			cursor: url(wp-content/themes/factoryhub/img/cursor.png ), auto;
		}

		body {
			font-family: "Roboto";
			font-size: 18px;
			letter-spacing: 0px;
			color: #262626;
		}

		h1 {
			font-family: Open Sans, Arial, sans-serif
		}

		h2 {
			font-family: Open Sans, Arial, sans-serif
		}

		h3 {
			font-family: Open Sans, Arial, sans-serif
		}

		h4 {
			font-family: Open Sans, Arial, sans-serif
		}

		h5 {
			font-family: Open Sans, Arial, sans-serif
		}

		h6 {
			font-family: Open Sans, Arial, sans-serif
		}
	</style>

	<link rel="stylesheet" id="factoryhub-shortcodes-css" href="/asset_files/frontend.css" type="text/css" media="all">
	<style id="factoryhub-shortcodes-inline-css" type="text/css">
		/*Background Color: */

		.fh-btn,
		.fh-btn:hover,
		.fh-btn:focus,
		.fh-btn-2,
		.fh-btn-2:hover,
		.fh-btn-2:focus,
		.main-background-color,
		.fh-section-title h2:before,
		.fh-contact-box .contact-box-title,
		.fh-latest-project ul.filter li:after,
		.fh-latest-project ul.filter li.active:after,
		.fh-latest-project ul.filter li:hover:after,
		.fh-latest-project.light-version ul.filter li:after,
		.fh-latest-project.light-version ul.filter li.active:after,
		.fh-latest-project.light-version ul.filter li:hover:after,
		.fh-project-carousel .owl-controls .owl-buttons div:hover,
		.fh-latest-post .item-latest-post .entry-thumbnail a i,
		.fh-icon-box:hover .fh-icon,
		.fh-icon-box-4 h4:after,
		.fh-icon-box-5 .fh-icon,
		.fh-icon-box-6 h4:after,
		.fh-testimonials-3 .owl-pagination .owl-page.active span,
		.fh-testimonials-3 .owl-pagination .owl-page:hover span,
		.fh-price-table.promoted .table-header,
		.fh-price-table:hover .table-header,
		.fh-price-table.promoted .table-content a,
		.fh-price-table:hover .table-content a,
		.fh-team.style-2:hover .socials:before {
			background-color: #4fa226
		}

		.fh-testimonials .owl-pagination .owl-page.active span,
		.fh-testimonials .owl-pagination .owl-page:hover span,
		.fh-latest-post .owl-pagination .owl-page.active span,
		.fh-latest-post .owl-pagination .owl-page:hover span,
		.fh-service .owl-pagination .owl-page.active span,
		.fh-service .owl-pagination .owl-page:hover span,
		.fh-testimonials-2 .owl-pagination .owl-page.active span,
		.fh-testimonials-2 .owl-pagination .owl-page:hover span {
			background-color: #4fa226 !important;
		}


		/*Border Color: */

		.fh-latest-post .item-latest-post:hover .line,
		.fh-icon-box:hover,
		.fh-testimonials .testi-content:hover,
		.fh-testimonials.style-2 .testi-content:hover,
		.fh-testimonials-2 .owl-pagination .owl-page.active span,
		.fh-testimonials-2 .owl-pagination .owl-page:hover span,
		.fh-testimonials-3 .owl-pagination .owl-page span,
		.fh-price-table.promoted .table-content,
		.fh-price-table:hover .table-content,
		.fh-price-table.promoted .table-content a,
		.fh-price-table:hover .table-content a,
		.fh-service .service-content:hover,
		.service-tabs .vc_tta-tabs-list li:hover a,
		.service-tabs .vc_tta-tabs-list li.vc_active a,
		.fh-testimonials .owl-pagination .owl-page span,
		.fh-latest-post .owl-pagination .owl-page span,
		.fh-service .owl-pagination .owl-page span,
		.service-tabs .vc_tta-tabs-list li:hover a,
		.service-tabs .vc_tta-tabs-list li.vc_active a,
		.fh-icon-box-6 ul li:before {
			border-color: #4fa226
		}

		/* Border Color */
		.woocommerce span.ribbons:before {
			border-top-color: #4fa226
		}

		.woocommerce span.ribbons:before {
			border-left-color: #4fa226
		}

		/*Color: */

		.main-color,
		.fh-project-carousel .link,
		.fh-latest-post .item-latest-post .entry-meta a,
		.fh-icon-box .fh-icon,
		.fh-icon-box-2 .sub-title,
		.fh-icon-box-2 .fh-icon,
		.fh-icon-box-3 .fh-icon,
		.fh-icon-box-4 .fh-icon,
		.fh-icon-box-4 .icon-box-link,
		.fh-icon-box-6 .fh-icon,
		.fh-counter .fh-icon,
		.fh-counter.style-2 .fh-icon,
		.fh-testimonials .testi-content:hover i,
		.fh-testimonials .testi-job,
		.fh-testimonials-2 .testi-job,
		.fh-testimonials-3 .testi-job,
		.fh-testimonials-3 .testi-star .fa,
		.fh-price-table .table-content a,
		.fh-service-list ul li i,
		.fh-team ul li:hover a,
		.fh-team .job,
		.mejs-container .mejs-controls .mejs-time span {
			color: #4fa226
		}

		.about-btn a,
		.service-tabs .vc_tta-tabs-list li:hover a,
		.service-tabs .vc_tta-tabs-list li.vc_active a,
		.fh-accordion.style-2.vc_tta-accordion .vc_tta-panel-title a:hover {
			color: #4fa226 !important;
		}
	</style>
	<link rel="stylesheet" id="js_composer_front-css" href="/asset_files/js_composer.css" type="text/css" media="all">
	<link rel="stylesheet" id="wpmu-animate-min-css-css" href="/asset_files/animate.css" type="text/css" media="all">



	<script type="text/javascript" src="/asset_files/assets/vendors/jquery.min.js"></script>


	<script src="/asset_files/assets/owlcarousel/owl.carousel.js"></script>

	<script type="text/javascript" src="/asset_files/jquery-migrate.js"></script>

	<script type="text/javascript" src="/asset_files/core.js"></script>
	<script type="text/javascript" src="/asset_files/widget.js"></script>
	<script type="text/javascript" src="/asset_files/position.js"></script>
	<script type="text/javascript" src="/asset_files/mouse.js"></script>
	<script type="text/javascript" src="/asset_files/sortable.js"></script>
	<script type="text/javascript" src="/asset_files/datepicker.js"></script>
	<script type="text/javascript" src="/asset_files/menu.js"></script>
	<script type="text/javascript" src="/asset_files/wp-a11y.js"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var uiAutocompleteL10n = {
			"noResults": "No search results.",
			"oneResult": "1 result found. Use up and down arrow keys to navigate.",
			"manyResults": "%d results found. Use up and down arrow keys to navigate."
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="/asset_files/autocomplete.js"></script>
	<script type="text/javascript" src="/asset_files/resizable.js"></script>
	<script type="text/javascript" src="/asset_files/draggable.js"></script>
	<script type="text/javascript" src="/asset_files/button.js"></script>
	<script type="text/javascript" src="/asset_files/dialog.js"></script>


	<script type="text/javascript">
		/* <![CDATA[ */
		var EM = {
			"ajaxurl": "http:\/\/\/wp-admin\/admin-ajax.php",
			"locationajaxurl": "http:\/\/\/wp-admin\/admin-ajax.php?action=locations_search",
			"firstDay": "0",
			"locale": "en",
			"dateFormat": "dd\/mm\/yy",
			"ui_css": "http:\/\/\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui.min.css",
			"show24hours": "0",
			"is_ssl": "",
			"bookingInProgress": "Please wait while the booking is being submitted.",
			"tickets_save": "Save Ticket",
			"bookingajaxurl": "http:\/\/\/wp-admin\/admin-ajax.php",
			"bookings_export_save": "Export Bookings",
			"bookings_settings_save": "Save Settings",
			"booking_delete": "Are you sure you want to delete?",
			"bb_full": "Sold Out",
			"bb_book": "Book Now",
			"bb_booking": "Booking...",
			"bb_booked": "Booking Submitted",
			"bb_error": "Booking Error. Try again?",
			"bb_cancel": "Cancel",
			"bb_canceling": "Canceling...",
			"bb_cancelled": "Cancelled",
			"bb_cancel_error": "Cancellation Error. Try again?",
			"txt_search": "Search",
			"txt_searching": "Searching...",
			"txt_loading": "Loading...",
			"event_reschedule_warning": "Are you sure you want to reschedule this recurring event? If you do this, you will lose all booking information and the old recurring events will be deleted.",
			"event_detach_warning": "Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.",
			"delete_recurrence_warning": "Are you sure you want to delete all recurrences of this event? All events will be moved to trash.",
			"disable_bookings_warning": "Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have",
			"booking_warning_cancel": "Are you sure you want to cancel your booking?"
		};
		/* ]]> */
	</script>



	<script type="text/javascript" src="/asset_files/events-manager.js"></script>

	<script type="text/javascript" src="/asset_files/jquery_002.js"></script>

	<script type="text/javascript" src="/asset_files/jquery_003.js"></script>


	<script type="text/javascript" src="/asset_files/selectmenu.js"></script>




	<script type="text/javascript" src="/asset_files/main.js"></script>
	<!--[if lt IE 9]>
<script type='text/javascript' src='wp-content/themes/factoryhub/js/html5shiv.min.js?ver=3.7.2'></script>
<![endif]-->
	<!--[if lt IE 9]>
<script type='text/javascript' src='wp-content/themes/factoryhub/js/respond.min.js?ver=1.4.2'></script>
<![endif]-->
	<link rel="https://api.w.org/" href="wp-json/">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 4.5.19">
	<link rel="canonical" href="">
	<link rel="shortlink" href="">
	<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2F%2F">
	<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2F%2F&amp;format=xml">



	<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress.">
	<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
	<meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">



	<script type="text/javascript" src="/https:///wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>

	<script type="text/javascript" src="/wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>


	<script type="text/javascript" src="/https:///wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>


	<script type="text/javascript">
		function setREVStartSize(e) {
			try {
				var i = jQuery(window).width(),
					t = 9999,
					r = 0,
					n = 0,
					l = 0,
					f = 0,
					s = 0,
					h = 0;
				if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
						f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
					}), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
					var u = (e.c.width(), jQuery(window).height());
					if (void 0 != e.fullScreenOffsetContainer) {
						var c = e.fullScreenOffsetContainer.split(",");
						if (c) jQuery.each(c, function(e, i) {
							u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
						}), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
					}
					f = u
				} else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
				e.c.closest(".rev_slider_wrapper").css({
					height: f
				})
			} catch (d) {
				console.log("Failure at Presize of Slider:" + d)
			}
		};
	</script>



	<style type="text/css" data-type="vc_shortcodes-custom-css">
		.vc_custom_1549569823241 {
			padding-top: 45px !important;
			padding-bottom: 45px !important;
			background-color: #00a022 !important;
		}

		.vc_custom_1493194014927 {
			padding-top: 75px !important;
			padding-bottom: 80px !important;
			background-color: #04192b !important;
		}

		.vc_custom_1549613157949 {
			margin-top: 50px !important;
		}

		.vc_custom_1549569841401 {
			margin-top: 50px !important;
			padding-top: 50px !important;
			padding-bottom: 30px !important;
			background-color: #00a022 !important;
		}

		.vc_custom_1549490752347 {
			margin-bottom: 20px !important;
		}
	</style>

	<link rel="stylesheet" href="/asset_files/css_002.css" media="all">


	<noscript>
		<style type="text/css">
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>



</head>

<body class="home page page-id-2610 page-template page-template-template-homepage page-template-template-homepage-php  no-sidebar header-sticky hide-topbar-mobile blog-classic header-v1 footer- wpb-js-composer js-comp-ver-5.4.5 vc_responsive">

	<div id="page" class="hfeed site">

		<div id="topbar" class="topbar">
			<div class="container">
				<div class="row">
				</div>
			</div>
		</div>


		<div id="fh-header-minimized" class="fh-header-minimized fh-header-v1" style="height: 75px;"></div>



		<?php if (session('error')) {   ?>
			<script>
				alert('error okay')
			</script>

		<?php  } ?>

		@include('menu2')



		<!-- #masthead -->


		<div id="content" class="site-content">

			<div class="container-fluid">

				<div class="row">

					@yield('slidder')


					@yield('content')

				</div>

				<!-- .row -->
			</div> <!-- .container -->
		</div><!-- #content -->


		<footer id="colophon" class="site-footer">
			<div class="container">
				<div class="row">
					<div class="footer-copyright col-md-6 col-sm-12 col-sx-12">
						<div class="site-info">
							Copyright © {{date('Y')}} - The Nigeria French Language Village. All Rights Reserved </div><!-- .site-info -->
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 text-right">
						<div class="socials footer-social">

							<a href="<?php echo  $contact->facebook;   ?>" target="_blank"><i class="fa fa-facebook"></i></a>


							<!----
			<a href="/https://twitter.com/coop" target="_blank"><i class="fa fa-twitter"></i></a>
			
			<a href="/https://www.youtube.com/channel/UCBTSjSd6463WxRQal8pqklw" target="_blank">
			
			
			<i class="fa fa-youtube"></i></a>
			
			
			
			<a href="/https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>	
			---->

						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<div id="modal" class="modal fade" tabindex="-1" aria-hidden="true">
		<div class="item-detail">
			<div class="modal-dialog woocommerce">
				<div class="modal-content product">
					<div class="modal-header">
						<button type="button" class="close fh-close-modal" data-dismiss="modal">×<span class="sr-only"></span></button>
					</div>
					<div class="modal-body"></div>
				</div>
			</div>
		</div>
	</div>



	<div class="primary-mobile-nav" id="primary-mobile-nav" role="navigation">
		<a href="/#" class="close-canvas-mobile-panel">
			×
		</a>


		<ul id="menu-top" class="menu">






			<li> <a style="" href="/"> HOME </a> </li>


			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-76"> <a style="cursor: pointer" title="">About Us</a>



				<ul class="sub-menu">
					<li class="menu-back">Back</li>
					<li class="menu-parent-items">About Us</li>


					<li class="active"><a href="/page/5/history" title="">Our History</a></li>





				</ul>
				<!-- /.sub-menu -->
			</li>


			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77"> <a style="cursor: pointer" title="">Admission / Registration </a>
				<ul class="sub-menu">
					<li class="menu-back">Back</li>
					<li class="menu-parent-items">Admission / Registration</li>

					<li class="active"><a href="http://www.portal.frenchvillage.edu.ng/register" title="">Application Form </a></li>
					<li><a href="http://www.portal.frenchvillage.edu.ng/login" title="">NFLV Portal</a></li>




				</ul>
				<!-- /.sub-menu -->
			</li>




			<li> <a href="http://www.portal.frenchvillage.edu.ng/paynow" class="">Pay Tuition </a> </li>


			<li> <a href="http://www.portal.frenchvillage.edu.ng/confirm_registration_code" class="">Confirm Registration Payment </a> </li>



			<li> <a href="http://www.portal.frenchvillage.edu.ng/confirmpayment" class="">Check Payment Status </a> </li>


			<li> <a href="/event">EVENT </a> </li>


			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77">

				<a style="cursor: pointer" title="">Programmes</a>


				<ul class="sub-menu">

					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77"> <a> Language Immersion Programme (LIP) </a>

						<ul class="sub-menu">



							<li><a href="/page/10/Universities" title="">Universities</a></li>


							<li><a href="/page/11/Colledge_of_Education" title="">College of Education </a></li>


						</ul>


					</li>


					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77"> <a style="cursor: pointer"> FSP/CONSULT Programmes</a>

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

			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77"> <a style="cursor: pointer" title="">Department</a>
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




			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77"> <a style="cursor: pointer" title="">Resources</a>
				<ul class="sub-menu">

					<li><a href="{{ asset('resources/Teaching Resources-NFLV.pdf')  }}" title="">Teaching Resources</a></li>
					<li><a href="/page/9/Anthem" title="">Village Anthem</a></li>
					<!--- <li><a href="" title="">News Letter</a></li> ---->
				</ul>
				<!-- /.sub-menu -->
			</li>






			<li> <a href="http://www.portal.frenchvillage.edu.ng/login"> Eportal </a> </li>

			<li> <a href="https://frenchvillage.edu.ng:2096/" style="" title=""> Webmail </a> </li>



			<li> <a href="/gallery_view" style="" title=""> Gallery </a> </li>

			<li> <a href="/page/16/faq" style="" title=""> FAQ </a> </li>









		</ul>


		<!---
		<ul id="menu-top" class="menu">
		
		<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2610 current_page_item menu-item-2668"><a href="">Home</a></li>
		
		
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-76">

<span class="toggle-children "><i class="fa fa-angle-right" aria-hidden="true"></i></span><a href="about-us/" class="dropdown-toggle">About Us</a>



<ul class="sub-menu"><li class="menu-back">Back</li><li class="menu-parent-items">About Us</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739"><a href="organisations-profile/" class="dropdown-toggle">Organisation’s Profile</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="origin-and-early-history/" class="dropdown-toggle">Brief History</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="our-vision/" class="dropdown-toggle">Our Vision</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="our-mission/" class="dropdown-toggle">Our Mission</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="pic-members/" class="dropdown-toggle">PIC Members</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="pic-board/" class="dropdown-toggle">Board Members</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="our-services/">Our Services</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a target="_blank" href="/http://apex.oracle.com/pls/apex/f?p=9000000:1001:0:::::">CoopCount</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"><a href="coop-unionssocieties/">Coop Unions</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-431"><span class="toggle-children "><i class="fa fa-angle-right" aria-hidden="true"></i></span><a href="/#" class="dropdown-toggle">Media</a>
<ul class="sub-menu"><li class="menu-back">Back</li><li class="menu-parent-items">Media</li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="photo-gallery/" class="dropdown-toggle">Photo Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-430"><a href="video-gallery/" class="dropdown-toggle">Video Gallery</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-435"><a href="resource-links/" class="dropdown-toggle">Resource Links</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-425"><a href="category/latest-news/" class="dropdown-toggle">Latest News</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-464"><span class="toggle-children "><i class="fa fa-angle-right" aria-hidden="true"></i></span><a href="/#" class="dropdown-toggle">Publications</a>
<ul class="sub-menu"><li class="menu-back">Back</li><li class="menu-parent-items">Publications</li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-434"><a href="category/speeches/" class="dropdown-toggle">Speeches</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-433"><a href="category/cooplight-news/" class="dropdown-toggle">Cooplight News</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2779"><a target="_blank" href="_Cooperatives-Societies-Law.pdf" class="dropdown-toggle">By-law</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2726"><a href="information-on-formation-of-a-cooperative-society/">Form A Coop</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="contact-us/">Contact Us</a></li>
</ul>
		
		---->

	</div>





	<div id="off-canvas-layer" class="off-canvas-layer"></div>
	<a id="scroll-top" class="backtotop" href="/#page-top">
		<i class="fa fa-angle-up"></i>
	</a>




	<script>
		window._popup_data = {
			"ajaxurl": "http:\/\/\/wp-admin\/admin-ajax.php",
			"do": "get_data",
			"ajax_data": {
				"orig_request_uri": "\/"
			}
		};
	</script>



	<script type="text/javascript">
		function revslider_showDoubleJqueryError(sliderID) {
			var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
			errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
			errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
			errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
			errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
			jQuery(sliderID).show().html(errorMessage);
		}
	</script>



	<link rel="stylesheet" id="font-awesome-css" href="/asset_files/font-awesome.css" type="text/css" media="all">


	<script type="text/javascript" src="/asset_files/plugins_002.js"></script>
	<script type="text/javascript">
		/* <![CDATA[ */
		var factoryhub = {
			"factoryhub_back": "Back",
			"direction": ""
		};
		var factoryhubShortCode = {
			"post": {
				"post-slider-5de23be02c7e9": {
					"autoplay": 5000,
					"columns": "4"
				}
			}
		};
		/* ]]> */
	</script>










	<script type="text/javascript" src="/asset_files/scripts.js"></script>
	<script type="text/javascript" src="/asset_files/public.js"></script>
	<script type="text/javascript" src="/asset_files/wp-embed.js"></script>
	<script type="text/javascript" src="/asset_files/webfontloader.js"></script>
	<script type="text/javascript">
		WebFont.load({
			google: {
				families: ['Roboto:300:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai', 'Open Sans:600:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai']
			}
		});
	</script>
	<script type="text/javascript" src="/asset_files/js_composer_front.js"></script>



	<script type="text/javascript" src="/asset_files/frontend.js"></script>





	<script>
		$('.owl-carousel').owlCarousel({
			rtl: false,
			loop: true,
			margin: 10,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		})
	</script>


	<script src="/asset_files/bootstrap.js"></script>
	<div id="wp-a11y-speak-polite" role="status" aria-live="polite" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
	<div id="wp-a11y-speak-assertive" role="alert" aria-live="assertive" aria-relevant="additions text" aria-atomic="true" class="screen-reader-text wp-a11y-speak-region"></div>
</body>

</html>
<!-- Dynamic page generated in 0.395 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2019-11-30 10:52:32 -->
<!-- Compression = gzip -->
<!-- super cache -->
<?php header("Access-Control-Allow-Origin: *"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//anonpress.org/lib/ace-responsive-menu/ace-responsive-menu.css?v=202004010109">
<?php require_once 'jquery.php'; ?>
<nav id="menubar" style="display: none;">
	<div class="menu-toggle">
		<h3><a href="//anonpress.org">The Anonymous Press</a></h3>
		<button type="button" id="menu-btn">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<ul id="ace" class="ace-responsive-menu" data-menu-style="horizontal">
		<li><a href="//anonpress.org"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		<li><a>Online Store</a>
			<ul>
				<li><a href="https://anonpress.org/store">Store Home</a>
				<li><a href="https://anonpress.org/store/mini">Mini Edition</a>
				<li><a href="https://anonpress.org/store/camo">Mini Edition – Camo</a>
				<li><a href="https://anonpress.org/store/soft">First Edition – Softcover</a>
				<li><a href="https://anonpress.org/store/study">Study Edition – Hardcover</a>
				<li><a href="https://anonpress.org/store/wo">Study Edition – Softcover</a>
				<li><a href="https://anonpress.org/store/ap-index">AP Index</a>
				<li><a href="https://anonpress.org/store/xl">Extra Large Print</a>
				<li><a href="https://anonpress.org/store/concordance">Concordance</a>
				<li><a href="https://anonpress.org/brochure_request/">Brochure Request</a>
			</ul>
		<li><a>Online Books</a>
			<ul>
				<li><a href="https://anonpress.org/bb/assent.htm">Modern Text – searchable</a>
				<li><a href="https://anonpress.org/manu/assent.htm">Original Manuscript Text</a>
				<li><a href="https://anonpress.org/bbindex">Index to Alcoholics Anonymous</a>
			</ul>
		<li><a>AA Info</a>
			<ul>
				<li><a href="https://anonpress.org/phone">AA Intergroup Phone Numbers</a>
				<li><a href="https://anonpress.org/faq">AA Frequently Asked Questions</a>
				<li><a href="https://anonpress.org/translate">Translations for finding AA</a>
			</ul>
		<li><a>Downloads</a>
			<ul>
				<li><a>for Windows</a>
					<ul>
						<li><a href="https://anonpress.org/choices">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="https://anonpress.org/screensaver">AA Quotes Screensaver</a>
						<li><a href="https://anonpress.org/sobrietycheck">Sobriety Calculator</a>
					</ul>
				<li><a href="https://anonpress.org/choices/mac.htm">for Macintosh</a>
				<li><a href="https://anonpress.org/choices/unix.htm">for Linux</a>
				<li><a>for iPhone</a>
					<ul>
						<li><a href="https://anonpress.org/choices/iphone.htm">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="https://anonpress.org/vore"><i>The Varieties of Religious Experience</i></a>
					</ul>
				<li><a href="https://anonpress.org/android">for Android</a>
				<li><a>for Kindle</a>
					<ul>
						<li><a href="https://anonpress.org/choices/kindle.htm">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="https://anonpress.org/vore"><i>The Varieties of Religious Experience</i></a>
					</ul>
				<li><a href="https://anonpress.org/mobile">for BlackBerry</a>
				<li><a href="https://anonpress.org/choices">for everything else</a>
			</ul>
		<li class="mobileonly"><a data-email>Contact Us</a>
		<li class="storeonly"><a href="https://anonpress.org/store/index.php?route=account/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		<li><a href="https://anonpress.org/store/index.php?route=checkout/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
	</ul>
</nav>
<script>
	var el = document.createElement('script');
	el.onload = function() {
		$('#ace').aceResponsiveMenu({
			resizeWidth: window.location.href.indexOf("anonpress.net") !== -1 ? "965" : "840",
			animationSpeed: "fast"
		});
		$("nav#menubar").css("display", "");

		// Store-specific
		$("#top-nav").css("display", "none");
		$("head").append("<style>@media screen and (max-width:965px){.page_header>.container{top:2em}.head-mobile-nav{display:none !important}.col-xs-8{width:100% !important;text-align: center;border-bottom: 1px solid #ccc;padding-bottom: 0.5em}}</style>");

		// Force redraw
		$(window).trigger('resize');
	};
	el.src = '//anonpress.org/lib/ace-responsive-menu/ace-responsive-menu-min.js';
	document.head.append(el);
</script>

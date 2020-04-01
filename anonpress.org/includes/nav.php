<?php header("Access-Control-Allow-Origin: *"); ?>
<!--[if lte IE 8]>
<div style="width: 100%; height: 25%; background-color: yellow; font-size: 18pt;">This website does not support your
	version of Internet Explorer. Please update Internet Explorer or download a newer browser such as <a
		href="https://www.google.com/chrome/">Chrome</a> or <a
		href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a>.
</div>
<![endif]-->
<!--[if gt IE 8]><!-->
<?php require_once('ace-responsive-menu.php'); ?>
<nav>
	<div class="menu-toggle">
		<h3>The Anonymous Press</h3>
		<button type="button" id="menu-btn">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<ul id="ace" class="ace-responsive-menu" data-menu-style="horizontal">
		<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
		<li><a>Online Store</a>
			<ul>
				<li><a href="https://anonpress.net">Store Home</a>
				<li><a href="https://anonpress.net/mi">Mini Edition</a>
				<li><a href="https://anonpress.net/camo">Mini Edition – Camo</a>
				<li><a href="https://anonpress.net/soft">First Edition – Softcover</a>
				<li><a href="https://anonpress.net/study">Study Edition – Hardcover</a>
				<li><a href="https://anonpress.net/wo">Study Edition – Softcover</a>
				<li><a href="https://anonpress.net/in">AP Index</a>
				<li><a href="https://anonpress.net/xl">Extra Large Print</a>
				<li><a href="https://anonpress.net/conc">Concordance</a>
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
		<li class="storeonly"><a href="/myaccount.asp"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
		<li><a href="https://anonpress.net/view_cart.asp"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a>
	</ul>
</nav>
<script>$("#ace").aceResponsiveMenu({
		resizeWidth: '840',
		animationSpeed: 'fast'
	});</script>
<!--<![endif]-->
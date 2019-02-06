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
				<li><a href="https://anonpress.net/product.asp?itemid=18">Bargain Bin – <span style="color: grey !important;">empty</span></a>
				<li><a href="https://anonpress.org/brochure_request/">Brochure Request</a>
			</ul>
		<li><a>Online Books</a>
			<ul>
				<li><a href="/bb/assent.htm">Modern Text – searchable</a>
				<li><a href="/manu/assent.htm">Original Manuscript Text</a>
				<li><a href="/bbindex">Index to Alcoholics Anonymous</a>
			</ul>
		<li><a>AA Info</a>
			<ul>
				<li><a href="/phone">AA Intergroup Phone Numbers</a>
				<li><a href="/faq">AA Frequently Asked Questions</a>
				<li><a href="/translate">Translations for finding AA</a>
			</ul>
		<li><a>Downloads</a>
			<ul>
				<li><a>for Windows</a>
					<ul>
						<li><a href="/choices">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="/screensaver">AA Quotes Screensaver</a>
						<li><a href="/sobrietycheck">Sobriety Calculator</a>
					</ul>
				<li><a href="/choices/mac.htm">for Macintosh</a>
				<li><a href="/choices/unix.htm">for Linux</a>
				<li><a>for iPhone</a>
					<ul>
						<li><a href="/choices/iphone.htm">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="/vore"><i>The Varieties of Religious Experience</i></a>
					</ul>
				<li><a href="/android">for Android</a>
				<li><a>for Kindle</a>
					<ul>
						<li><a href="/choices/kindle.htm">Text of <i>Alcoholics Anonymous</i></a>
						<li><a href="/vore"><i>The Varieties of Religious Experience</i></a>
					</ul>
				<li><a href="/mobile">for BlackBerry</a>
				<li><a href="/choices">for everything else</a>
			</ul>
		<li><a href="https://anonpress.net/view_cart.asp">Check cart</a>
	</ul>
</nav>
<script>$("#ace").aceResponsiveMenu({
	resizeWidth: '840',
	animationSpeed: 'fast'
});</script>
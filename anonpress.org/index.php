<?php 
chdir('lib/littlepoll');
include('lib/littlepoll/lp_source.php');
chdir('../..') ?>
<!DOCTYPE html>
<html lang="en-US" class="halfline">
<title>The Anonymous Press</title>
<meta charset="UTF-8">
<meta name="description" content="Alcoholics Anonymous Books, Software, Phone Numbers, FAQ & AA Big Book Indexes">
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=400, initial-scale=1">
<?php include('includes/tooltip.php'); require_once('includes/style.php'); require_once('includes/mailto.php'); ?>
<style>
	h1 {
		margin-left: 5%;
		max-width: 90%;
	}
	header form {
		margin-right: 5%;
	}
	button {
		padding: 0.5em 1em;
		font: inherit;
		border-radius: 9px;
		border: 1px solid #ccc;
		color: #333;
		background: linear-gradient(to bottom, #fff 0%,#f2f2f2 50%);
	}
	header button {
		font-size: 18pt;
	}
	button:hover {
		cursor: pointer;
		color: #33f;
	}
	button:active {
		background: linear-gradient(to top, #fff 0%,#f2f2f2 50%);
	}
	body>section {
		margin-left: 10%;
		margin-right: 10%;
	}

	#randquote {
		max-width: 615px;
	}
	#randquote>h2 {
		font-size: large;
		color: #808040;
		margin: 0;
		font-weight: inherit;
	}
	#randquote>h2:after {
		content: ':';
	}
	#randquote blockquote {
		margin: 0 1.5em;
	}
	#randquote p {
		margin: 0;
	}
	#randquote cite {
		font-size: small;
		color: #666;
		font-style: normal;
		margin-left: 0.5em;
	}

	.flex {
		display: flex;
		justify-content: space-evenly;
		flex-wrap: wrap;
		align-items: flex-start;
	}
	div.flex>section, .shadowbox {
		border: thin outset #ccc;
		border-radius: 0.5em;
		box-shadow: 2px 2px 5px #333;
		padding: 0.5em;
		margin: 2px 5px 5px 2px;
		position: relative;
		background-color: rgba(255,255,255,187);
	}
	div.flex>section {
		min-width: 350px;
		position: relative;
		margin-top: 36pt;
		padding: 1em;
	}
	div.flex>section>h2 {
		position: absolute;
		top: -26pt;
		left: 0;
		font-size: 24pt;
		text-transform: uppercase;
		margin: 0;
		color: #808040;
		font-weight: 200;
	}
	div.flex>section>h2:after {
		content: ':';
	}
	.bbempty {
		font-size: small;
		color: grey;
		white-space: nowrap;
	}
	.colon:after {
		content: ':';
	}
	address {
		font-feature-settings: "lnum";
		font-style: normal;
	}
	@media screen and (max-width: 560px) {
		div.optional.flex {
			display: block;
			text-align: center;
		}
	}
	ul.polls *:not(h4)>a {
		color: #666;
	}
	ul.polls>li>ul>li {
		margin-bottom: 1em;
	}
	ul.links li.center {
		text-align: center;
		letter-spacing: 0.06em;
	}
</style>
<?php require_once('includes/nav.php'); ?>
<header>
	<div class="flex" style="justify-content: space-between; align-items: center;">
		<h1><img src="/assets/The-Anonymous-Press-green.gif" alt="The Anonymous Press"></h1>
		<form data-email><button>Contact Us</button></form>
	</div>
</header>
<section id="randquote">
	<h2>Random Big Book Quote</h2>
	<blockquote>
		<?php include('includes/quote.php'); ?>
		<!-- TODO: More quotes -->
	</blockquote>
</section>
<div class="flex">
	<section>
		<h2>Site Links</h2>
		<a href="https://anonpress.net" class="right"><img src="/assets/FEpicture.png" alt=""></a>
		<ul class="links">
			<li><h4><a href="https://anonpress.net">Book store</a></h4>
				<ul>
					<li><a class="strong" href="https://anonpress.net">Order books here&#8239;»</a>
					<li><a href="https://anonpress.net/product.asp?itemid=18">Bargain bin</a><span class="bbempty"> – empty</span>
					<li><a href="/brochure_request">Brochure request</a>
				</ul>
			<li><h4 class="weak inline"><a href="/choices">Software</a></h4>
				<span class="spacer">/</span>
				<a href="/e-aa">e-AA</a>
			<li><h4 class="weak clear"><a href="/phone">AA Intergroup Phone Numbers</a></h4>
			<li><h4 class="weak"><a href="/bb/assent.htm" class="colon">Online Books</a></h4>
				<ul>
					<li><a href="bb/assent.htm">Modern</a>
						<span class="spacer">/</span>
						<a href="/Manu/assent.php">Manuscript</a>
						<span class="spacer">/</span>
						<a href="/bbindex">Big Book<sup>®</sup> Index</a>
				</ul>
			<li><h4 class="weak"><a href="/faq">AA Questions &amp; FAQ</a></h4>
				<ul>
					<li><span class="def">Frequently</span> <span class="def">Asked</span> <span class="def">Questions</span> about AA
				</ul>
			<li><h4 class="weak"><a href="/translate">Translation project</a></h4>
				<ul>
					<li class="small">Help finding meetings abroad
				</ul>
			<li><h4 class="weak"><a href="/musts">The "musts" in The Big Book</a></h4>
				<ul>
					<li class="small">People keep asking us for this. So…
				</ul>
			<li><h4 class="weak"><a href="/spencer">The Spencer Misquotation</a></h4>
				<ul>
					<li class="small">The research proving Herbert Spencer<br>did not write the quote about avoiding<br>"contempt prior to investigation"
				</ul>
		</ul>
	</section>
	<section>
		<h2>Downloads</h2>
		<ul class="links">
			<li><h4><a href="/choices">The text of <i>Alcoholics Anonymous</i></a></h4>
				<ul><li>Available for:
					<ul>
						<li><a href="/choices">Windows</a>
						<li><a href="/choices/mac.htm">Mac</a>
						<li><a href="/choices/android.htm">Android</a>
						<li><a href="/choices/iphone.htm">iPhone</a>
							<span class="spacer">/</span>
							<a href="/choices/ipad.htm">iPad</a>
						<li><a href="/choices/windowsmobile.htm">Windows Phone</a>
						<li><a href="/choices/blackberry.htm">Blackberry</a>
						<li><a href="/choices/kindle.htm">Kindle</a>
						<li><a href="/choices/epub.htm">ePub</a>
						<li style="padding-left: 1em;"><a class="strong" href="/choices">&amp; more…</a>
					</ul>
				</ul>
			<li><h4 class="weak"><a href="/sobrietycheck">SobrietyCheck</a></h4>
				<ul><li class="small">Sobriety counter for Windows</ul>
			<li><h4 class="weak">Windows Desktop <a href="/quotegadget">Quote Gadget</a></h4>
			<li><h4 class="weak"><a href="/bbindex">Big Book<sup>®</sup> Index</a></h4>
			<li><h4 class="weak"><a href="/vore">The Varieties of Religious Experience</a></h4>
		</ul>
	</section>
	<section>
		<h2>Poll</h2>
		<div style="max-width: 350px;">
			<div class="shadowbox halfline">
				<?=$question?>
			</div>
			<div style="margin-left: 77px;">
				<?php if($votingstep==1) { echo($step1str); } 
					if($votingstep==2) { echo($step2str); } 
					if($votingstep==3) { echo($step3str); }
				?></form> <!-- end tag for unclosed form generated by littlepoll -->
			</div>
			<div style="text-align: right; padding-right: 8px;">
				Total votes: <?=$totalvotes?>
			</div>
			<hr> <!-- TODO: better -->
			<ul class="links polls">
				<li><h4 class="weak"><a class="colon" href="/polls/results.htm">Previous polls</a></h4>
					<ul>
						<li><a href="polls/results.htm#24" title="Very Optimistic…">Do you think you will drink again?</a>
						<li><a href="polls/results.htm#19" title="Probably…">Do you think believe newcomers should avoid dating?</a>
						<li><a href="polls/results.htm#17" title="We disagree…">Do you think drug addiction and alcoholism are the same thing?</a>
						<li><a href="polls/results.htm#23" title="Yeah, probably…">Is the next drink a choice if you have been sober a while? </a>
						<li><a href="polls/results.htm#1" title="Most people think it is OK…">Is it appropriate to use the Lord's Prayer in meetings?</a>
						<!-- TODO: popups -->
					</ul>
				<li class="center"><a href="/polls/results.htm">More poll results...</a>
				<li class="center"><a href="/polls/question.php">Suggest a poll question</a>
				<li class="center"><a title="Sometimes we get curious about how the fellowship beyond our homegroup feels about stuff. Since we get AA folks visiting from all over we thought we might try getting a sense for how people feel about a few different things. The results are not scientific but we do think they give a rough idea of the sentiment of the fellowship.">About this poll</a>
			</ul>
		</div>
	</section>
	<section>
		<h2>Info</h2>
		<div class="optional flex" style="justify-content: space-between; align-items: center;">
			<ul class="links" style="max-width: 35em; margin-right: 2em;">
				<li><h4 class="weak" style="margin: 0;"><a href="/info/local_meetings.htm">Meeting information</a></h4>
					<ul><li class="small">How to find an AA meeting.</li></ul>
				<li><h4 class="weak"><a href="/faq">AA FAQ</a></h4>
					<ul><li class="small">Answers to most of the questions<br>we are asked about AA.</ul>
				<li><h4 class="weak"><a href="/info/statemen.htm">About us</a></h4>
					<ul><li class="small">Includes a FAQ about us.</ul>
				<li><h4 class="weak"><a href="/info/returns.htm">Refund Policy</a></h4>
				<li><h4 class="weak"><a href="/info/privacy.htm">Privacy &amp; Security Statement</a></h4>
			</ul>
			<div style="text-align: center; margin: 1em;">
				<address>
					The Anonymous Press<br>
					1658 N Milwaukee Ave #100-2883<br>
					Chicago IL 60647-6905<br>
					<span class="small">fax (509)&nbsp;779-4339</span><br>
					<a data-email></a>
				</address>
				<p style="margin-bottom: 0;"><strong style="color: #900;">Please</strong><span class="small"> do <em style="color: red;">not</em> write with<br>questions about meetings</span><br>
					<a class="strong" href="/info/local_meetings.htm">click here for meeting info</a>
			</div>
		</div>
	</section>
</div>
<section>
	<h2 style="margin: 3em 0 0 0;">This is how we quit drinking:</h2>
	<h3 style="margin: 0 0 0 0.5em;">The Steps:</h3>
	<ol style="margin: 0 0 5em 0;" class="small">
		<li>We admitted we were powerless over alcohol — that our lives had become unmanageable.
		<li>Came to believe that a Power greater than ourselves could restore us to sanity.
		<li>Made a decision to turn our will and our lives over to the care of God as we understood Him.
		<li>Made a searching and fearless moral inventory of ourselves.
		<li>Admitted to God, to ourselves, and to another human being the exact nature of our wrongs.
		<li>Were entirely ready to have God remove all these defects of character.
		<li>Humbly asked Him to remove our shortcomings.
		<li>Made a list of all persons we had harmed, and became willing to make amends to them all.
		<li>Made direct amends to such people wherever possible, except when to do so would injure them or others.
		<li>Continued to take personal inventory and when we were wrong promptly admitted it.
		<li>Sought through prayer and meditation to improve our conscious contact with God as we understood Him, praying only for knowledge of His will for us and the power to carry that out.
		<li>Having had a spiritual awakening as the result of these steps, we tried to carry this message to alcoholics, and to practice these principles in all our affairs.
	</ol>
</section>
<footer>
	"Alcoholics Anonymous" and "Big Book" have been registered as trademarks by AAWS Inc. New York
</footer>

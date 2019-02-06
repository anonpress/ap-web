<!DOCTYPE html>
<html lang="en-US">
<title>The Anonymous Press</title>
<meta charset="UTF-8">
<meta name="description" content="Alcoholics Anonymous Books, Software, Phone Numbers, FAQ & AA Big Book Indexes">
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=368, initial-scale=1">
<?php require_once('includes/style.php'); ?>
<style>
	h1 {
		margin-left: 5%;
		max-width: 90%;
	}

	#randquote {
		margin-left: 10%;
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

	div.flex {
		display: flex;
		justify-content: space-evenly;
		flex-wrap: wrap;
	}
	div.flex>section {
		border: thin outset #ccc;
		border-radius: 0.5em;
		box-shadow: 2px 2px 5px #333;
		padding: 1em;
		margin-top: 36pt;
		position: relative;
		min-width: 350px;
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
</style>
<?php require_once('includes/nav.php'); ?>
<h1><img src="/assets/The-Anonymous-Press-green.gif" alt="The Anonymous Press"></h1>
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
		<p>Some links.
	</section>
	<section>
		<h2>Downloads</h2>
		<p>Some downloads.
	</section>
	<section>
		<h2>Poll</h2>
		<p>A poll.
	</section>
	<section>
		<h2>Info</h2>
		<p>Some info
	</section>
</div>

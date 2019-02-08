<?php require_once('jquery.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/css/tooltipster.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/3.3.0/js/jquery.tooltipster.min.js"></script>
<script>
	$(function() {
		$('[title]').tooltipster({
			theme: 'tooltip',
			delay: 50,
			delayTouch: 50
		});
	});
</script>
<style>
	.tooltip {
		border-radius: 5px;
		border: 1px solid #ccc;
		background: whitesmoke;
		color: #666;
	}
	.tooltip .tooltipster-content {
		padding: 8px 10px;
		overflow: hidden;
		font-size: 1rem;
		line-height: 1.2rem;
		max-width: 25rem;
	}
</style>
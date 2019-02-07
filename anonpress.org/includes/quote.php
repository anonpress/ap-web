<?php
	$quotes = explode("\n", file_get_contents(__DIR__ . '/../assets/text/quotes.tsv'));
	foreach($quotes as &$q) {
		$q = explode("\t", $q);
	}
	$i = rand(0, count($quotes) - 1);
?>
<p><?=$quotes[$i][0]?>
<?php if(isset($quotes[$i][2])): ?>
	<cite>Pages&nbsp;<?=$quotes[$i][1]?>–<?=$quotes[$i][2]?>
<?php else: ?>
	<cite>Page&nbsp;<?=$quotes[$i][1]?></cite>
<?php endif; ?>
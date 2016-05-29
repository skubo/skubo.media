<?php
function layoutColumn($pagetype, $elements) {
	$numcols = count($elements);
	// create container divs
	for($i=0; $i<$numcols;$i++) {
		echo '<div class="columncontainer" style="';
		if ($i<$numcols-1) {
			echo 'clear:left;';
		}
		if ($i > 0) {
			echo 'right:'.(100/$numcols).'%;';
		}
		if ($i==0) {
			echo 'overflow: hidden;';
		}
		echo '">'."\n";
	}
	for ($i=0;$i<$numcols;$i++) {
		$element = $elements[$i];
		layoutElement($pagetype, $element, $numcols, ($i+1));
	}
	for($i=0; $i<$numcols;$i++) {
		echo '</div>'."\n";
	}
}
?>
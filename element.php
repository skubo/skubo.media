<?php
function layoutElement($pagetype, $element, $numcols, $col) {
	switch ($element->{'type'}) {
		case 'image':
			echo '<div class="'.$pagetype.' center" style="'; 
			if ($numcols > 1) {
				echo 'width:'.((100/$numcols)-4).'%;';
				echo 'left:'.(2+(100*($numcols-1)/$numcols)+($col-1)*4).'%;';
			}
			echo '">';
			$link = $element->{'link'};
			if ($link) {
				echo '<a href="'.$link.'" target="_new">';
			}
			if ($element->{'vignette'} == "true") {
				echo '<p class="vignette">';
			}
			echo '<img src="'.$element->{'src'}.'" style="width:'.$element->{'width'}.';height:'.$element->{'height'}.';" />';
			if ($element->{'vignette'} == "true") {
				echo '</p>';
			}
			echo '</div>'."\n";
			if ($link) {
				echo '</a>';
			}
			break;
		case 'text':
			echo '<div class="'.$pagetype.' text" style="font-size:'.$element->{'font-size'}.';';
			if ($numcols > 1) {
				echo 'width:'.((100/$numcols)-4).'%;';
				echo 'left:'.(2+(100*($numcols-1)/$numcols)+($col-1)*4).'%;';
			}
			echo '"><span>';
			echo $element->{'text'}."</span></div>"."\n";
			break;
		case 'youtube':
			echo '<div class="'.$pagetype.' text" style="font-size:'.$element->{'font-size'}.';';
			if ($numcols > 1) {
				echo 'width:'.((100/$numcols)-4).'%;';
				echo 'left:'.(2+(100*($numcols-1)/$numcols)+($col-1)*4).'%;';
			}
			echo '">';
			echo $element->{'channel'}."</div>"."\n";
			break;
		case 'iframe':
			echo '<div class="'.$pagetype.' iframe" style="';
			if ($numcols > 1) {
				echo 'width:'.((100/$numcols)-4).'%;';
				echo 'left:'.(2+(100*($numcols-1)/$numcols)+($col-1)*4).'%;';
			}
			echo '">';
			echo '<iframe src="'.$element->{'src'}.'" style="width:'.$element->{'width'}.';height:'.$element->{'height'}.';" />';
			echo "</div>"."\n";
			break;
		default:
			# code...
			break;
	}
}
?>
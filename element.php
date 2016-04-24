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
			echo '<img src="'.$element->{'src'}.'" width="'.$element->{'width'}.'" height="'.$element->{'height'}.'" /></div>'."\n";
			break;
		case 'text':
			echo '<div class="'.$pagetype.' text" style="font-size:'.$element->{'font-size'}.';';
			if ($numcols > 1) {
				echo 'width:'.((100/$numcols)-4).'%;';
				echo 'left:'.(2+(100*($numcols-1)/$numcols)+($col-1)*4).'%;';
			}
			echo '">';
			echo $element->{'text'}."</div>"."\n";
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
		default:
			# code...
			break;
	}
}
?>
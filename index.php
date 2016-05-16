<html>
<head>
<meta charset="utf-8" />
<title>skubo.media</title>

<meta name="keywords"
        content="music, video, sound, text, writing, podcasting, blog, blogging, media" />
<meta name="description"
        content="The creative hub of Chris Garbers - everthing skubo." />
<meta name="author" content="Chris Garbers" />
 
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
<link rel="apple-touch-icon" href="/static/images/app-logo-64px.png" />
<link rel="apple-touch-icon-precomposed" href="/static/images/app-logo-64px.png" />
<link rel="stylesheet" href="index.css" type="text/css" />

</head>
<body>
<?php
include('./element.php');
$content = json_decode(file_get_contents('pages/content.json'));
$pages = $content->{'pages'};

// create heda
echo '<div class="header">';
foreach ($pages as $page) {
	echo '<div class="headerelement"></div>';
}
echo '</div>';

foreach ($pages as $page) {
	echo '<div class="page" id="'.$page->{'key'}.'" style="background-image:url('.$page->{'background'}.');">'."\n";

 	$elements = $page->{'elements'};
 	$pagetype = $page->{'type'};
 	switch ($pagetype) {
 		case 'center':
 			layoutElement($pagetype, $elements[0], 0, 0);
 			break;
 		
 		case 'column':
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
 			break;

 		default:
 			# code...
 			break;
 	}

 	echo '</div>'."\n";
 } 
?>

</body>
</html>

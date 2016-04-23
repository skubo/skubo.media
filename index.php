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
$content = json_decode(file_get_contents('pages/content.json'));
$pages = $content->{'pages'};

foreach ($pages as $page) {
	echo '<div class="page" id="'.$page->{'key'}.'" style="background-image:url('.$page->{'background'}.');">';

 	$elements = $page->{'elements'};

 	foreach ($elements as $element) {
 		switch ($element->{'type'}) {
 			case 'image':
 				echo '<div class="'.$element->{'position'}.'">';
 				echo '<img src="'.$element->{'src'}.'" width="'.$element->{'width'}.'" height="'.$element->{'height'}.'" /></div>';
 				break;
 			
 			default:
 				# code...
 				break;
 		}
 	}
 	echo '</div>';
 } 
?>

</body>
</html>

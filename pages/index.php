<?php
header('Content-type: application/json');
// TODO authenticate

// cumulate content
$content = json_decode(file_get_contents('./content.json'));
$pages = json_encode($content->{'pages'});

$json = '{"httpStatus":200,"pages":'.$pages.'}';

// zack return
echo $json;
?>

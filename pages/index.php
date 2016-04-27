<?php
header('Content-type: application/json');
// TODO authenticate

// cumulate content
$obj = file_get_contents('./content.json');

$json = "{httpStatus:200,obj={".$obj."}}";

// zack return
echo $json;
?>

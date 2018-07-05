<?php

require_once('config/config.php');
require_once('engine/functions.php');
require_once('engine/db.php');

$url_array = explode("/", $_SERVER['REQUEST_URI']);

if ($url_array[1] == '')
{
	$page_name = "index";
}
else
{
	$page_name = $url_array[1];
}

$content = prepareVariables($page_name);

require_once 'templates/bases.php';


echo "<pre>";

//print_r($url_array);
//echo $page_name;
print_r($content);
echo "</pre>";


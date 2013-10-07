<?php
/**
 * Work out the root site's URL.
 * Necessary for including from subfolders, e.g. the blog.
 */
$siteUrl = 'http';

if ($_SERVER["HTTPS"] == "on") {
	$siteUrl .= "s";
}

$siteUrl .= "://";

if ($_SERVER["SERVER_PORT"] != "80") {
	//$siteUrl .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
	$siteUrl = "http://localhost:8888/flap";
} else {
	$siteUrl .= $_SERVER["SERVER_NAME"];
}

?>
<?php


define("WDIR_ROOT",__DIR__);
define("WURL_ROOT",$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/');
define("WURL_CURRENT",$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] .$_SERVER["REQUEST_URI"]);
define("WDIR_PAGES",__DIR__."/pages");
define("WDIR_LAYOUTS",__DIR__."/layouts");
define("WDIR_INCLUDES",__DIR__."/include");
define("WDIR_DATA",__DIR__."/data");
//define("WPAGE_CURRENT",$page);
//define("WLANG","hr");




require_once (WDIR_ROOT."/config.php");
require_once (WDIR_ROOT."/helpers/webHelper.php");



// Turn off/on all error reporting
error_reporting(0);

webHelper::setLang();
webHelper::setPage();



$pageTemplateFile = webHelper::getTemplatePath();


//die($pageTemplateFile);

if(!file_exists($pageTemplateFile)){
	webHelper::returnError();
}

$pageContent = "";

ob_start();
	require_once ($pageTemplateFile);
	$pageContent = ob_get_contents();
ob_end_clean();

$pageContent = webHelper::processPageContent($pageContent);
$pageParams = json_decode(file_get_contents(WDIR_PAGES."/".WLANG."/".WPAGE_CURRENT.".json"));


$scriptVersion = time();
include_once ("index2.php");


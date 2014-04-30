<?php
$class = 'wiki-import';
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : 'SLOODLE'; // todo
$redirects = array(
	'Download_Sloodle' => '/download',
	'Repository_checkout_for_SLOODLE_2.x' => 'Repository_checkout_for_SLOODLE_2x',
	'Repository_checkout_for_SLOODLE_1.x' => 'Repository_checkout_for_SLOODLE_1x',
	'Quickstart_Sloodle_1.0' => 'Quickstart_Sloodle_10' 
);
if (isset($redirects[$page])) {
	header('Location: '.$redirects[$page]);
	exit;
}
$dir = '';
if (!preg_match('/^[A-Za-z0-9_-]+$/', $page) ) {
	header("HTTP/1.0 404 Not Found");
	exit;
}
if (preg_match('/^(.)(.)(.)/', $page, $matches)) {
	$dir = '/'.strtolower($matches[1]).'/'.strtolower($matches[2]).'/'.strtolower($matches[3]);
}
$title = 'SLOODLE Documentation';

$file = dirname(__FILE__).'/wiki/articles'.$dir.'/'.$page.'.html';
if (!file_exists($file)) {
	header("HTTP/1.0 404 Not Found");
	exit;
}

$contents = file_get_contents($file);

if (preg_match('/\<title\>(.*?)\<\/title\>/s', $contents, $matches)) {
	$title = $matches[1];
}

$contents = preg_replace('/^.*?\<div id="mw-content-text.*?\>/s', '', $contents);
$contents = preg_replace('/<div class="printfooter.*$/s', '', $contents);
$contents = str_replace('../../../../images/', 'wiki/images/', $contents);
$contents = preg_replace('#../../../../articles/\w/\w/\w/([A-Za-z0-9_-]+)\.html#', '${1}', $contents);
$contents = str_replace('http://slisweb.sjsu.edu/sl/index.php/', '', $contents);
$contents = str_replace('Wiki Frontpage', 'Document Top', $contents);

$sidebar = '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;';

if (preg_match('/(\<table id="toc" class="toc"\>.*?\<\/table\>)/s', $contents, $matches)) {
	if (preg_match('/(\<ul\>.*\<\/ul\>)/s', $matches[1], $morematches)) {
		$sidebar = $morematches[1];	
		$contents = preg_replace('/(\<table id="toc" class="toc"\>.*?\<\/table\>)/s', '', $contents); 
	}
}
?>
<?php include(dirname(__FILE__).'/../include/header.php'); ?>
	<table id="content_table"><tr><td class="main">

	<div class="post" id="" style="width:100%">

<?php print $contents; ?>
	<td style="vertical-align:top; padding:10px;">
<?php print $sidebar; ?>
	</td>

    </td></tr></table>

<?php include(dirname(__FILE__).'/../include/footer.php'); ?>

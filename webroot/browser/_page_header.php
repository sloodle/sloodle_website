<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

Design by NodeThirtyThree <http://www.nodethirtythree.com>
Published by Free CSS Templates <http://www.freecsstemplates.org/>
Released for free under a Creative Commons Attribution 2.5 License

Title      : HyperGlass
Version    : 1.0
Released   : 20070718
Description: A two-column, fixed-width template featuring a blue glass effect ideal for 1024x768 resolutions.

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php echo $CFG->pagetitle; ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="logo">
		<h1><a href="<?php echo $CFG->wwwroot; ?>">Sloodle Browser</a></h1>
		<h2>Collaborative browsing in <a href="http://www.secondlife.com" title="Official Second Life website">SL</a> &reg;</h2>
	</div>
	<div id="menu">
		<ul>
        <?php
        // Go through each menu item
        foreach ($CFG->navigation as $nav) {
            // Start the entry, and mark it as active if it's the current page
            if ($nav[0] == $CFG->curpage) echo "<li class=\"active\">";
            else echo "<li>";
            echo "<a href=\"{$CFG->wwwroot}{$nav[1]}\" title=\"{$nav[2]}\">{$nav[0]}</a>";
            echo "</li>\n";
        }
        ?>
		</ul>
	</div>
</div>
<hr />
<div id="page">
	<div id="bg">
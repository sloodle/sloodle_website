<?php
// Configuration file for Sloodle Browser website
// Style of implementation basically copied from Moodle :-)
// Written by: Peter R. Bloomfield

// Setup - do not change this!
unset($CFG);
$CFG = new stdClass();
global $CFG;


// Site location
$CFG->wwwroot = 'http://www.sloodle.org/browser';
$CFG->dirroot = '/usr/local/apache2/htdocs/browser';

// Navigation menu - numeric array of entries.
// Each entry is a numeric array containing {link text, url, caption}
//  (url should be relative to the wwwroot above)
$CFG->navigation = array();
$CFG->navigation[] = array('home', '/index.php', 'Go back to the site homepage');
$CFG->navigation[] = array('videos', '/videos.php', 'Watch demo videos of the Sloodle Browser in action');
$CFG->navigation[] = array('get', '/get.php', 'Get the Sloodle browser');
$CFG->navigation[] = array('contact', '/contact.php', 'Get in touch to ask a question or make a suggestion');

// Indicates the currently active page (should match the link text from the navigation menu)
// Should be overridden by individual pages
$CFG->curpage = '';
// Stores the title of a given page (i.e. to be displayed in the browser header bar)
// Should be overridden by individual pages (this will be the default)
$CFG->pagetitle = 'Sloodle Browser';

// The stylesheets to be included -- should be relative to the wwwroot
$CFG->styles = array();
$CFG->styles[] = '/default.css';



// Include our library functionality
require_once($CFG->dirroot.'/lib.php');


?>

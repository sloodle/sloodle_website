<?php
// Sloodle Browser website
// General site functionality
// Written by: Peter R. Bloomfield

// The config.php file MUST be already included!


// Output the header part of a page.
// Includes all the HTML pre-amble, and the main navigation menu
function print_header()
{
    global $CFG;
    include($CFG->dirroot.'/_page_header.php');
}

// Output the footer part of a page.
// Adds the footer information and closes the HTML part of the page.
function print_footer()
{
    global $CFG;
    include($CFG->dirroot.'/_page_footer.php');
}

// Start the main content section of a page.
// Should only be called ONCE per page,
//  and must have a corresponding call to end_page_content().
function start_page_content()
{
    echo "<div id=\"content\">\n";
}

// End the main content section of a page.
function end_page_content()
{
    echo "</div>\n";
}

// Start the side content section of a page.
// Should only be called ONCE per page,
//  and must have a corresponding call to end_side_content().
// Should be called AFTER end_page_content().
function start_side_content()
{
    echo "<div id=\"sidebar\">\n";
}

// End the side content section of a page.
function end_side_content()
{
    echo "</div>\n";
}

// Start an "About" box. Should only be called ONCE per page,
//  and should have a corresponding call to end_about_box().
// Designed for use within the sidebar section
//  $title = title of the box
function start_about_box($title)
{
    echo "<div id=\"about-box\">\n";
    echo "<h2>{$title}</h2>\n";
    echo "<p>\n";
}

function end_about_box()
{
    echo "</p>\n</div>\n";
}

// Start a page entry (a box, like a blog post).
//  $title = the title of the entry
//  $subtitle = the subtitle of the entry (e.g. a posting date, but often left blank)
function start_page_entry($title, $subtitle='')
{
    // Start the entry
    echo "<div class=\"post\">\n";
    
    // Display the title and (optionally) the subtitle
    echo "<h2 class=\"title\">{$title}</h2>\n";
    if (!empty($subtitle)) echo "<h3 class=\"date\">{$subtitle}</h3>\n";
    // Start the entry section
    echo "<div class=\"entry\">\n";
}

// End a page entry
//  $meta = a numeric array of extra items to be displayed at the bottom, e.g. a "more" link
function end_page_entry($meta=null)
{
    // Close the text section 
    echo "</div>\n";
    // Display the meta information
    echo "<p class=\"meta\">\n";
    if (is_array($meta)) {
        $isfirst = true;
        foreach ($meta as $m) {
            // Display a separator
            if ($isfirst) $isfirst = false;
            else echo ' <b>|</b> ';
            // Display the item
            echo $m;
        }
    }
    echo "</p>\n";
    
    // Done!
    echo "</div>\n";
}


?>
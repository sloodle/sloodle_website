<?php
// Sloodle Browser website

require_once('config.php');
$CFG->curpage = 'home';
$CFG->pagetitle = 'Sloodle Browser :: Home';

// Define a numeric array of screenshots.
// Each value is a numeric array containing {thumbnailurl, mainimageurl, caption}
$screenshots = array();
$screenshots[] = array('screenshots/tn_google_search.png', 'screenshots/google_search.png', 'Entering a Google search');
$screenshots[] = array('screenshots/tn_google_results.png', 'screenshots/google_results.png', 'Browsing the Google search results');
$screenshots[] = array('screenshots/tn_sloodle_homepage.png', 'screenshots/sloodle_homepage.png', 'Viewing the Sloodle homepage');

print_header();
?>


<!-- MAIN PAGE CONTENT -->
<?php start_page_content(); ?>


    <?php start_page_entry('Welcome!'); ?>
    <p>
    The Sloodle Browser is a <a href="http://www.secondlife.com" title="Official Second Life website">Second Life</a> &reg;
    tool which allows several avatars to collaboratively browse and interact with websites from within the virtual world.
    </p>

    <p>
    It does this by displaying the webpages on the surface of a prim, and providing a virtual mouse pointer (called the "VMouse")
    which users can drag and click to interact with the browser. The mouse also acts as a virtual pointer, helping focus attention
    during discussions and presentations.
    </p>

    <p style="font-weight:bold; font-size:80%;">
    The Sloodle Browser is free and open source, released under the
    <a href="http://www.gnu.org/copyleft/gpl.html" title="Click for more information about the license we work with">GNU General Public License</a>.
    </p>
    <?php end_page_entry(); ?>

    <?php start_page_entry('Instructions'); ?>
    <p>
    To drag the virtual mouse, you have to hold down the Ctrl key on the keyboard, then click and hold your left
    mouse button on the arrow pointer, and move your mouse around. If the pointer disappears, then let go of the mouse and Ctrl key,
    and it will soon re-appear. To click the virtual mouse, simply click on the red button attached to the pointer.
    </p>

    <p>
    Data entry occurs using ordinary text chat:
    URLs to visit can be specified on channel 2, and form data can be specified on channel 3.
    </p>

    <?php end_page_entry(); ?>
    
    
    <?php start_page_entry('Screenshots'); ?>
    <p>
    Click on the thumbnail images below to view them full-size.
    </p>
    
    <table border="0">
    <tr>
    <?php
    foreach ($screenshots as $s) {
        echo "<td style=\"text-align:center;\"><a href=\"{$s[1]}\" title=\"{$s[2]} (click to view full-size)\"><img src=\"{$s[0]}\" style=\"margin-left:auto; margin-right:auto;\" /></a></td>\n";
    }
    ?>
    </tr>
    
    <tr>
    <?php
    foreach ($screenshots as $s) {
        echo "<td style=\"text-align:center;\"><a href=\"{$s[1]}\" title=\"Click to view image full-size\">{$s[2]}</a></td>\n";
    }
    ?>
    </tr>
    </table>
    <?php end_page_entry(); ?>



<?php end_page_content(); ?>
<!-- END MAIN PAGE CONTENT -->

<?php include_once($CFG->dirroot.'/sidebar.php'); ?>
<?php print_footer(); ?>
		

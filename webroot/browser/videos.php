<?php
// Sloodle Browser website

require_once('config.php');
$CFG->curpage = 'videos';
$CFG->pagetitle = 'Sloodle Browser :: Videos';

print_header();
?>


<!-- MAIN PAGE CONTENT -->
<?php start_page_content(); ?>


    <?php start_page_entry('Videos'); ?>
    <div style="text-align:center;">
        <object width="416" height="337"><param name="movie" value="http://www.youtube.com/cp/vjVQa1PpcFNUB87jnj3g6yJ9-kxQO0Zu0W3ai86HNIs="></param><embed src="http://www.youtube.com/cp/vjVQa1PpcFNUB87jnj3g6yJ9-kxQO0Zu0W3ai86HNIs=" type="application/x-shockwave-flash" width="416" height="337"></embed></object>
        
        <p style="margin-top:36px;">
        Our videos are hosted courtesy of <a href="http://www.youtube.com" title="Visit YouTube.com">YouTube</a>.
        More videos coming soon!
        </p>
    </div>
    <?php end_page_entry(); ?>



<?php end_page_content(); ?>
<!-- END MAIN PAGE CONTENT -->

<?php include_once($CFG->dirroot.'/sidebar.php'); ?>
<?php print_footer(); ?>
		
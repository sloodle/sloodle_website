<?php
// Sloodle Browser website

require_once('config.php');
$CFG->curpage = 'get';
$CFG->pagetitle = 'Get the Sloodle Browser';

print_header();
?>


<!-- MAIN PAGE CONTENT -->
<?php start_page_content(); ?>


    <?php start_page_entry('In-World Tool'); ?>
    <p>
    The Sloodle Browser itself is an object in Second Life, which is freely available for you to obtain.
    Simply click on the "<b>Teleport Now</b>" link on the right to visit our in-world demo, and you should be
    able to take a copy of the demo, or buy a copy for 0 or 1 <acronym title="Linden Dollar">$L</acronym>.
    </p>
    
    <p>
    For low volume usage, this is all you need, as it will work with our own server.
    See below for information about hosting your own Browser server.
    </p>
    
    <p style="font-weight:bold; font-size:90%;">
    Please note: the Sloodle Browser is experimental, and therefore still has some bugs!
    </p>
    <?php end_page_entry(); ?>
    
    <?php start_page_entry('Server Software'); ?>
    <p>
    By default, the Sloodle Browser will use our own server, so you won't need to setup anything external yourself
    (just setup the browser object, and you are ready to go!).
    However, there is a limit to the service we can provide freely, so if you will be using the Sloodle Browser
    substantially, then it would best if you host your own server.
    </p>
    
    <p>
    The program ("VMouseSvr") is freely available, and was developed C# .NET.
    This should run directly on a Windows Server, although you can run it on a Linux server as well if you have
    <a href="http://www.mono-project.com" title="Mono homepage">Mono</a> available.
    It operates on port 49902, and also requires PHP and a MySQL database (note that you may need to install the
    <a href="http://www.mono-project.com/MySQL" title="Information about MySQL and Mono">MySQL Connector</a>
    in order to allow Mono to access the database).
    </p>
    
    <p style="font-weight:bold;">Packages:</p>
    <ul>
     <li>
      <a href="http://figures.avid-insight.co.uk/VMouseSvr.zip" title="Download this release">
       Complete source code and MS Visual Studio project files
      </a>
    </ul>
    <?php end_page_entry(); ?>



<?php end_page_content(); ?>
<!-- END MAIN PAGE CONTENT -->

<?php include_once($CFG->dirroot.'/sidebar.php'); ?>
<?php print_footer(); ?>
		
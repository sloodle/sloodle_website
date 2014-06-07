<?php $title = 'Download SLOODLE'; ?>
<?php include(dirname(__FILE__).'/../include/header.php'); ?>

	<table id="content_table"><tr><td class="main">

	<div class="post" id="" style="width:100%">

		<h2>Download SLOODLE and get the in-world tools</h2>

		<p>The SLOODLE software comes in two parts: the 'server-side' modules which you download and install in Moodle, and the 'in-world' tools which you obtain and use in Second Life or OpenSim. All of the SLOODLE software is available free of charge, licensed under the GNU General Public License version 3.</p>

		<p>The current version of SLOODLE is version 2.1, which runs on Moodle versions 1.9 and 2.x. It is designed for Second Life and OpenSim.</p>

		<p><i>Note: From SLOODLE 2 above, your Moodle server needs to be able to send HTTP messages to SL/OpenSim. For some hosts this requires adjusting firewall settings. See the <a href="docs/Network_requirements_for_SLOODLE_2">network requirements</a> for more details.
		The older SLOODLE 1.x does not have this limitation, but only runs on Moodle 1.9 or below.</i>
		</p> 

		<h4>Get the server-side Moodle components:</h4>

		<ul>
			<li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.7" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.7 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.7" class="external text" rel="nofollow">(.tar)</a> [Not yet tested, please report any problems]
			<li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.6" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.6 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.6" class="external text" rel="nofollow">(.tar)</a> [Not fully tested, please report any problems]
			<li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.5" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.5 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.5" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.4" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.4 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.4" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.3" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.3 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.3" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.2" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.2 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.2" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.1" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.1 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.1" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=2.0" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 2.0 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=2.0" class="external text" rel="nofollow">(.tar)</a>
			</li><li> <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=zip&amp;moodle=1.9" class="external text" rel="nofollow">SLOODLE 2.1 for Moodle 1.9 (zip)</a> | <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=tgz&amp;moodle=1.9" class="external text" rel="nofollow">(.tar)</a>
			or
			<a href="http://download.socialminds.jp/sloodle/latest/sloodle_all_latest_stable.zip" class="external text" rel="nofollow">SLOODLE 1.2 for Moodle 1.9 (zip)</a> | <a href="http://download.socialminds.jp/sloodle/latest/sloodle_all_latest_stable.tar.gz" class="external text" rel="nofollow">(.tar)</a>
			</li>
		</ul>

		<p>
		The download archive consists of:
		<ul>
			<li>An activity module, which installs to <b>mod/sloodle</b>.</li>
			<li>A menu block, which installs to <b>blocks/sloodle_menu</b>.</li>
			<li>An additional optional menu block, which installs to <b>blocks/sloodle_backpack</b>.</li>
			<li>An optional assignment type, which installs to <b>mod/assignment/type/sloodleobject</b>.</li>
		</ul>
		</p>

		<p>See the <a href="/docs/Install_Sloodle" title="Install Sloodle">installation instructions</a> for more detailed information about how to install the components in Moodle.
		</p>

		<p>
		If you prefer you can <a href="/docs/Repository_checkout_for_SLOODLE_2.x" title="Repository checkout for SLOODLE 2.x">check out the code from the Git repository</a>. Please use the release-2.1 branch.
		<br />
		Older code from version 1.2 code and earlier is <a href="/docs/Repository_checkout_for_SLOODLE_1.x">managed in Subversion at Google Code</a>.
		</p>



		<h4>Get the in-world tools:</h4>

		<ul>
			<li> <b>Second Life</b>: <b><a href="https://marketplace.secondlife.com/p/Sloodle-2111/6091104" class="external text" rel="nofollow">Get the rezzer from the Second Life marketplace.</a></b><br /><br /></li>

			<li> 
				<b>OpenSim</b>: <a href="http://download.avatarclassroom.com/sloodle/latest.php?v=2&amp;format=iar" class="external text" rel="nofollow">Download the SLOODLE 2.1 rezzer IAR for OpenSim</a>.<br />
				See the <a href="http://opensimulator.org/wiki/Inventory_Archives#load_iar" class="external text" rel="nofollow">OpenSim documentation</a> for instructions on how to load this into your grid.<br />
				<br />OpenSim was not officially supported for the older version 1.2, but see <a href="http://www.sloodle.org/moodle/mod/forum/view.php?f=274">our forums</a> for third-party versions.
			</li>
		</ul>

		<h4>Start using the tools:</h4>
		<p>
		See <a href="/docs/Quickstart_Sloodle_2">the guide for SLOODLE 2</a> or <a href="/docs/Quickstart_Sloodle_10">SLOODLE 1</a> for information about how to add SLOODLE activities to your course and setup and use the tools in-world.
		</p>
	<td>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
	</td>

    </td></tr></table>

<?php include(dirname(__FILE__).'/../include/footer.php'); ?>

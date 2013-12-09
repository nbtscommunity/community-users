<?php 

// Charlie gices up and comes back later.


// $homeshandle = dir("/home");
// while ($home = $homeshandle->read()) {
//	echo "$home"; 
//	$hsize = `/home/$home/web/index.html`}

// echo array(`ls -l /home/*/web/index.html`;

/*
// Dynamically list users with web sites on paradoxical
// Nick B-W <nickbw@nbtsc.org> 11/23/2001

// Set the user repository (duh)
$homedir = "/home";

// Filter hidden stuff/shy users
$hide = array("mp3s", "mp3s2", "ftp", "httpd", "cvs", "lost+found");

// Get our crunchy candy shell
require("../header.php");
rainbowheader("Users present on nbtsc.org");

// Retrieve names from /home
$handle=opendir($homedir);
$userlist = array();
$num = 0;
while ($dir = readdir($handle)) {
	if($dir[0] != '.') {
		$userlist[$num++] = $dir;
	}
}
closedir($handle); 

// Do a little trimming
$userlist = array_diff($userlist, $hide);
natcasesort($userlist);

// Pause for station identification...
?>

<p>
<b>Users on paradoxical.nbtsc.org</b>
</p>
<p>
This is the current user list for this server. Usernames with a <img src="/images/star.png" alt="*" width="16" height="15"> have an index of an appreciable size, and most likely have web sites. Unless otherwise noted on the site, materials found on personal sites are copyright their respective users.
</p>
<p>
If you are a paradoxical user and would prefer not to have your account listed here, please send a message to the <a href="mailto:webmasters@nbtsc.org">webmasters</a>.
</p>

<table border="0" width="100%">

<?php

// Display the finished user list
$tags = 0;
foreach($userlist as $val) {
	$file = @file("http://localhost/~$val/");
	if ($file) {
		$snippet = strip_tags(join('', $file));
		if($tags == 0) {
			echo("<tr><td>");
		} else {
			echo("<td>");
		}
		echo("<a href=\"/~$val/\">$val</a>");
		echo(" <a href=\"finger.php?user=$val\"><img src=\"/images/que.png\" alt=\"?\" width=\"10\" height=\"11\" border=\"0\"></a>");
		if(strlen($snippet) > 50 && !substr_count($snippet, "Congratulations, your Web")) {
			echo(" <a href=\"/~$val/\"><img src=\"/images/star.png\" alt=\"*\" width=\"16\" height=\"15\" border=\"0\"></a>");
		}
		if($tags == 0) {
			echo("</td>");
			$tags = 1;
		} else {
			echo("</td></tr>\n");
			$tags = 0;
		}
	}
}

// Clean up
?>

</table>


<?php

// Okay, you don't have to go home, but you can't stay here
rainbowfooter();
*/
?>

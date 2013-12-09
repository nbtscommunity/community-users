<!doctype html>
<?php
    // Dynamically list users with web sites on paradoxical
    // Nick B-W <nickbw@nbtsc.org> 11/23/2001

    $users = file("/etc/passwd");
    $ousers = array();
    $homes = array();
    foreach($users as $num => $user) {
        list($username, $x, $uid, $gid, $gecos, $home, $shell) = explode(":", $user);
        if((int)$uid >= 500) {
            $ousers[$num] = $username;
        }
        $homes[$username] = $home;
    }
    $users = $ousers;

    // Get our crunchy candy shell
?>
<html>
	<head>
		<title>Users present on community.nbtsc.org</title>
		<link rel="stylesheet" href='/style.css'>
	</head>
	<body>
		<h1>Users present on community.nbtsc.org</h1>
	
        <?php natcasesort($users); // Pause for audience applause... ?>

        <p>
            This is the current user list for this server. Usernames with a
            <img src="star.png" alt="*" width="16" height="15"> have an index of an
            appreciable size, and most likely have web sites. Unless otherwise noted on
            the site, materials found on personal sites are copyright their respective
            users.
        </p>

        <p>
            If you are an nbtsc.org user and would prefer not to have your account listed
            here, please send a message to the <a href="mailto:webmasters@nbtsc.org">webmasters</a>.
        </p>

        <?php foreach($users as $val): ?>
            <?php if(is_file($homes[$val]."/web/.nolist")) continue; ?>
            <a href='/~<?= $val ?>/'><?= $val ?></a> <a href='finger.php?user=<?= $val ?>'>?</a>
            <?php if ($f = glob($homes[$val]."/web/index.*") and !preg_match('/No web page here, yet|Congratulations, your Web directory is ready/', file_get_contents($f[0]))): ?>
                <a href='/~<?= $val ?>/'><img src='star.png' alt='*' width='16' height='15' border='0'></a>
            <?php endif; ?>
            <br>
        <?php endforeach ?>

        <?php // Okay, you don't have to go home, but you can't stay here ?>
    </body>
</html>

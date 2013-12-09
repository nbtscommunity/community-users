<?php
    // Finger users on paradoxical
    // Nick B-W <nickbw@nbtsc.org> 11/23/2001
    $user = $_GET['user'];
?>
<html>
	<head>
		<title>Finger <?php print($user); ?></title>
		<link rel="StyleSheet" href="/style.css" />
	</head>
	<body>
    <?php if($user): ?>
        <p><b>Finger info for <?= $user ?> at community.nbtsc.org</b></p>
        <?php if (preg_match("/[^_0-9a-zA-Z-]/", $user)): ?>
            <p>This is an invalid username.</p>
        <?php else: ?>
            <p><pre>
                <?= htmlspecialchars(`finger $user`, ENT_COMPAT, 'UTF-8'); ?>
	        </pre></p>
        <?php endif ?>
    <?php else: ?>
        <p>You need to supply a username.</p>
    <?php endif; ?>

    <p><a href="index.php">Back to users</a></p>

	</body>
</html>

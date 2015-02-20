<html>
<head>
	<title>Display Rankings Test</title>
</head>
<body>
	<p>Hello world!</p>
	<?php include("/rs_display/rs_display_config.php") ?>
	<?php include("/rs_display/rs_display_script.php") ?>
	<?php
	display_season_results(1);
	?>
</body>
</html>
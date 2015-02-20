<html>
<head>
	<title>Display Rankings Test</title>
</head>
<body>
	<p>Hello world!</p>
	<?php include("/display_ex/rs_display_config.php") ?>
	<?php include("/display_ex/rs_display_script.php") ?>
	<?php
	$season_results = get_season_results(1);
	display_season_results($season_results);
	?>
</body>
</html>
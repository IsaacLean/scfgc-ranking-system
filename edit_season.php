<?php
/* Print all seasons in database */
include("db/sql.php");

/* Get season data */
$season_id = $_GET["season_id"];
$sql_get_season_with_id = "SELECT * FROM rs_seasons WHERE id = " . $season_id;
$season = dbQuery($sql_get_season_with_id);

foreach($season as $data) {
	$season_name = $data["season_name"];
	$date_start = $data["date_start"];
	$date_end = $data["date_end"];
}

/* Get points for ranks in season */
$sql_get_season_rank_pts = "SELECT * FROM rs_season_pts WHERE season_id = " . $_GET["season_id"];
$rank_pts = dbQuery($sql_get_season_rank_pts);
$ranks = array();

foreach($rank_pts as $data) {
	$ranks[intval($data["rank"])] = intval($data["points"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit "<?php echo $season_name ?>" | SCFGC Ranking System</title>
	<link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>
  	<?php include("fragments/topbar.php") ?>
  	<div class="container-fluid">
  		<div class="row">
  			<?php include("fragments/sidebar.php") ?>
  			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  				<h1 class="page-header">Edit "<?php echo $season_name ?>"</h1>
  				<?php
  				echo '<form action="/edit_season_hand.php?season_id=' . $_GET["season_id"] . '" method="post">
	  				<div class="form-group">
	  				<label for="season_name">Season name</label>
	  				<input type="text" class="form-control" id="season_name" name="season_name" value="' . $season_name . '" required>
	  				</div>
	  				<div class="form-group">
	  				<label for="date_start">Start Date</label>
	  				<input type="date" class="form-control" id="date_start" name="date_start" value="' . $date_start . '">
	  				</div>
	  				<div class="form-group">
	  				<label for="date_end">End Date</label>
	  				<input type="date" class="form-control" id="date_end" name="date_end" value="' . $date_end . '">
	  				</div>
	  				<div class="form-group">
			            <label for="rank_1_pts">Points earned for #1</label>
			            <input type="number" class="form-control" id="rank_1_pts" name="rank_1_pts" value="' . $ranks[1] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_2_pts">Points earned for #2</label>
			            <input type="number" class="form-control" id="rank_2_pts" name="rank_2_pts" value="' . $ranks[2] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_3_pts">Points earned for #3</label>
			            <input type="number" class="form-control" id="rank_3_pts" name="rank_3_pts" value="' . $ranks[3] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_4_pts">Points earned for #4</label>
			            <input type="number" class="form-control" id="rank_4_pts" name="rank_4_pts" value="' . $ranks[4] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_5_pts">Points earned for #5</label>
			            <input type="number" class="form-control" id="rank_5_pts" name="rank_5_pts" value="' . $ranks[5] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_7_pts">Points earned for #7</label>
			            <input type="number" class="form-control" id="rank_7_pts" name="rank_7_pts" value="' . $ranks[7] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_9_pts">Points earned for #9</label>
			            <input type="number" class="form-control" id="rank_9_pts" name="rank_9_pts" value="' . $ranks[9] . '" required>
			        </div>
			        <div class="form-group">
			            <label for="rank_13_pts">Points earned for #13</label>
			            <input type="number" class="form-control" id="rank_13_pts" name="rank_13_pts" value="' . $ranks[13] . '" required>
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
		        </form>';
		        ?>
		    </div>
		</div>
	</div>
	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

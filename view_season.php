<?php
include("db/sql.php");
$season_id = $_GET["season_id"];
$sql_get_season = "SELECT * FROM rs_seasons WHERE id = " . $season_id;
$season = dbQuery($sql_get_season);

foreach($season as $data) {
  $season_name = $data["season_name"];
  $date_start = $data["date_start"];
  $date_end = $data["date_end"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View "<?php echo $season_name ?>" | SCFGC Ranking System</title>
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include("/fragments/topbar.php") ?>
    <div class="container-fluid">
      <div class="row">
        <?php include("/fragments/sidebar.php") ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">View "<?php echo $season_name ?>"</h1>
          <div class="table-responsive">
            <table class="table table-striped">
            	<thead>
                	<tr>
                		<th>Season Name</th>
                		<th>Start Date</th>
                    <th>End Date</th>
                	</tr>
            	</thead>
              <tbody>
             		<?php
                echo "<tr>";
                echo "<td>" . $season_name . "</td>";
                echo "<td>" . $date_start . "</td>";
                echo "<td>" . $date_end . "</td>";
                echo "</tr>";
                ?>
              </tbody>
            </table>
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Player Name</th>
                    <th>Points</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                /* Create array to store the amount of points earned for each rank */
                $season_rank_pts = [];

                /* Get all individual player results for season */
                $sql_get_season_pts = "SELECT * FROM rs_season_pts WHERE season_id = " . $season_id;
                $query_season_pts = dbQuery($sql_get_season_pts);

                foreach($query_season_pts as $data) {
                  $season_rank_pts[$data["rank"]] = $data["points"];
                }

                /* Create array for season ranks */
                $season_results = [];

                /* Get all individual player results for season */
                $sql_get_season_results = "SELECT * FROM rs_event_results WHERE season_id = " . $season_id;
                $event_results = dbQuery($sql_get_season_results);

                /* Total up players' points earned through entire season */
                foreach($event_results as $event_result) {
                  if(array_key_exists($event_result["player_name"], $season_results)) {
                    // If player already exists in the season results...
                    //Add to existing points
                    $season_results[$event_result["player_name"]] += $season_rank_pts[$event_result["player_rank"]];
                  } else {
                    // If the player doesn't exist in the season results...
                    // Create a new index
                    $season_results[$event_result["player_name"]] = $season_rank_pts[$event_result["player_rank"]];
                  }
                }

                /* Sort the players' rankings from highest to lowest */
                arsort($season_results);

                /* Display the player rankings */
                $rank_num = 1;
                $prev_result_total = -1;

                foreach($season_results as $player_name => $total_season_pts) {
                  if(intval($total_season_pts) < $prev_result_total)
                    ++$rank_num;

                  echo "<tr>";
                  echo "<td>$rank_num</td>";
                  echo "<td>$player_name</td>";
                  echo "<td>$total_season_pts</td>";
                  echo "</tr>";

                  $prev_result_total = intval($total_season_pts);
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

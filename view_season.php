<?php
include("db/sql.php");
$season_id = $_GET["season_id"];
$sql_get_season = "SELECT * FROM rs_seasons WHERE id = " . $season_id;
$season = dbQuery($sql_get_season);

foreach($season as $data) {
  $season_num = $data["season_num"];
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
                    <th>Season #</th>
                		<th>Season Name</th>
                		<th>Start Date</th>
                    <th>End Date</th>
                	</tr>
            	</thead>
              <tbody>
             		<?php
                echo "<tr>";
                echo "<td>" . $season_num . "</td>";
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

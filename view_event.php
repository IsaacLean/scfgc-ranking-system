<?php
include("db/sql.php");
$event_id = $_GET["event_id"];
$sql_get_event = "SELECT * FROM rs_events WHERE id = " . $event_id;
$event = dbQuery($sql_get_event);

foreach($event as $data) {
  $event_name = $data["event_name"];
  $date = $data["event_date"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View "<?php echo $event_name ?>" | SCFGC Ranking System</title>
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
          <h1 class="page-header">View "<?php echo $event_name ?>"</h1>
          <div class="table-responsive">
            <table class="table table-striped">
            	<thead>
                	<tr>
                		<th>Event Name</th>
                		<th>Date</th>
                    <th></th>
                	</tr>
            	</thead>
              <tbody>
             		<?php
                echo "<tr>";
                echo "<td>" . $event_name . "</td>";
                echo "<td>" . $date . "</td>";
                echo "</tr>";
                ?>
              </tbody>
            </table>
            <table class="table table-striped">
              <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Player Name</th>
                  </tr>
              </thead>
              <tbody>
                <?php
                /* Get players & ranks */
                $sql_get_event_results = "SELECT * FROM rs_event_results WHERE event_id = " . $event_id;
                $event_results = dbQuery($sql_get_event_results);

                foreach($event_results as $result) {
                  echo "<tr>";
                  echo "<td>" . $result["player_rank"] . "</td>";
                  echo "<td>" . $result["player_name"] . "</td>";
                  echo "</tr>";
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

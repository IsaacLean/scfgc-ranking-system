<?php
include("/db/sql.php");

$sql_get_seasons = "SELECT id, season_name FROM rs_seasons";
$seasons = dbQuery($sql_get_seasons);
$seasonArr = [];

foreach($seasons as $season) {
  $seasonData = array(
    "season_id" => $season["id"],
    "season_name"  => $season["season_name"]
  );

  array_push($seasonArr, $seasonData);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new event | SCFGC Ranking System</title>
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
          <h1 class="page-header">Create new event</h1>
            <form action="/create_event_hand.php" method="post">
              <div class="form-group">
                <label for="season">Season #</label>
                <select class="form-control" id="season" name="season" required>
                  <?php
                  foreach($seasonArr as $season) {
                    echo "<option value=\"" . $season["season_id"] . "\">" . $season["season_name"] . "</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label for="event_num">Event number</label>
                <input type="number" class="form-control" id="event_num" name="event_num" placeholder="Ex: 9" required>
              </div>
              <div class="form-group">
                <label for="event_name">Event name</label>
                <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Ex: Fight Night: Ranked Edition #9" required>
              </div>
              <div class="form-group">
                <label for="event_date">Date</label>
                <input type="date" class="form-control" id="event_date" name="event_date">
              </div>
              <div class="form-group">
                <label for="player_rank_1">Player name for rank #1</label>
                <input type="text" class="form-control" id="player_rank_1" name="player_rank_1">
              </div>
              <div class="form-group">
                <label for="player_rank_2">Player name for rank #2</label>
                <input type="text" class="form-control" id="player_rank_2" name="player_rank_2">
              </div>
              <div class="form-group">
                <label for="player_rank_3">Player name for rank #3</label>
                <input type="text" class="form-control" id="player_rank_3" name="player_rank_3">
              </div>
              <div class="form-group">
                <label for="player_rank_4">Player name for rank #4</label>
                <input type="text" class="form-control" id="player_rank_4" name="player_rank_4">
              </div>
              <div class="form-group">
                <label for="player_rank_5">Player name 1 for rank #5</label>
                <input type="text" class="form-control" id="player_rank_5" name="player_rank_5">
              </div>
              <div class="form-group">
                <label for="player_rank_5-2">Player name 2 for rank #5</label>
                <input type="text" class="form-control" id="player_rank_5-2" name="player_rank_5-2">
              </div>
              <div class="form-group">
                <label for="player_rank_7">Player name 1 for rank #7</label>
                <input type="text" class="form-control" id="player_rank_7" name="player_rank_7">
              </div>
              <div class="form-group">
                <label for="player_rank_7-2">Player name 2 for rank #7</label>
                <input type="text" class="form-control" id="player_rank_7-2" name="player_rank_7-2">
              </div>
              <div class="form-group">
                <label for="player_rank_9">Player name 1 for rank #9</label>
                <input type="text" class="form-control" id="player_rank_9" name="player_rank_9">
              </div>
              <div class="form-group">
                <label for="player_rank_9-2">Player name 2 for rank #9</label>
                <input type="text" class="form-control" id="player_rank_9-2" name="player_rank_9-2">
              </div>
              <div class="form-group">
                <label for="player_rank_9-3">Player name 3 for rank #9</label>
                <input type="text" class="form-control" id="player_rank_9-3" name="player_rank_9-3">
              </div>
              <div class="form-group">
                <label for="player_rank_9-4">Player name 4 for rank #9</label>
                <input type="text" class="form-control" id="player_rank_9-4" name="player_rank_9-4">
              </div>
              <div class="form-group">
                <label for="player_rank_13">Player name 1 for rank #13</label>
                <input type="text" class="form-control" id="player_rank_13" name="player_rank_13">
              </div>
              <div class="form-group">
                <label for="player_rank_13-2">Player name 2 for rank #13</label>
                <input type="text" class="form-control" id="player_rank_13-2" name="player_rank_13-2">
              </div>
              <div class="form-group">
                <label for="player_rank_13-3">Player name 3 for rank #13</label>
                <input type="text" class="form-control" id="player_rank_13-3" name="player_rank_13-3">
              </div>
              <div class="form-group">
                <label for="player_rank_13-4">Player name 4 for rank #13</label>
                <input type="text" class="form-control" id="player_rank_13-4" name="player_rank_13-4">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
      </div>
    </div>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

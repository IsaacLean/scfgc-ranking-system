<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage seasons | SCFGC Ranking System</title>
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
          <h1 class="page-header">Manage seasons</h1>
          <div class="table-responsive">
            <table class="table table-striped">
            	<thead>
                	<tr>
                		<th>Season Name</th>
                		<th>Start Date</th>
                		<th>End Date</th>
                		<th></th>
                    <th></th>
                	</tr>
            	</thead>
              <tbody>
             		<?php
                /* Print all seasons in database */
                include("db/sql.php");
                $sql_get_seasons = "SELECT * FROM rs_seasons ORDER BY id DESC";
                $seasons = dbQuery($sql_get_seasons);
                
                foreach($seasons as $season) {
                  echo "<tr>";
                  echo "<td>" . $season["season_name"] . "</td>";
                  echo "<td>" . $season["date_start"] . "</td>";
                  echo "<td>" . $season["date_end"] . "</td>";
                  echo "<td><a href=\"/edit_season.php?season_id=" . $season["id"] . "\"><button type=\"button\" class=\"btn btn-default\">Edit</button></a></td>";
                  echo "<td><a href=\"/view_season.php?season_id=" . $season["id"] . "\"><button type=\"button\" class=\"btn btn-default\">View</button></a></td>";
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

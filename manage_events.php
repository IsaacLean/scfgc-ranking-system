<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage events | SCFGC Ranking System</title>
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
          <h1 class="page-header">Manage events</h1>
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
                /* Print all events in database */
                include("db/sql.php");
                $sql_get_events = "SELECT * FROM rs_events ORDER BY id DESC";
                $events = dbQuery($sql_get_events);
                
                foreach($events as $event) {
                  echo "<tr>";
                  echo "<td>" . $event["event_name"] . "</td>";
                  echo "<td>" . $event["event_date"] . "</td>";
                  echo "<td><a href=\"/view_event.php?event_id=" . $event["id"] . "\"><button type=\"button\" class=\"btn btn-default\">View</button></a></td>";
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

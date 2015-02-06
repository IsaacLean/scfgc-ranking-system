<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new season | SCFGC Ranking System</title>
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
          <h1 class="page-header">Create new season</h1>
          <div class="table-responsive">
            <form>
              <div class="form-group">
                <label for="season_name">Season name</label>
                <input type="text" class="form-control" id="season_name" placeholder="Ex: Season 5">
              </div>
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="start_date">
              </div>
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="end_date">
              </div>
              <div class="form-group">
                <label for="rank_1_pts">Points earned for #1</label>
                <input type="number" class="form-control" id="rank_1_pts" placeholder="Ex: 32">
              </div>
              <div class="form-group">
                <label for="rank_2_pts">Points earned for #2</label>
                <input type="number" class="form-control" id="rank_2_pts" placeholder="Ex: 20">
              </div>
              <div class="form-group">
                <label for="rank_3_pts">Points earned for #3</label>
                <input type="number" class="form-control" id="rank_3_pts" placeholder="Ex: 12">
              </div>
              <div class="form-group">
                <label for="rank_4_pts">Points earned for #4</label>
                <input type="number" class="form-control" id="rank_4_pts" placeholder="Ex: 8">
              </div>
              <div class="form-group">
                <label for="rank_5_pts">Points earned for #5</label>
                <input type="number" class="form-control" id="rank_5_pts" placeholder="Ex: 4">
              </div>
              <div class="form-group">
                <label for="rank_7_pts">Points earned for #7</label>
                <input type="number" class="form-control" id="rank_7_pts" placeholder="Ex: 2">
              </div>
              <div class="form-group">
                <label for="rank_9_pts">Points earned for #9</label>
                <input type="number" class="form-control" id="rank_9_pts" placeholder="Ex: 1">
              </div>
              <div class="form-group">
                <label for="rank_13_pts">Points earned for #13</label>
                <input type="number" class="form-control" id="rank_13_pts" placeholder="Ex: 1">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

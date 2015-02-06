
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SCFGC Ranking System</title>

    <!-- Bootstrap core CSS -->
    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SCFGC Ranking System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">System Management</a></li>
            <li><a href="#">Account Settings</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        	<h3>Seasons</h3>
			<ul class="nav nav-sidebar">
            	<li class="active"><a href="#">Manage seasons</a></li>
	            <li><a href="#">Create new season</a></li>
        	</ul>
        	<h3>Events</h3>
          	<ul class="nav nav-sidebar">
	            <li><a href="#">Manage events</a></li>
	            <li><a href="#">Create new event</a></li>
          	</ul>
          	<h3>Rankings</h3>
          	<ul class="nav nav-sidebar">
	            <li><a href="">Show rankings for a season</a></li>
          	</ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Seasons</h1>
          <div class="table-responsive">
            <table class="table table-striped">
            	<thead>
                	<tr>
                		<th>Season Name</th>
                		<th>Start Date</th>
                		<th>End Date</th>
                		<th></th>
                	</tr>
            	</thead>
              	<tbody>
             		<tr>
                		<td>Season 1</td>
                		<td>10/10/2014</td>
                		<td>6/5/2015</td>
                		<td><a href="#"><button type="button" class="btn btn-default">Edit</button></a></td>
               		</tr>
                	<tr>
                		<td>Season 2</td>
                		<td>10/10/2015</td>
                		<td>6/5/2016</td>
                		<td><a href="#"><button type="button" class="btn btn-default">Edit</button></a></td>
               		</tr>
               		<tr>
                		<td>Season 3</td>
                		<td>10/10/2016</td>
                		<td>6/5/2017</td>
                		<td><a href="#"><button type="button" class="btn btn-default">Edit</button></a></td>
               		</tr>
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

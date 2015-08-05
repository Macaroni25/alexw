<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
   <?php    
     include 'navbar.php';        
    ?>
    
    <div class="container-fluid">
      <div class="row">
        <div class="container-fluid">
          <div class="jumbotron">
            <h1>Alex Weininger</h1>
            <p class="text-info">About me, my projects and more...</p>
            <p>
              <a class="btn btn-primary btn-lg" href="about.php" role="button">Learn more</a>
            </p>
          </div>
        </div></div>
      <div class="row">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active">
              <a href="#">About</a>
            </li>
            <li role="presentation">
              <a href="#">Projects</a>
            </li>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">About me</h3>
            </div>
            <div class="panel-body">insert intriging and interesting things about me</div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Projects</h3>
            </div>
            <div class="panel-body">about my projects</div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>
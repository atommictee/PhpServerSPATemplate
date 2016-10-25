<!DOCTYPE html>
<html ng-app="thailuxuryApp">
<head>
	<base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Thailand Kingdom of Luxury</title>

    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thkingdomofluxury.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Thailand Kingdom of Luxury</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="/hotels.resorts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hotels & Resorts <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Northern Thailand</a></li>
                            <li><a href="/hotels.resorts#central">Central & Eastern Regions</a></li>
                            <li><a href="/hotels.resorts#southern">Southern Thailand</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Find Dining</a>
                    </li>
                    <li>
                        <a href="#">One in A Lifetime</a>
                    </li>
                    <li>
                        <a href="#">Made in Thailand</a>
                    </li>
                    <li>
                        <a href="#">Wellness</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div ng-view  autoscroll="true"></div>

    <div class="footer">
      <div class="col-md-12 text-gold-header6">
          <p>© 2016 by Thailand Kingdom of Luxury</p>
      </div>
    </div>
</body>
<script src="libs/jquery/jquery.min.js"></script>
<script src="libs/angular/angular.min.js"></script>
<script src="libs/angular-route/angular-route.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/angular/angular-animate.min.js"></script>
<script src="libs/angular/angular-ui-router.min.js"></script>
<script src="libs/angular/angular-ui-bootstrap.min.js"></script>
<script src="libs/angular/loading-bar/loading-bar.min.js"></script>
<script src="libs/angular/angular-messages.js"></script>
<script src="libs/moment.min.js"></script>
<script src="libs/angular-translate.min.js"></script>



<script src="app/app.module.js"></script>
<script src="app/app.routes.js"></script>

</html>

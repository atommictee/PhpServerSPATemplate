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
                        <a href="/">{{ 'NAV_HOME' | translate }}</a>
                    </li>
                    <li class="dropdown">
                        <a href="/hotels.resorts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_HOTELS' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/hotels.resorts#northern">{{ 'NAV_NORTHTH' | translate }}</a></li>
                            <li><a href="/hotels.resorts#central">{{ 'NAV_CENTRAL' | translate }}</a></li>
                            <li><a href="/hotels.resorts#southern">{{ 'NAV_SOUTHEN' | translate }}</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/find.dining">{{ 'NAV_DINING' | translate }}</a>
                    </li>
                    <li>
                        <a href="#">{{ 'NAV_LIFTIME' | translate }}</a>
                    </li>
                    <li>
                        <a href="#">{{ 'NAV_AFTERDARK' | translate }}</a>
                    </li>
                    <li>
                        <a href="#">{{ 'NAV_MADEINTH' | translate }}</a>
                    </li>
                    <li>
                        <a href="#">{{ 'NAV_WELLNESS' | translate }}</a>
                    </li>
                    <li>
                        <a href="#">{{ 'NAV_MEDICALTOURISM' | translate }}</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_LANG' | translate }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" ng-click="changeLanguage('th')">ไทย</a></li>
                            <li><a href="#" ng-click="changeLanguage('en')">English</a></li>
                        </ul>
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
<script src="libs/angular-cookies/angular-cookies.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/angular/angular-animate.min.js"></script>
<script src="libs/angular/angular-ui-router.min.js"></script>
<script src="libs/angular/angular-ui-bootstrap.min.js"></script>
<script src="libs/angular/loading-bar/loading-bar.min.js"></script>
<script src="libs/angular/angular-messages.js"></script>
<script src="libs/moment.min.js"></script>
<script src="libs/angular-translate/angular-translate.min.js"></script>
<script src="libs/angular-translate/angular-translate-storage-cookie/angular-translate-storage-cookie.js"></script>
<script src="libs/angular-translate/angular-translate-storage-local/angular-translate-storage-local.min.js"></script>

<script src="app/app.module.js"></script>
<script src="app/app.routes.js"></script>

<script src="app/shared/lang/english.js"></script>
<script src="app/shared/lang/thai.js"></script>

</html>

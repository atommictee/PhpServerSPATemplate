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
    <link href="css/card.views.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" ng-controller="HeaderController">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="navbar-toggle lang-toggle" ng-click="changeLanguage()">
                    {{lang}}
                </button>
                <a class="navbar-brand visible-xs-block" href="#">Thailand Kingdom of Luxury</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav language hidden-xs">
                    <li><a href="#" ng-click="changeLanguage('en')">English</a></li>
                    <li class="line">&nbsp;</li>
                    <li><a href="#" ng-click="changeLanguage('th')">ภาษาไทย</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li ng-class="{navactive: isActive('/')}">
                        <a href="/">{{ 'NAV_HOME' | translate }}</a>
                    </li>
                    <li class="dropdown" ng-class="{navactive: isActive('/hotels.resorts')}">
                        <a href="/hotels.resorts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_HOTELS' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/hotels.resorts#northern">{{ 'NAV_NORTHTH' | translate }}</a></li>
                            <li><a href="/hotels.resorts#central">{{ 'NAV_CENTRAL' | translate }}</a></li>
                            <li><a href="/hotels.resorts#southern">{{ 'NAV_SOUTHEN' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/find.dining')}">
                        <a href="/find.dining" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_DINING' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/find.dining#michelin">{{ 'NAV_MICHELIN' | translate }}</a></li>
                            <li><a href="/find.dining#french">{{ 'NAV_FRENCH' | translate }}</a></li>
                            <li><a href="/find.dining#flavours.thailand">{{ 'NAV_FLAVOURSTH' | translate }}</a></li>
                            <li><a href="/find.dining#imperial">{{ 'NAV_IMPERIAL' | translate }}</a></li>
                            <li><a href="/find.dining#italy">{{ 'NAV_WITHLOVEITALY' | translate }}</a></li>
                            <li><a href="/find.dining#rising.sun">{{ 'NAV_RISINGSUN' | translate }}</a></li>
                            <li><a href="/find.dining#special">{{ 'NAV_SPECIALTREATS' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/once.lift.time')}">
                        <a href="/once.lift.time" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_LIFTIME' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/once.lift.time#yachting">{{ 'NAV_YACHTING' | translate }}</a></li>
                            <li><a href="/once.lift.time#goffing">{{ 'NAV_GOFFING' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/after.dark')}">
                        <a href="/after.dark" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_AFTERDARK' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/after.dark#champagne.cigars.whisky">{{ 'NAV_WISKY' | translate }}</a></li>
                            <li><a href="/after.dark#clubs.bars">{{ 'NAV_CLUBS' | translate }}</a></li>
                            <li><a href="/after.dark#beach.clubs">{{ 'NAV_BEACH' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/made.thailand')}">
                        <a href="/made.thailand" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_MADEINTH' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/made.thailand#fashion">{{ 'NAV_FASHION' | translate }}</a></li>
                            <li><a href="/made.thailand#jewellery">{{ 'NAV_JEWELLERY' | translate }}</a></li>
                            <li><a href="/made.thailand#spa.products">{{ 'NAV_SPA' | translate }}</a></li>
                            <li><a href="/made.thailand#decor.interior.design">{{ 'NAV_DECOR' | translate }}</a></li>
                            <li><a href="/made.thailand#bespoke.tailoring">{{ 'NAV_BESPOKE' | translate }}</a></li>
                            <li><a href="/made.thailand#luxury.shopping.guide">{{ 'NAV_LUXURYSHOP' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/wellness')}">
                        <a href="/wellness" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ 'NAV_WELLNESS' | translate }}<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/wellness#spa.massage">{{ 'NAV_SPAMASSAGE' | translate }}</a></li>
                            <li><a href="/wellness#yoga">{{ 'NAV_YOGA' | translate }}</a></li>
                            <li><a href="/wellness#meditation">{{ 'NAV_MEDITATION' | translate }}</a></li>
                            <li><a href="/wellness#rehab.detox">{{ 'NAV_REHAB' | translate }}</a></li>
                        </ul>
                    </li>
                    <li ng-class="{navactive: isActive('/medical.tourism')}">
                        <a href="/medical.tourism">{{ 'NAV_MEDICALTOURISM' | translate }}</a>
                    </li>
                    <li ng-class="{navactive: isActive('/contact')}">
                        <a href="/contact">{{ 'NAV_INFORMATION' | translate }}</a>
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

<script src="app/shared/lang/english/main.js"></script>
<script src="app/shared/lang/english/connect.js"></script>
<script src="app/shared/lang/english/dinning.js"></script>
<script src="app/shared/lang/english/home.js"></script>
<script src="app/shared/lang/english/hotel.js"></script>
<script src="app/shared/lang/english/madeinth.js"></script>
<script src="app/shared/lang/english/once.js"></script>
<script src="app/shared/lang/english/wellness.js"></script>


<script src="app/shared/lang/thai/main.js"></script>
<script src="app/shared/lang/thai/connect.js"></script>
<script src="app/shared/lang/thai/dinning.js"></script>
<script src="app/shared/lang/thai/home.js"></script>
<script src="app/shared/lang/thai/hotel.js"></script>
<script src="app/shared/lang/thai/madeinth.js"></script>
<script src="app/shared/lang/thai/once.js"></script>
<script src="app/shared/lang/thai/wellness.js"></script>

<script src="app/shared/slide/card-view.js"></script>


<script src="app/components/once.lifetime/onceLiftController.js"></script>



</html>

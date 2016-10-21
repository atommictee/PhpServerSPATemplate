thailuxuryApp.config(function($routeProvider, $locationProvider) {

    $routeProvider
  		.when('/home', {
  			templateUrl: 'app/components/home.html'
  		})

		.otherwise(
      {redirectTo:'/home'}
    );

		$locationProvider.html5Mode(true);
});

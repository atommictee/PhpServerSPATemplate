thailuxuryApp.config(function($routeProvider, $locationProvider) {

    $routeProvider
  		.when('/', {
  			templateUrl: 'app/components/home/view.html'
  		})

		.when('/hotels.resorts', {
  			templateUrl: 'app/components/hotels.resorts/view.html'
  		})
	
		.when('/find.dining', {
  			templateUrl: 'app/components/dining/view.html'
  		})

			

	.otherwise(
      {redirectTo:'/'}
    );

		$locationProvider.html5Mode(true);
});

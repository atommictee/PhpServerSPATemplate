thailuxuryApp.config(function($routeProvider, $locationProvider) {

    $routeProvider
  		.when('/', {
  			templateUrl: 'app/components/home/view.html'
  		})

			.when('/hotels.resorts', {
  			templateUrl: 'app/components/hotels.resorts/view.html'
  		})

			

		.otherwise(
      {redirectTo:'/'}
    );

		$locationProvider.html5Mode(true);
});

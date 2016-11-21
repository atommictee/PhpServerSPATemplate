var thailuxuryApp = angular.module('thailuxuryApp', ['ngRoute', 'ngAnimate','pascalprecht.translate','ngCookies']);

thailuxuryApp.config(function ($translateProvider) {
    $translateProvider.translations('en', mainEN);
    $translateProvider.translations('en', homeEN);
    $translateProvider.translations('en', hotelEN);
    $translateProvider.translations('en', dinningEN);
    $translateProvider.translations('en', onceEN);
    $translateProvider.translations('en', wellnessEN);
    $translateProvider.translations('en', madeinthEN);
    $translateProvider.translations('en', connectEN);
    $translateProvider.translations('en', medicalEN);
    $translateProvider.translations('en', afterDarkEN);

    $translateProvider.translations('th', mainTH);
    $translateProvider.translations('th', homeTH);
    $translateProvider.translations('th', hotelTH);
    $translateProvider.translations('th', dinningTH);
    $translateProvider.translations('th', onceTH);
    $translateProvider.translations('th', wellnessTH);
    $translateProvider.translations('th', madeinthTH);
    $translateProvider.translations('th', connectTH);
    $translateProvider.translations('th', medicalTH);
    $translateProvider.translations('th', afterDarkTH);
    
    $translateProvider.preferredLanguage('en');
     // remember language
    $translateProvider.useLocalStorage();
});



thailuxuryApp.run(function ($rootScope, $translate) {

    $translate.use() === 'en'?$rootScope.lang = "ไทย" : $rootScope.lang = 'EN';

    $rootScope.changeLanguage = function (key) {
        if(key && key != ''){
            $translate.use(key);
        }
        else{
            if($translate.use() === 'en'){
                $translate.use('th');
                $rootScope.lang = 'EN'
            }else
            {
                $translate.use('en');
                $rootScope.lang = 'ไทย'
            }
        }
    };


});

thailuxuryApp.controller('HeaderController', ['$scope','$location', function($scope, $location) {
    $scope.isActive = function (viewLocation) { 
        return viewLocation === $location.path();
    };
}]);

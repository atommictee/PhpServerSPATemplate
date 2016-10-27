var thailuxuryApp = angular.module('thailuxuryApp', ['ngRoute', 'pascalprecht.translate','ngCookies']);

thailuxuryApp.config(function ($translateProvider) {
    $translateProvider.translations('en', translationsEN);
    $translateProvider.translations('th', translationsTH);
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

    $scope.test="xxx";
}]);

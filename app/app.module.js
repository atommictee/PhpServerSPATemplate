var thailuxuryApp = angular.module('thailuxuryApp', ['ngRoute', 'pascalprecht.translate','ngCookies']);

thailuxuryApp.config(function ($translateProvider) {
    $translateProvider.translations('en', translationsEN);
    $translateProvider.translations('th', translationsTH);
    $translateProvider.preferredLanguage('en');
     // remember language
    $translateProvider.useLocalStorage();
});


thailuxuryApp.run(function ($rootScope, $translate) {
    $rootScope.changeLanguage = function (key) {
        $translate.use(key);
    };
});
/**
     * You must include the dependency on 'ngMaterial' 
     */
    var app = angular.module('Kim_Board', ['ngMaterial',"ngRoute", 'ui.router']);


app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');
 
    $stateProvider
        .state('login', {
            url:'/login',
            template : "<h1>Banana</h1><p>Bananas contain around 75% water.</p>"
        })

        .state('register', {
            url:'/register',
            template : "<h1>asdasds</h1><p>Bananas contain around 75% water.</p>"
        })
 
}]);

app.controller("menuCtrl", ["$scope", "$state", function($scope, $state){
    $scope.login = function(){
        $state.go('login');
    }

    $scope.register = function(){
        $state.go('register')
    }

}]);
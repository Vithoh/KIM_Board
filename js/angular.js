/**
     * You must include the dependency on 'ngMaterial' 
     */
	// create the module and name it Kim_Board
    var Kim_Board = angular.module('Kim_Board', ['ngMaterial',"ngRoute", 'ui.router']);


Kim_Board.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/');
 
    $stateProvider
        .state('login', {
            url:'/login',
            templateUrl : "pages/login.htm"
        })

        .state('register', {
            url:'/register',
            templateUrl : "pages/register.htm"
        })
 
}]);

Kim_Board.controller("menuCtrl", ["$scope", "$state", function($scope, $state){
    $scope.login = function(){
        $state.go('login');
    }

    $scope.register = function(){
        $state.go('register')
    }

}]);
/**
     * You must include the dependency on 'ngMaterial' 
     */
    var app = angular.module('Kim_Board', ['ngMaterial',"ngRoute", 'ui.router']);

/*app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        template : "<h1>Main</h1><p>Click on the links to change this content</p>"
    })
    .when("/login", {
        template : "<h1>Banana</h1><p>Bananas contain around 75% water.</p>"
    })
    .when("/register", {
        template : "<h1>Tomato</h1><p>Tomatoes contain around 95% water.</p>"
    });
});
*/
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

}])
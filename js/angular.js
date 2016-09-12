/**
     * You must include the dependency on 'ngMaterial' 
     */
    var app = angular.module('Kim_Board', ['ngMaterial',"ngRoute"]);

app.config(function($routeProvider) {
  $routeProvider
  .when("/", {
    url : "/"
  })
  .when("/login", {
    templateUrl : "template/login.htm"
  })
  .when("/register", {
    templateUrl : "template/register.htm"
  })
});

app.controller("menuCtrl", ["$scope", function($scope){
    $scope.test = function(){
        alert("penisss");
    }

}])
var app = angular.module('app', ['ui.bootstrap', 'ngAnimate', 'ngTouch']);
app.controller('homeCtrl', function($scope) {
    $scope.myInterval = 10000;
    $scope.noWrapSlides = false;
    $scope.active = 2;
    var slides = $scope.slides = [{
            image: 'images/wallpaper1.jpg',
            id: 0
        },{
            image: 'images/wallpaper2.jpg',
            id: 1
        },{
            image: 'images/wallpaper3.jpg',
            id: 2
        },{
            image: 'images/wallpaper4.jpg',
            id: 3
        }];
});
var app = angular.module('app', ['ui.bootstrap', 'ngTouch', 'ngAnimate']);
app
    .controller('homeCtrl', function($scope, $document, $timeout) {
        $scope.showLogo = false;
        $scope.showLetters = false;
        $scope.showSocial = false;

        $timeout(function() {
            $scope.showLogo = true;

        }, 1000);

        $timeout(function() {
            $scope.showLetters = true;

        }, 2000);

        $timeout(function() {
            $scope.showSocial = true;

        }, 3000);

        $scope.myInterval = 3000;
        $scope.noWrapSlides = false;
        $scope.active = 0;
        var slides = $scope.slides = [{
            image: 'images/wallpaper3.jpg',
            id: 0
        }, {
            image: 'images/wallpaper1.jpg',
            id: 1
        }, {
            image: 'images/wallpaper2.jpg',
            id: 2
        }, {
            image: 'images/wallpaper4.jpg',
            id: 3
        }];
    });
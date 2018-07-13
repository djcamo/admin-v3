angular.module('app', ['ngRoute', 'controller', 'ui.bootstrap'])

.config(function($routeProvider, $locationProvider) {
	
	$locationProvider.hashPrefix('');
	$routeProvider
	.when('/home', {
		templateUrl: 'views/home.php'
	})
	.when('/pages', {
		templateUrl: 'views/pages.php',
		controller: 'PagesCtrl'
	})
	.when('/sliders', {
		templateUrl: 'views/sliders.php',
		controller: 'SlidersCtrl'
	})
	.when('/testimonials', {
		templateUrl: 'views/testimonials.php',
		controller: 'TestimonialsCtrl'
	})
	.when('/products', {
		templateUrl: 'views/products.php',
		controller: 'ProductsCtrl'
	})
	.when('/faqs', {
		templateUrl: 'views/faqs.php',
		controller: 'FaqsCtrl'
	})
	.when('/services', {
		templateUrl: 'views/services.php',
		controller: 'ServicesCtrl'
	})
	.otherwise({ redirectTo: '/home' }); 
})
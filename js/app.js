angular.module('app', ['ngRoute', 'controller', 'ui.bootstrap', 'ngFileUpload'])

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
	.when('/company', {
		templateUrl: 'views/company.php',
		controller: 'CompanyCtrl'
	})
	.when('/config', {
		templateUrl: 'views/config.php',
		controller: 'ConfigCtrl'
	})
	.otherwise({ redirectTo: '/home' }); 
})
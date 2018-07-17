(function() {

  "use strict";
	angular
		.module('controller',[])
		
		.directive('customOnChange', function() {
			return {
			  restrict: 'A',
			  link: function (scope, element, attrs) {
				var onChangeHandler = scope.$eval(attrs.customOnChange);
				element.bind('change', onChangeHandler);
			  }
			};
		  })

		.controller('PagesCtrl', ['$scope', '$http', '$uibModal', function($scope, $http, $modal, $filter) {	
			getPages();
			function getPages(){
				$http.get('ajax/get-items.php?table=pages').then(function(data){
					$scope.pages = data;		
				})	
			};	
			$scope.deletePage = function($params) {
				var cnfrm = confirm("Are you sure to delete this item?");
				if(cnfrm) {
					$http.post('ajax/delete-item.php?table=pages', {'id':$params}).then(function(data) {
						getPages();
					})			
				} 	
			}	
			$scope.addShow = function() {
				$('#addPage').modal('show');
			}
			$scope.addPage = function($params) {		
				$http.post('ajax/add-item.php?table=pages',{'name':$params.Name, 'pageTitle':$params.pageTitle, 'pageDescription':$params.pageDescription, 'slug':$params.Slug, 'content':$params.Content, 'service':$params.Service}).then(function(data){
					getPages();
					$('#addPage').modal('hide');
				})			
			}			
		}])
		
		.controller('TestimonialsCtrl', ['$scope', '$http', '$uibModal', function($scope, $http, $modal, $filter) {	
			getTestmonials();
			function getTestmonials(){
				$http.get('ajax/get-items.php?table=testimonials').then(function(data){
					$scope.testimonials = data;		
				})	
			};	
			$scope.deleteTestimonial = function($params) {
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this record!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$http.post('ajax/delete-item.php?table=testimonials', {'id':$params}).then(function(data) {
							swal("Testimonial Deleted", "", "info");
							getTestmonials();
						})	
					}
				});
			}	
			$scope.changeTestimonialStatus = function(testimonial){
				testimonial.status = (testimonial.status=="Active" ? "Inactive" : "Active");
				$http.post('ajax/item-status.php?table=testimonials', {'id':testimonial}).then(function(data) {
					if(testimonial.status == "Active"){
						swal("Testimonial Enabled", "", "info");
					}else{
						swal("Testimonial Disabled", "", "info");
					}					
					getTestmonials();	
				})
			}
			$scope.uploadFile = function(event){
				$scope.imageName = event.target.files[0].name;
				console.log($scope.imageName);
			};
			$scope.addShow = function() {
				$('#addTestimonial').modal('show');
			}
			$scope.addTestimonial = function($params) {		
				$http.post('ajax/add-item.php?table=testimonials',{'username':$params.username, 'testimonial':$params.testimonial, 'position':$params.position, 'image':$scope.imageName}).then(function(data){
					getTestmonials();
					$('#addTestimonial').modal('hide');
					swal("Testimonial Added", "", "info");
				})			
			}				
		}])

		.controller('SlidersCtrl', ['$scope', '$http', '$uibModal', 'Upload', function($scope, $http, $modal, $filter, Upload) {	
			getSliders();
			function getSliders(){
				$http.get('ajax/get-items.php?table=sliders').then(function(data){
					$scope.sliders = data;		
				})	
			};	
			$scope.deleteSlide = function($params) {
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this record!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						$http.post('ajax/delete-item.php?table=sliders', {'id':$params}).then(function(data) {
							swal("Slide Deleted", "", "info");
							getSliders();
						})	
					}
				});				
			}
			$scope.uploadFile = function(event){
				$scope.imageName = event.target.files[0].name;
			};
			$scope.addShow = function() {
				$('#addSlide').modal('show');
			}
			$scope.uploadPic = function(file) {
				file.upload = Upload.upload({
				  url: 'ajax/upload.php',
				  data: { file: file},
				});
			
				file.upload.then(function (response) {
				  $timeout(function () {
					file.result = response.data;
				  });
				}, function (response) {
				  if (response.status > 0)
					$scope.errorMsg = response.status + ': ' + response.data;
				}, function (evt) {
				  // Math.min is to fix IE which reports 200% sometimes
				  file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
				});
			}
			$scope.addSlide = function($params) {		
				$http.post('ajax/add-item.php?table=sliders',{'alttext':$params.alttext, 'caption1':$params.caption1, 'caption2':$params.caption2, 'image':$scope.imageName}).then(function(data){
					getSliders();
					$('#addSlide').modal('hide');
					swal("Slide Added", "", "info");
				})			
			}		
						
		}])

		.controller('ServicesCtrl', ['$scope', '$http', '$uibModal', function($scope, $http, $modal, $filter) {	
			getServices();
			function getServices(){
				$http.get('ajax/get-items.php?table=services').then(function(data){
					$scope.services = data;		
				})	
			};	
			$scope.deleteService = function($params) {
				var cnfrm = confirm("Are you sure to delete this item?");
				if(cnfrm) {
					$http.post('ajax/delete-item.php?table=services', {'id':$params}).then(function(data) {
						getServices();
					})			
				} 	
			}	
			$scope.changeServiceStatus = function(service){
				service.status = (service.status=="Active" ? "Inactive" : "Active");
				$http.post('ajax/item-status.php?table=services', {'id':service}).then(function(data) {
					if(service.status == "Active"){
						swal("Service Enabled", "", "info");
					}else{
						swal("Service Disabled", "", "info");
					}					
					getTestmonials();	
				})
			}
			$scope.uploadFile = function(event){
				$scope.imageName = event.target.files[0].name;
			};
			$scope.addShow = function() {
				$('#addService').modal('show');
			}
			$scope.addService = function($params) {		
				$http.post('ajax/add-item.php?table=sliders',{'alttext':$params.alttext, 'caption1':$params.caption1, 'caption2':$params.caption2, 'image':$scope.imageName}).then(function(data){
					getServices();
					$('#addService').modal('hide');
					swal("Service Added", "", "info");
				})			
			}				
		}])

		.controller('ProductsCtrl', ['$scope', '$http', '$uibModal', function($scope, $http, $modal, $filter) {
			getProducts();
			function getProducts(){
				$http.get('ajax/get-items.php?table=products').then(function(data){
					$scope.products = data;		
				})	
			};
			$scope.uploadFile = function(event){
				$scope.imageName = event.target.files[0].name;
				console.log($scope.imageName);
			};
			$scope.addShow = function() {
				$('#addProduct').modal('show');
			}
			$scope.addProduct = function($params) {		
				$http.post('ajax/add-item.php?table=products',{'name':$params.Name, 'description':$params.Description, 'category':$params.Category, 'image':$scope.imageName, 'price':$params.Price, 'status':'Active'}).then(function(data){
					getProducts();
					$('#addProduct').modal('hide');
				})			
			}
			$scope.editShow = function(data) {
				$('#editProduct').modal('show');
				$scope.existingData = data;
			}
			$scope.updateProduct = function($params) {		
				$http.post('ajax/product/edit-product.php',{'id':$params.id, 'name':$params.name, 'description':$params.description, 'category':$params.category, 'image':$params.image, 'price':$params.price}).then(function(data){
					$('#editPage').modal('hide');
					getProducts();
					
				})			
			}	
			$scope.deleteProduct = function($params) {
				swal({
					title: "Are you sure?",
					text: "Once deleted, you will not be able to recover this record!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					$http.post('ajax/delete-item.php?table=products', {'id':$params}).then(function(data) {
						swal("Product Deleted", "", "info");
						getProducts();
					})	
				}
				});
			}			
			$scope.changeProductStatus = function(product){
				product.status = (product.status=="Active" ? "Inactive" : "Active");
				$http.post('ajax/item-status.php?table=products', {'id':product}).then(function(data) {
					if(product.status == "Active"){
						swal("Product Enabled", "", "info");
					}else{
						swal("Product Disabled", "", "info");
					}
					getProducts();	
				})
			}
			
			
			
			$scope.open = function (p,size) {
				$scope.title = (p.id > 0) ? 'Edit Product' : 'Add Product';
				$scope.buttonText = (p.id > 0) ? 'Update Product' : 'Add Product';
				var modalInstance = $modal.open({
				  templateUrl: 'views/product/AddProduct.php',
				  //controller: 'ProductsCtrl',
				  size: size,
				  resolve: {
					item: function () {
					  return p;
					}
				  }
				});
				modalInstance.result.then(function(selectedObject) {
					if(selectedObject.save == "insert"){
						$scope.products.push(selectedObject);
						$scope.products = $filter('orderBy')($scope.products, 'id', 'reverse');
					}else if(selectedObject.save == "update"){
						p.description = selectedObject.description;
						p.price = selectedObject.price;

					}
				});
			};
			$scope.cancel = function () {
				$modalInstance.dismiss('cancel');
			};
			
			
			
			
			
		}])


})();
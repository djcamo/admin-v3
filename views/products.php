<div class="row">
	<div class="col-sm-12">
		<h2 class="page-title txt-color-blueDark"><i class="fa fa-shopping-cart fa-fw "></i> Products</h1>
	</div>
</div>

<div class="row">
	<div class="col-sm-9">
		<p><button class="btn btn-outline-secondary btn-sm" ng-click="addShow();">Add Product</button></p>
	</div>
	<div class="col-sm-3 text-right">		
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Filter products list ..." aria-label="Filter products list ..." aria-describedby="basic-addon2" ng-model="filterProduct" ng-change="resetLimit();" autocomplete="off">
			<div class="input-group-append">
				<span class="input-group-text" id="basic-addon2"><i class="search-icon fa fa-search nav-search-icon"></i></span>
			</div>
		</div>   
	</div>
</div>
	
<div>
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr>
					
					<th>Name</th>					
					<th></th>
				</tr>
			</thead>
			<tr ng-repeat="item in products.data | filter:filterProduct">		 		
				<td>
				 	<button style="padding:.375rem;margin-right:10px" class="btn btn-xs" ng-class="{'Active':'btn-secondary', 'Inactive':''}[item.status]" ng-click="changeProductStatus(item);"></button>
					{{ item.name }}</td>
				<td class="text-right">
				 	<button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
				 	<button class="btn btn-sm btn-outline-danger" ng-click="deleteProduct(item)"><i class="fa fa-times "></i></button>
				</td>
		 	</tr>
		</table>
	

<!-- add a product -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Add Product</h5>	
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
      	<form ng-submit="addProduct(frm)">
		  <div class="form-group">
		    <label for="productName">Product Name</label>
		    <input type="text" class="form-control" id="productName" name="productName" placeholder="Name" ng-model="frm.Name">
		  </div>
		  <div class="form-group">
		    <label for="productDescription">Desription</label>
		    <textarea class="form-control" rows="3" name="productDescription" ng-model="frm.Description"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="productPrice">Price</label>
		    <input type="text" class="form-control" id="productPrice" name="productPrice" placeholder="Price" ng-model="frm.Price">
		  </div>
		  <div class="form-group">
		  <label for="productCategory">Category</label>
		    <select class="form-control" id="productCategory" name="productCategory" ng-model="frm.Category">
			  <option value="books">Books</option>
			  <option value="cd">CDs</option>
			  <option value="jewellery">Jewellery</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label for="productImage">Image</label>
		    <input type="file" id="productImage"  name="productImage" ng-model="frm.Image" class="form-control" custom-on-change="uploadFile">
		    <p class="help-block">Upload product image</p>
		  </div>
		  <button type="submit" class="btn btn-outline-success btn-sm" >Add Product</button>
		</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- edit a product -->
<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit Product</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
      	<form ng-submit="updateProduct(existingData)">
					<input type="hidden" class="form-control" id="productID" name="productID"  ng-model="existingData.id">
					<div class="form-group">
						<label for="productName">Product Name</label>
						<input type="text" class="form-control" id="productName" name="productName"  ng-model="existingData.name">
					</div>
					<div class="form-group">
						<label for="productDescription">Desription</label>
						<textarea class="form-control" rows="3" name="productDescription" ng-model="existingData.description"></textarea>
					</div>
					<div class="form-group">
						<label for="productPrice">Price</label>
						<input type="text" class="form-control" id="productPrice" name="productPrice"  ng-model="existingData.price">
					</div>
					<div class="form-group">
					<label for="productCategory">Category</label>
						<select class="form-control" id="productCategory" name="productCategory" ng-model="existingData.category" ng-init="existingData = category">
						<option value="books">Books</option>
						<option value="cd">CDs</option>
						<option value="jewellery">Jewellery</option>
					</select>
					</div>
					<div class="form-group">
						<label for="productImage">Image</label>
						<input type="text" id="productImage"  name="productImage" ng-model="existingData.image" class="form-control">
						<p class="help-block">Upload product image</p>
					</div>
					<button type="submit" class="btn btn-outline-success btn-sm" >Update Product</button>
				</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
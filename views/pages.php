<div class="row">
	<div class="col-sm-12">
		<h2 class="page-title txt-color-blueDark"><i class="fa fa-file fa-fw "></i> Pages</h2>
	</div>
</div>

<div class="row">
	<div class="col-sm-9">
		<p><button class="btn btn-outline-secondary btn-sm" ng-click="addShow();">Add Page</button></p>
	</div>
	<div class="col-sm-3 text-right">		
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Filter pages list ..." aria-label="Filter pages list ..." aria-describedby="basic-addon2" ng-model="filterPage" ng-change="resetLimit();" autocomplete="off">
			<div class="input-group-append">
				<span class="input-group-text" id="basic-addon2"><i class="search-icon fa fa-search nav-search-icon"></i></span>
			</div>
		</div>   
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<table class="table table-hover">
			<thead class="thead-dark">
				<tr>
					
					<th>Name</th>					
					<th></th>
				</tr>
			</thead>
			<tr ng-repeat="item in pages.data | filter:filterPage">		 		
				<td>
					
					{{ item.name }}</td>
				<td class="text-right">
					<button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
					<button class="btn btn-sm btn-outline-danger" ng-click="deletePage(item)"><i class="fa fa-times "></i></button>
				</td>
			</tr>
		</table>
	</div>
</div>

<!-- add a page -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
				<h5 class="modal-title" id="myModalLabel">Add Page</h5>	
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
      	<form ng-submit="addPage(frm)">
		  <div class="form-group">
		    <label for="pageName">Name</label>
		    <input type="text" class="form-control" id="pageName" name="pageName" placeholder="Name" ng-model="frm.Name">
		  </div>
		  <div class="form-group">
		    <label for="pageTitle">Title</label>
		    <input type="text" class="form-control" id="pageTitle" name="pageTitle" placeholder="Title" ng-model="frm.pageTitle">
		  </div>
		  <div class="form-group">
		    <label for="pageDescription">Desription</label>
		    <textarea class="form-control" rows="3" name="pageDescription" ng-model="frm.pageDescription"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="pageSlug">Slug</label>
		    <input type="text" id="pageSlug"  name="pageSlug" ng-model="frm.Slug" class="form-control">		    
		  </div>
		  <div class="form-group">
			<label for="pageService">Is this a service?</label>
				<select class="form-control" id="pageService" name="pageService" ng-model="frm.Service">
				<option value="N">No</option>
				<option value="Y">Yes</option>
				</select>
			</div>
		  <button type="submit" class="btn btn-outline-success btn-sm" >Add Page</button>
		</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
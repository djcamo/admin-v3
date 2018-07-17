<div class="row">
	<div class="col-sm-12">
        <h1 class="page-title txt-color-blueDark"><i class="fa fa-file fa-fw "></i> Services</h1>
    </div>
</div>

<div class="row">
	<div class="col-sm-9">
		<p><button class="btn btn-outline-secondary btn-sm" ng-click="addShow();">Add Service</button></p>
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

<div class="row">
	<div class="col-sm-12">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>					
                    <th></th>
                </tr>
            </thead>
            <tr ng-repeat="item in services.data">		 		
                <td>
                <button style="padding:.375rem;margin-right:10px" class="btn btn-xs" ng-class="{'Active':'btn-secondary', 'Inactive':''}[item.status]" ng-click="changeServiceStatus(item);"></button>
                    {{ item.name }}</td>
                <td class="text-right">
                    <button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
                    <button class="btn btn-sm btn-outline-danger" ng-click="deleteService(item)"><i class="fa fa-times "></i></button>
                </td>
            </tr>
        </table>
    </div>
</div>
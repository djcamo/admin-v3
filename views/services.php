<h1 class="page-title txt-color-blueDark"><i class="fa fa-file fa-fw "></i> Services</h1>


<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            
            <th>Name</th>					
            <th></th>
        </tr>
    </thead>
    <tr ng-repeat="item in services.data">		 		
        <td>
            
            {{ item.name }}</td>
        <td class="text-right">
            <button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
            <button class="btn btn-sm btn-outline-danger" ng-click="deleteService(item)"><i class="fa fa-times "></i></button>
        </td>
    </tr>
</table>
<div class="row">
	<div class="col-sm-12">
        <h2 class="page-title txt-color-blueDark"><i class="fa fa-bullhorn fa-fw "></i> Testimonials</h2>
    </div>
</div>

<div class="row">
	<div class="col-sm-9">
		<p><button class="btn btn-outline-secondary btn-sm" ng-click="addShow();">Add Testimonial</button></p>
	</div>
	<div class="col-sm-3 text-right">		
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Filter testimonial list ..." aria-label="Filter products list ..." aria-describedby="basic-addon2" ng-model="filterTestimonial" ng-change="resetLimit();" autocomplete="off">
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
            <tr ng-repeat="item in testimonials.data | filter:filterTestimonial">		 		
                <td>
                    <button style="padding:.375rem;margin-right:10px" class="btn btn-xs" ng-class="{'Active':'btn-secondary', 'Inactive':''}[item.status]" ng-click="changeTestimonialStatus(item);"></button>
                    {{ item.username }}
                </td>
                <td class="text-right">
                    <button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
                    <button class="btn btn-sm btn-outline-danger" ng-click="deleteTestimonial(item)"><i class="fa fa-times "></i></button>
                </td>
            </tr>
        </table>
    </div>
</div>

<!-- add a testimonial -->
<div class="modal fade" id="addTestimonial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add Testimonial</h5>	
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
      	<form ng-submit="addTestimonial(frm)">
		  <div class="form-group">
		    <label for="testimonialName">Name</label>
		    <input type="text" class="form-control" id="testimonialName" name="testimonialName" placeholder="Name" ng-model="frm.username">
		  </div>
		  <div class="form-group">
		    <label for="testimonialTestimonial">Testimonial</label>
		    <textarea class="form-control" rows="3" name="testimonialTestimonial" ng-model="frm.testimonial"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="testimonialPosition">Position</label>
		    <input type="text" class="form-control" id="testimonialPosition" name="testimonialPosition" placeholder="Price" ng-model="frm.position">
		  </div>		  
		  <div class="form-group">
		    <label for="testimonialImage">Image</label>
		    <input type="file" id="testimonialImage"  name="testimonialImage" ng-model="frm.image" class="form-control" custom-on-change="uploadFile">
		    <p class="help-block">Upload testimonial image</p>
		  </div>
		  <button type="submit" class="btn btn-outline-success btn-sm" >Add Testimonial</button>
		</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
	<div class="col-sm-12">
        <h2 class="page-title txt-color-blueDark"><i class="fa fa-fw fa-file-video-o"></i> Slider</h2>
        </div>
</div>

<div class="row">
	<div class="col-sm-9">
		<p><button class="btn btn-outline-secondary btn-sm" ng-click="addShow();">Add Slide</button></p>
	</div>
	<div class="col-sm-3 text-right">		
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Filter slide list ..." aria-label="Filter products list ..." aria-describedby="basic-addon2" ng-model="filterSlide" ng-change="resetLimit();" autocomplete="off">
			<div class="input-group-append">
				<span class="input-group-text" id="basic-addon2"><i class="search-icon fa fa-search nav-search-icon"></i></span>
			</div>
		</div>   
	</div>
</div>

<div class="row">
	<div class="col-sm-4" ng-repeat="item in sliders.data ">
        <div class="card" >
            <img class="card-img-top" src="../images/slider/{{ item.image }}" alt="{{ item.alttext }}">
            <div class="card-body" class="text-center">
                <button class="btn btn-sm btn-outline-primary" ng-click="editShow(item)"><i class="fa fa-edit "></i></button>
								<button class="btn btn-sm btn-outline-danger" ng-click="deleteSlide(item)"><i class="fa fa-times "></i></button>
            </div>
        </div>
    </div>
</div>


<!-- add a slide -->
<div class="modal fade" id="addSlide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Add Slide</h5>	
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">
      	<form ng-submit="addSlide(frm)" name="form">
					<div class="form-group">
						<label for="slideImage">Image</label>
						<input type="file" id="slideImage"  name="file" ng-model="frm.image" class="form-control" custom-on-change="uploadFile" >
						<p class="help-block">Upload slide image</p>
					</div>
							<div class="form-group">
						<label for="slidealttext">Alt Text</label>
						<input type="text" class="form-control" id="slidealttext" name="slidealttext" placeholder="" ng-model="frm.alttext">
					</div>
							<div class="form-group">
						<label for="slidecaption1">Caption 1</label>
						<input type="text" class="form-control" id="slidecaption1" name="slidecaption1" placeholder="" ng-model="frm.caption1">
					</div>
					<div class="form-group">
						<label for="slidecaption2">Caption 2</label>
						<input type="text" class="form-control" id="slidecaption2" name="slidecaption2" placeholder="" ng-model="frm.caption2">
					</div>		  
					<button type="submit" class="btn btn-outline-success btn-sm" >Add Slide</button>
				</form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
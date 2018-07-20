<div class="row">
	<div class="col-sm-12">
		<h2 class="page-title txt-color-blueDark"><i class="fa fa-globe fa-fw "></i> Company Details</h1>
	</div>
</div>

<div class="row">

<form ng-submit="updateCompany(existingData)">
    <div class="col-md-12">
        <fieldset>
            <legend>Details</legend>
            <div class="col-md-6">
                <div class="form-group form-input">
                    <label>Name</label>
                    <input type="text" name='name' class="form-control"  ng-model="existingData.name"   >
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">    
                <div class="form-group form-input">
                    <label>Primary Phone</label>
                    <input type="text" name='phone1' class="form-control"  ng-model="existingData.phone1"   >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-input">
                    <label>Secondary Phone</label>
                    <input type="text" name='phone2' class="form-control"  ng-model="existingData.phone2"   >
                </div>
            </div>
            <div class="col-md-6">          
                <div class="form-group form-input">
                    <label>Fax</label>
                    <input type="text" name='fax' class="form-control"  ng-model="existingData.price" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-input">
                    <label>Email</label>
                    <input type="text" name='email' class="form-control"  ng-model="existingData.email" >
                </div>
            </div>
        </fieldset>
    </div>
    <div class="col-md-12">
        <fieldset>
            <legend>Social Media</legend>
            
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>Facebook</label>
                <input type="text" name='facebook' class="form-control"  ng-model="existingData.facebook" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>Youtube</label>
                <input type="text" name='youtube' class="form-control"  ng-model="existingData.youtube" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>Twitter</label>
                <input type="text" name='twitter' class="form-control"  ng-model="existingData.twitter" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>LinkedIn</label>
                <input type="text" name='linkedin' class="form-control"  ng-model="existingData.linkedin" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>Pinterest</label>
                <input type="text" name='pinterest' class="form-control"  ng-model="existingData.pinterest" >
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group form-input">
                <label>Instagram</label>
                <input type="text" name='instagram' class="form-control"  ng-model="existingData.instagram" >
            </div>
            </div>
 
        </fieldset>  
    </div>      

    <div class="col-md-2">

        <div class="form-group form-input">
        <input name='image' type='file' name='logo' ng-model="existingData.logo">
        </div>

    </div>
    <div class="col-md-2">
        <input type='submit' name='Update', class='btn btn-outline-success' >
    </div>
</form>

</div>
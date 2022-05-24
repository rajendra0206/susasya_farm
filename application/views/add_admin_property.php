<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Property Management
        <small>Add / Edit Property</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Property Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" enctype="multipart/form-data" id="addUser" action="<?php echo base_url() ?>addNewProperty" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Selcet State</label>
                                        <?php $stateID = @$propertyInfo->state; ?>
                                        <select class="form-control valid" id="state" name="state" aria-required="true" aria-invalid="false">
                                            <option>Select</option>
                                            <?php foreach($states as $item) {  ?>
                                            <option <?php if($stateID === $item['id']){ ?> selected <?php } ?> value="<?php echo $item['id']; ?>"><?php echo  $item['name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Selcet District</label>
                                        <?php $districtID = @$propertyInfo->district; ?>
                                        <select class="form-control valid" id="district" name="district" aria-required="true" aria-invalid="false">
                                            <option>Select</option>
                                            <?php foreach($city as $item) {  ?>
                                                <option <?php if($districtID === $item['id']){ ?> selected <?php } ?> value="<?php echo $item['id']; ?>"><?php echo  $item['name']; ?></option>>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Selcet Mandal</label>
                                        <?php $mandalamID = @$propertyInfo->mandalam; ?>
                                        <select class="form-control valid" id="mandal" name="mandal" aria-required="true" aria-invalid="false">
                                        <option>Select</option>
                                        <?php foreach($mandal as $item) {  ?>
                                                <option <?php if($mandalamID === $item['id']){ ?> selected <?php } ?> value="<?php echo $item['id']; ?>"><?php echo  $item['name']; ?></option>>
                                            <?php } ?>                                           
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Survey No.</label>
                                        <input type="text"  class="form-control required" id="surveyno" name="surveyno" value="<?php echo @$propertyInfo->survey_no; ?>" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cpassword">Extent</label>
                                        <input type="text" class="form-control required" id="extent" name="extent" value="<?php echo @$propertyInfo->extent; ?>" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Owner Type</label>
                                        <!--<input type="text" class="form-control required" id="ownertype" name="ownertype" value="<?php echo @$propertyInfo->owner_type; ?>" maxlength="20">-->
                                        <?php $owntype = @$propertyInfo->owner_type; ?>
                                       <select class="form-control valid" id="owner_type" name="owner_type" aria-required="true" aria-invalid="false">
                                            <option value="">Select Owner Type</option>
                                            <option value="1" <?php if($owntype == 1 ){ ?> selected <?php } ?>>Land Owner</option>   
                                            <option value="2" <?php if($owntype ==2 ){ ?> selected <?php } ?>>Agent</option>   
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Contact Number</label>
                                        <input type="text" class="form-control required digits" id="mobile" name="mobile" value="<?php echo @$propertyInfo->contact_no; ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Expected Price Per Cent</label>
                                        <input type="text" class="form-control required digits"  min="1" max="100000" pattern="^[0-9]*$" id="percetn" name="percetn" value="<?php echo @$propertyInfo->price_per_cent; ?>" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">No. Of Transactions</label>
                                        <input type="text" class="form-control required " id="nooftransactions" name="nooftransactions" value="<?php echo @$propertyInfo->no_of_transactions; ?>"  maxlength="10">
                                    </div>
                                </div>   
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Select Farm Type</label>
                                       <!-- <input type="text" class="form-control required" id="farmtype"  name="farmtype" value="<?php //echo @$propertyInfo->farm_type; ?>" maxlength="10">-->
                                       <?php $ftype = @$propertyInfo->farm_type; ?>
                                       <select class="form-control valid" id="farmtype" name="farmtype" aria-required="true" aria-invalid="false">
                                            <option value="">Select Form Type</option>
                                            <option value="1" <?php if($ftype == 1 ){ ?> selected <?php } ?>>Empty land</option>   
                                            <option value="2" <?php if($ftype ==2 ){ ?> selected <?php } ?>>With Crop</option>   
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Latitude/Longitude</label>
                                        <input type="text" class="form-control required" id="latlong"  name="latlong" value="<?php echo @$propertyInfo->	map_info; ?>" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="mobile">Picture's/Video</label>
                                        <?php $pid = @$propertyInfo->id; if($pid == ''){ $requirefile = 'required'; }else{ $requirefile = ''; } ?> 
                                        <input type="file"  class="form-control" id="imgs" name="imgs[]" multiple>
                                    </div>
                                </div>
                            </div> 
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="hidden" name="property_id" value="<?php echo @$propertyInfo->id; ?>">
                            <input type="hidden" name="property_images" value="<?php echo @$propertyInfo->farm_images; ?>">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
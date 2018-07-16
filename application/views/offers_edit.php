<?php
//echo "<pre>";
print_r($result);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Offers
                <a  href="<?php base_url('admin/brands') ?>" class="btn btn-warning">Go back to Offers listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Offer
                </div>
                <div class="panel-body">
                     <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/offers/offer_add') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Province</label>
                                    <select name='province_id' class="form-control" placeholder="Enter Province Name">
                                        <option value="1">KPK</option>
                                        <option value="2">Punjab</option>
                                        <option value="3">Sind</option>
                                        <option value="4">Blochistan</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <select name='city_id' class="form-control" placeholder="Enter City Name">
                                        <option value="1">KPK</option>
                                        <option value="2">Punjab</option>
                                        <option value="3">Sind</option>
                                        <option value="4">Blochistan</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name='name' class="form-control" placeholder="Enter Offer Name" value="<?php echo $result[0]->name; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Offer Description</label>
                                    <input name="description" class="form-control" placeholder="Descrption" value="<?php echo $result[0]->description; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" placeholder="Phone" value="<?php echo $result[0]->phone; ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" class="form-control" placeholder="Address" value="<?php echo $result[0]->address; ?>" >
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <?php echo $result[0]->image; ?>
                                    <input type="file" name="userfile" class="form-control" placeholder="Upload Image"  >
                                </div>
                                 <div class="form-group">
                                    <label>Active</label>
                                    <select class="form-control" name="isactive">
                                        <?php
                                        $yes='';
                                        $no='';
                                        if($result[0]->is_active == 1){
                                            $yes='selected';
                                        }else{
                                           $no='selected'; 
                                        }   ?>
                                        <option value="1" <?php echo $yes ?> >Yes</option>
                                         <option value="0" <?php echo $no ?> >No</option>
                                    </select>
                                </div>
                                  <div class="form-group">
                                    <label>Deleted</label>
                                       <?php
                                        $yes='';
                                        $no='';
                                        if($result[0]->is_deleted == 1){
                                            $yes='selected';
                                        }else{
                                           $no='selected'; 
                                        }   ?>
                                    <select class="form-control" name="isactive">
                                        <option value="1" <?php echo $yes ?>>Yes</option>
                                         <option value="0" <?php  echo $no ?>>No</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>


                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

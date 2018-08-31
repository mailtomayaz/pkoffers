<div id="page-wrapper">
     <div class="row">
        <div class="col-lg-12">

            <div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
        <div class="row">
        <div class="col-lg-12">

            <div id="infoMessageError"><?php echo $this->session->flashdata('error'); ?></div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Offers
                <a  href="<?php echo base_url('admin/offers') ?>" class="btn btn-warning">Go back to offers listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new Offer
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php echo validation_errors(); ?>
                            <form role="form" action="<?php echo base_url('admin/offers/offer_add') ?>" method="post" enctype="multipart/form-data">
                                   <div class="form-group">
                                    <label>Category</label>

                                    <select name='category_id' class="form-control">
                                        <?php foreach ($category_list as $cat) {
                                            ?>
                                            <option value="<?php echo $cat->id ?>"> <?php echo $cat->name; ?></option>
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Province</label>

                                    <select name='province_id' class="form-control">
                                        <?php foreach ($provinces_list as $pro) {
                                            ?>
                                            <option value="<?php echo $pro->id ?>"> <?php echo $pro->name; ?></option>
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>City</label>

                                    <select name='city_id' class="form-control">
                                        <?php foreach ($cities_list as $pro) {
                                            ?>
                                            <option value="<?php echo $pro->id ?>"> <?php echo $pro->name; ?></option>
                                            <?php }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name='name' class="form-control" placeholder="Enter Offer Name">
                                </div>
                                <div class="form-group">
                                    <label>Offer Description</label>
                                    <input name="description" class="form-control" placeholder="Descrption" >
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" placeholder="Phone" >
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" class="form-control" placeholder="Address" >
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="userfile" class="form-control" placeholder="Upload Image" >
                                </div>
                                   <div class="form-group">
                                    <label>Status</label>

                                    <select name='is_active' class="form-control">
                                        
                                            <option value="1"> Enable</option>
                                             <option value="2"> Disable</option>
                                            
                                        
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

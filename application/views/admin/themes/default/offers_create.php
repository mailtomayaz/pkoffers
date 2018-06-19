<div id="page-wrapper">
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
                            <form role="form" action="<?php echo base_url('admin/offers/offer_add') ?>" method="post" >
                               
                                 <div class="form-group">
                                    <label>Province</label>
                                    <select name='province_id' class="form-control" placeholder="Enter Province Name">
                                        <option value="1">KPK</option>
                                        <option value="2">Punjab</option>
                                        <option value="3">Sind</option>
                                        <option value="4">Blochistan</option>
                                    </select>
                                    <input name='province_id' class="form-control" placeholder="Enter Province Name">
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

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Province
                <a  href="<?php echo base_url('admin/offers') ?>" class="btn btn-warning">Go back to Province listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create new Province
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/provinces/province_add') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Province</label>
                                     <input name='name' class="form-control" placeholder="Enter Province Name">

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

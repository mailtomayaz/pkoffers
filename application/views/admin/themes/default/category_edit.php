<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                Category
                <a  href="<?php echo base_url('admin/categories') ?>" class="btn btn-warning">Go back to Category listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Category
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/categories/update/' . $category[0]->id) ?>" method="post" enctype="multipart/form-data">

                                
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name='name' class="form-control" placeholder="" value="<?php echo $category[0]->name; ?>">
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

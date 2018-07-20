<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                City
                <a  href="<?php echo base_url('admin/cities') ?>" class="btn btn-warning">Go back to Cities listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update City
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/cities/update/' . $city[0]->id) ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Province</label>

                                    <select name='province_id' class="form-control">
                                        <?php
                                        foreach ($province_list as $pro) {
                                            if ($city[0]->province_id == $pro->id) {
                                                ?>
                                                <option selected="selected" value="<?php echo $pro->id ?>"> <?php echo $pro->name; ?></option>
                                            <?php } else { ?>
                                                <option value="<?php echo $pro->id ?>"> <?php echo $pro->name; ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name='name' class="form-control" placeholder="" value="<?php echo $city[0]->name; ?>">
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

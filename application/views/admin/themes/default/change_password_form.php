<?php
//echo "<pre>";
//print_r($groups);
//echo "</pre>";
////die();
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                User
                <a  href="<?php  echo base_url('admin/users') ?>" class="btn btn-warning">Go back to User listing</a>
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add User
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/users/change_password/') ?>" method="post">
                                <input type="hidden" value="<?php echo $user_id ?>" name="user_id"> 
                                <div class="form-group">
                                    <label>Old Password</label>
                                    <input name="old_password" class="form-control" value="" placeholder="Old Password">
                                </div>
                                 <div class="form-group">
                                    <label>New Password </label>
                                    <input name="new_password" class="form-control" value="" placeholder="New Password">
                                </div>
                                 
                                  
                            
                                

                                <button type="submit" class="btn btn-primary">Submit Button</button>
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


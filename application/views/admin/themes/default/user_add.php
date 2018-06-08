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
                            <form role="form" action="<?php echo base_url('admin/users/create/') ?>" method="post">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="first_name" class="form-control" value="" placeholder="First Name">
                                </div>
                                 <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="last_name" class="form-control" value="" placeholder="Last Name">
                                </div>
                                 <div class="form-group">
                                    <label>Company</label>
                                    <input name="company" class="form-control" value="" placeholder="Company">
                                </div>
                                 <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" value="" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="username" class="form-control" value="" placeholder="Name">
                                </div>
                                
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" class="form-control" value="" placeholder="Password">
                                </div>
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control" value="" placeholder="Email">
                                </div>
                                  <div class="form-group">
                                    <label>Group</label>
                                    <select name="group_id">
                                        <?php foreach($groups as $group){ ?>
                                        <option value="<?php echo $group->id ?>"><?php echo $group->name ?></option>
                                        <?php } ?>
                                         
                                    </select>
                                  
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


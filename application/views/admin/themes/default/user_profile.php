<?php
//echo "<pre>";
//print_r($user);
//echo "</pre>";
//echo $user->first_name;
////die();
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2>
                User Profile
               
            </h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="<?php echo base_url('admin/users/create/') ?>" method="post">

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="first_name" value="<?php echo $user->first_name; ?>" class="form-control" value="" placeholder="First Name">
                                </div>
                                 <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="last_name" value="<?php echo $user->last_name; ?>" class="form-control" value="" placeholder="Last Name">
                                </div>
                                 <div class="form-group">
                                    <label>Company</label>
                                    <input name="company" value="<?php  echo $user->company; ?>" class="form-control"  placeholder="Company">
                                </div>
                                 <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" value="<?php  echo $user->phone; ?>" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="username" value="<?php  echo $user->email; ?>" class="form-control" value="" placeholder="Name" disabled="">
                                </div>
                                
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" class="form-control" value="" placeholder="Password">
                                </div>
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" value="<?php  echo $user->email; ?>" class="form-control" value="" placeholder="Email" disabled="">
                                </div>
<!--                                  <div class="form-group">
                                    <label>Group</label>
                                    <select name="group_id">
                                        <?php foreach($groups as $group){ ?>
                                        <option value="<?php echo $group->id ?>"><?php echo $group->name ?></option>
                                        <?php } ?>
                                         
                                    </select>
                                  
                                </div>-->
                                

                                <button type="submit" class="btn btn-primary">Submit Button</button>
                                <a href="<?php echo base_url('index.php/admin/dashboard') ?>"  class="btn btn-primary">Cancel</a>
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


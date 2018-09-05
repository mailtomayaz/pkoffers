<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="page-wrapper">
     <div class="row">
        <div class="col-lg-12">

            <div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Users List  <a href="<?php echo base_url('admin/users/add_user/')?>" class="btn btn-info">Add new user</a>  
<!--          <a  href="<?php base_url('admin/brands/create')?>" class="btn btn-success">Add a new</a>-->
        </h2>
      </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   User listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Email</th>
<!--                                    <th>Created From IP</th>
                                    <th>Updated From IP</th>-->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users as $user) {?>
                                <tr class="odd gradeX">
                                    <td><?php echo $user->user_id; ?></td>
                                    <td><?php echo $user->username; ?></td>
                                      <td><?php echo $user->email; ?></td>
<!--                                    <td>Win 95+</td>
                                    <td>4</td>-->
                                    <td>
                                        <a href="<?php echo  base_url('admin/users/edit_user/'.$user->user_id)?>" class="btn btn-info">edit</a>  
                                        <a href="<?php echo base_url('admin/users/delete/'.$user->user_id)?>" class="btn btn-danger">delete</a>
                                        <a href="<?php echo base_url('admin/users/change_password_form/'.$user->user_id)?>" class="btn btn-danger">Change Password</a>
                                    </td>
                                </tr>
                                <?php } ?>
                              
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Brand ID</th>
                                    <th>Description</th>
<!--                                    <th>Created From IP</th>
                                    <th>Updated From IP</th>-->
                                    <th>Action</th>
                                </tr>
                            </tfooter>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

<!-- /#page-wrapper -->
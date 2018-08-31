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
                    Categories
                    <a  href="<?php echo base_url('admin/categories/add') ?>" class="btn btn-success">Add a new</a>
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
                    Categories listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //  print_r($province);
                                foreach ($result as $data) {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $data->id ?></td>
                                        <td><?php echo $data->name ?></td>
                                    
                                        <td>
                                            <a href="<?php echo base_url('admin/categories/edit/' . $data->id) ?>" class="btn btn-info">edit</a>  
                                            <a href="<?php echo base_url('admin/categories/delete/' . $data->id) ?>" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Province ID</th>
                                    <th>Name</th>
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
</div>
<!-- /#page-wrapper -->
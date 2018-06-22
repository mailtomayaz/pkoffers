<?php 
//echo "<pre>";
//print_r($result);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
      <div class="page-header users-header">
        <h2>
          Offers
          <a  href="<?php echo base_url('admin/offers/create')?>" class="btn btn-success">Add a new</a>
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
                    Offers listing
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Offer ID</th>
                                    <th>Description</th>
                                    <th>Phone</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($result as $offer){
                                 ?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $offer->id ?></td>
                                    <td><?php echo $offer->description ?></td>
                                     <td><?php echo $offer->phone ?></td>
                                     <td><?php echo $offer->image ?></td>
                                    <td>
                                        <a href="<?php echo base_url('admin/offers/edit/'.$offer->id )?>" class="btn btn-info">edit</a>  
                                        <a href="<?php echo base_url('admin/offers/delete/'.$offer->id )?>" class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                                <?php 
                                }
                                ?>
                              
                               
                            </tbody>
                            <tfooter>
                                <tr>
                                  <th>Offer ID</th>
                                    <th>Description</th>
                                    <th>Phone</th>
                                    <th>Image</th>
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
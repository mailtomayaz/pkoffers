<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <section id="works" class="section gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

            <div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
           <div class="row">
        <div class="col-lg-12">
<?php $error = $this->session->flashdata('error');?>
            <div id="infoMessage"></div>

        </div>
        <!-- /.col-lg-12 -->
    </div>
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <form role="form" action="<?php echo base_url('users/add/') ?>" method="post">

                                <div class="form-group">
                                    <label>First Name*</label>
                                   
                                    <input name="first_name" class="form-control" value="" placeholder="First Name">
                                     <?php if($error['first_name']){ echo "<div class='col-lg-12 errormsg'>".$error['first_name']."</div>";}?>
                                </div>
                                 <div class="form-group">
                                    <label>Last Name*</label>
                                    <input name="last_name" class="form-control" value="" placeholder="Last Name">
                                      <?php if($error['last_name']){ echo "<div class='col-lg-12 errormsg'>".$error['last_name']."</div>";}?>
                                </div>
                                 <div class="form-group">
                                    <label>Company</label>
                                    <input name="company" class="form-control" value="" placeholder="Company">
                                   
                                </div>
                                 <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control" value="" placeholder="Phone">
                                      <?php if($error['phone']){ echo "<div class='col-lg-12 errormsg'>".$error['phone']."</div>";}?>
                                </div>
                                <div class="form-group">
                                    <label>User Name*</label>
                                    <input name="username" class="form-control" value="" placeholder="Name">
                                      <?php if($error['username']){ echo "<div class='col-lg-12 errormsg'>".$error['username']."</div>";}?>
                                </div>
                                
                                 <div class="form-group">
                                    <label>Password*</label>
                                    <input name="password" class="form-control" value="" type="password" placeholder="Password">
                                      <?php if($error['password']){ echo "<div class='col-lg-12 errormsg'>".$error['password']."</div>";}?>
                                </div>
                                
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input name="email" class="form-control" value="" placeholder="Email">
                                      <?php if($error['email']){ echo "<div class='col-lg-12 errormsg'>".$error['email']."</div>";}?>
                                </div>
                       
                                

                                <button type="submit" class="btn btn-primary">Registor </button>
                            </form>
        </div>
      </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="offer-contaner"></div>
            </div>
        </div>
    </div>
  </section>
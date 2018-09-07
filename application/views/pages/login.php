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
        <div class="col-md-offset-3 col-md-6">
            <form role="form" action="<?php echo base_url('users/add/') ?>" method="post">

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
                       
                                

                                <button type="submit" class="btn btn-primary">Submit Button</button>
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
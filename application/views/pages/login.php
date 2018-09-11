
<div class="container fill">
    <div class="wrapper">
<!--        <div class="row">
        <div class="col-lg-12">

            <div id="infoMessage"><?php echo $this->session->flashdata('message'); ?></div>

        </div>
         /.col-lg-12 
    </div>-->
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php if ($this->session->flashdata('message')): ?>
                        <div class="alert alert-danger fade in">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <?php echo $this->session->flashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <form role="form" method="POST" action="<?php echo base_url('auth/login') ?>">
                        <fieldset>
                            <div class="form-group">
                                <input required class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input required class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                                <a href="<?php echo base_url('registor') ?>">New User Registor</a>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
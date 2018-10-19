<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>AllPkOffers Admin</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url() ?>assets/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?php echo base_url() ?>assets/admin/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo base_url() ?>assets/admin/css/dataTables.responsive.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url() ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom Fonts -->


          <link href="<?php echo base_url() ?>css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/admin/css/custom-styles.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
<?php  $usrGroup = $this->session->userdata('groups');
                            if($usrGroup){?>
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('admin/dashboard') ?>">AllPkOffers Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">

                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo base_url('admin/userprofile') ?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
<!--                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>-->
                            <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <?php
                           
                            if (in_array(1, $usrGroup)) {?>
                                   <li>
                                <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('admin/categories') ?>"><i class="fa fa-edit fa-fw"></i> Investment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/products') ?>"><i class="fa fa-edit fa-fw"></i> Charity</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/content') ?>"><i class="fa fa-edit fa-fw"></i> Content</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/users') ?>"><i class="fa fa-edit fa-fw"></i> Users</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/cities') ?>"><i class="fa fa-edit fa-fw"></i> Cities</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/provinces') ?>"><i class="fa fa-edit fa-fw"></i> Provinces</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/offers') ?>"><i class="fa fa-table fa-fw"></i> Offers</a>
                            </li>
                             <li>
                                <a href="<?php echo base_url('admin/categories') ?>"><i class="fa fa-table fa-fw"></i> Categories</a>
                            </li>
                            <?php } else {?>
                               <li>
                                <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                                <li>
                                <a href="<?php echo base_url('admin/offers') ?>"><i class="fa fa-table fa-fw"></i> Offers</a>
                            </li>
                          <?php  }
                            
                            ?>
                        
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
<?php }?>
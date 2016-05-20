<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            ระบบบริหารจัดการเว็บไซต์ 1.0
        </title>
        <!-- tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- bootstrap 3.3.4-->
        <link href="<?php echo base_url('themes/admin') ?>/css/bootstrap.min.css" rel="stylesheet">
        <!-- font awesome icons-->
        <link href="<?php echo base_url('themes/admin') ?>/css/font-awesome.min.css" rel="stylesheet">
        <!-- ionicons-->
        <link href="<?php echo base_url('themes/admin') ?>/css/ionicons.min.css" rel="stylesheet">
        <!--Theme style-->
        <link href="<?php echo base_url('themes/admin') ?>/assets/dist/css/AdminLTE.min.css" rel="stylesheet">
        <!--Theme skin -->
        <link href="<?php echo base_url('themes/admin') ?>/assets/dist/css/skins/skin-blue.min.css" rel="stylesheet">
        <!--Theme skin -->
        <link href="<?php echo base_url('themes/admin') ?>/assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
        <!--My Custom-->
        <link href="<?php echo base_url('themes/admin') ?>/assets/dist/css/mycustom.css" rel="stylesheet">



        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url('themes/admin'); ?>/assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('themes/admin'); ?>/js/bootstrap.min.js" type="text/javascript">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('themes/admin'); ?>/assets/dist/js/app.min.js" type="text/javascript">
        </script>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?php base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <b>
                            A
                        </b>LT
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <b>
                            Back
                        </b>Office
                    </span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?php echo base_url('themes/admin'); ?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">
                                        <?php echo $this->session->userdata('display_name') ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url('themes/admin') ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $this->session->userdata('username'); ?>

                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!--                                    <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                    </div>); ?>
                                    </li>-->
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('user/profile'); ?>" class="btn btn-default btn-flat">
                                                Profile
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('user/logout'); ?>" class="btn btn-default btn-flat">
                                                Sign out
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#">
                                    <i class="fa fa-gears">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('themes/admin'); ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php echo $this->session->userdata('display_name'); ?>
                            </p>
                            <!-- Status -->
                            <a href="#">
                                <i class="fa fa-circle text-success">
                                </i>Online
                            </a>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..." />
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">
                            MENU
                        </li>

                        <li class="<?php echo activate_menu('news'); ?>">
                            <a href="<?php echo site_url('news'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    ระบบข่าวประชาสัมพันธ์
                                </span>
                            </a>
                        </li>

                        <li class="<?php echo activate_menu('document'); ?>">
                            <a href="<?php echo site_url('document'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    ระบบเอกสารดาวน์โหลด
                                </span>
                            </a>
                        </li>

                        <li class="<?php echo activate_menu('gallery'); ?>">
                            <a href="<?php echo site_url('gallery'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    ระบบแกลอรี่รูปภาพ
                                </span>
                            </a>
                        </li>

                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>


            <!-- display content -->
            <?php echo $content_for_layout; ?>


            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    Back Office Version 1.0 by <a href="http://www.jeerayuth.com">jeerayuth.com</a>
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->
    </div>
</body>
</html>








<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <?php
        // Load Model
        $CI = & get_instance();
        // config ต่างๆ
        $this->load->model('Configs_model', 'configs');
        //หน้าเพจ static
        $CI->load->model('Pages_model', 'pages');
        //หมวดข่าว
        $this->load->model('News_Categorie_model', 'news_cat');
        //หมวดหมู่เอกสาร
        $this->load->model('Categorie_model', 'doc_cat');
        //ระบบลิงค์
        $this->load->model('Links_model', 'links');
        // Gallery ภาพกิจกรรม
        $this->load->model('Gallery_model', 'gallery');


        //หน้าเว็บเพจ
        $configs = $CI->configs->find(1);
        $pages = $CI->pages->all('',1);
        $news_cat = $CI->news_cat->all();
        $doc_cat = $CI->doc_cat->all();
        $links = $CI->links->all();
        $gallery = $this->gallery->all(3, '', 'modified_date', 'desc');
        
        ?>

        <title><?php echo $configs->name; ?></title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Web Fonts -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

        <!-- CSS Global Compulsory -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/style.css" rel="stylesheet">

        <!-- CSS Header and Footer -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/headers/header-v4.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/footers/footer-v1.css" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link  href="<?php echo base_url('themes/bootstrap'); ?>/plugins/animate.css" rel="stylesheet">
        <link  href="<?php echo base_url('themes/bootstrap'); ?>/plugins/line-icons/line-icons.css" rel="stylesheet">
        <link  href="<?php echo base_url('themes/bootstrap'); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">


        <!-- CSS Page Style -->
        <link rel="stylesheet" href="<?php echo base_url('themes/bootstrap'); ?>/css/pages/blog_magazine.css">

        <!-- CSS Theme -->
        <link rel="stylesheet" href="<?php echo base_url('themes/bootstrap'); ?>/css/theme-colors/default.css">
        <link rel="stylesheet" href="<?php echo base_url('themes/bootstrap'); ?>/css/theme-skins/dark.css">

        <!-- CSS Customization -->
        <link rel="stylesheet" href="<?php echo base_url('themes/bootstrap'); ?>/css/custom.css">

    </head>

    <body class="boxed-layout container">

        <div class="wrapper">
            <!--=== Header v4 ===-->
            <div class="header-v4">
                <!-- Topbar -->
                <div class="topbar-v1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-inline top-v1-contacts">
                                    <li>
                                        <i class="fa fa-envelope"></i> Email: <?php echo $configs->email; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i> Contact: <?php echo $configs->telephone; ?>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="list-inline top-v1-data">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>                       
                                    <li><a href="<?php echo base_url('user/login'); ?>">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Navbar -->
                <div class="navbar navbar-default mega-menu" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="row">
                                <div class="col-md-2">

                                    <img src="<?php echo base_url(); ?>assets/configs_uploads/<?php echo $configs->filename; ?>" >

                                </div>
                                <div class="col-md-10">
                                    <!--<a href="#"><img class="header-banner img-responsive" src="<?php echo base_url('themes/bootstrap'); ?>/img/banners/adds.jpg" width="1000" alt=""></a>-->
                                </div>
                            </div>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="full-width-menu">Menu Bar</span>
                                <span class="icon-toggle">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse navbar-responsive-collapse" style="background-color: #272727;">
                        <div class="container" >
                            <ul class="nav navbar-nav" >
                                <!-- Home -->
                                <li class="">
                                    <a href="<?php echo site_url('site'); ?>" >หน้าหลัก</a>                                                                    
                                </li>
                                <!-- End Pages -->

                                <!-- Blog -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        ข่าวสาร
                                    </a>

                                    <ul class="dropdown-menu">
                                        <?php foreach ($news_cat as $row) { ?>
                                            <li>
                                                <a href="<?php echo site_url('site'); ?>/news/<?php echo $row->id;?>"><?php echo $row->name; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>

                                </li>
                                <!-- End Blog -->

                                <!-- Portfolio -->
                                <li>
                                    <a href="<?php echo site_url('site'); ?>/gallery" >
                                        ภาพกิจกรรม
                                    </a>

                                </li>
                                <!-- End Portfolio -->

                                <!-- Features -->
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                        ดาวน์โหลด
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($doc_cat as $row) { ?>
                                            <li>
                                                <a href="javascript:void(0);"><?php echo $row->name; ?></a>
                                            </li>
                                        <?php } ?>

                                    </ul>
                                </li>
                                <!-- End Features -->

                                <!-- Contact Us -->
                                <li>
                                    <a href="<?php echo site_url('site'); ?>/contact">
                                        ติดต่อเรา
                                    </a>                              
                                </li>


                                <!-- End Demo Pages -->
                            </ul>

                            <!-- Search Block -->
                            <ul class="nav navbar-nav navbar-border-bottom navbar-right">
                                <li class="no-border">
                                    <i class="search fa fa-search search-btn"></i>
                                    <div class="search-open">
                                        <div class="input-group animated fadeInDown">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <span class="input-group-btn">
                                                <button class="btn-u" type="button">Go</button>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- End Search Block -->
                        </div><!--/end container-->
                    </div><!--/navbar-collapse-->
                </div>
                <!-- End Navbar -->
            </div>
            <!--=== End Header v4 ===-->

            <!--=== Content Part ===-->
            <div class="container content">
                <div class="row magazine-page">
                    <!-- Begin Content -->
                    <?php echo $content_for_layout; ?>
                    <!-- End Content -->

                    <!-- Begin Sidebar -->
                    <div class="col-md-3">
                        <!-- Magazine Posts -->
                        <div class="row margin-bottom-40">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">M E N U - K M. Hospital </a>

                                <?php foreach ($pages as $row) { ?>
                                <a href="<?php echo site_url('site/read_page'); ?>/<?php echo $row->id;?>" class="list-group-item">  <img src="<?php echo base_url(); ?>assets/images/save2.png">  <?php echo $row->name; ?> </a>
                                <?php } ?>

                            </div>

                            <div class="magazine-posts col-md-12 col-sm-6">
                                <center>
                                    <img class="hover-effect" alt="" src="<?php echo base_url(); ?>assets/configs_uploads/<?php echo $configs->doctor_photo; ?>">
                                    <span><i class="color-green"><?php echo $configs->director_name; ?></i> <br/> <?php echo $configs->director_position; ?></span>
                                </center>
                            </div>
                        </div>
                        <!-- End Magazine Posts -->


                        <!-- Quick Links -->
                        <div class="magazine-sb-categories margin-bottom-20">
                            <div class="headline"><h2 class="heading-sm">ระบบงานที่เกี่ยวข้อง</h2></div>
                            <div class="row">
                                <ul class="list-unstyled col-xs-12">
                                    <?php foreach ($links as $row) { ?>
                                        <li>
                                            &nbsp;&nbsp;<a href="<?php echo $row->link; ?>" target="_blank">  <?php echo $row->name; ?> </a>
                                        <?php } ?>    
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <!-- End Quick Links -->



                    </div>
                    <!-- End Sidebar -->

                </div>
            </div><!--/container-->
            <!-- End Content Part -->

            <!--=== Footer Version 1 ===-->
            <div class="footer-v1">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!-- About -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <img id="logo-footer" class="footer-logo" src="<?php echo base_url(); ?>assets/configs_uploads/<?php echo $configs->filename; ?>" alt="">

                                <p>เว็บไซต์นี้จัดทำขึ้นมาเพื่อใช้เป็นสื่อกลางในการเผยแพร่ข้อมูลข่าวสาร ประชาสัมพันธ์ทั้งภายในและภายนอกหน่วยงาน</p>
                                <p>เพื่อให้เกิดประโยชน์สูงสุดต่อทั้งเจ้าหน้าที่ในหน่วยงานและผู้รับบริการ</p>
                            </div><!--/col-md-3-->
                            <!-- End About -->

                            <!-- Latest -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="posts">
                                    <div class="headline"><h2>ภาพกิจกรรม</h2></div>
                                    <ul class="list-unstyled latest-list">
                                        <?php foreach ($gallery as $row) { ?>
                                        <li>
                                            <a href="#"><?php echo $row->title; ?></a>
                                            <small><?php echo $row->modified_date; ?></small>
                                        </li>

                                        <?php } ?>
                                    </ul>
                                </div>
                            </div><!--/col-md-3-->
                            <!-- End Latest -->

                            <!-- Link List -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="headline"><h2>เมนูหลัก</h2></div>
                                <ul class="list-unstyled link-list">
                                    <li><a href="<?php echo site_url('site'); ?>">หน้าหลัก</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="<?php echo site_url('site'); ?>/news/1">ข่าวสารทั่วไป</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="<?php echo site_url('site'); ?>/gallery">ภาพกิจกรรม</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">ดาวน์โหลด</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="<?php echo site_url('site'); ?>/contact">ติดต่อเรา</a><i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div><!--/col-md-3-->
                            <!-- End Link List -->

                            <!-- Address -->
                            <div class="col-md-3 map-img md-margin-bottom-40">
                                <div class="headline"><h2>ติดต่อเรา</h2></div>
                                <address class="md-margin-bottom-40">
                                    <?php echo $configs->name; ?><br />
                                    <?php echo $configs->address; ?><br />
                                    โทรศัพท์: <?php echo $configs->telephone; ?> <br />
                                    แฟกซ์: <?php echo $configs->fax; ?> <br />
                                    อีเมล์: <a href="mailto:<?php echo $configs->email; ?>" class=""><?php echo $configs->email; ?></a><br />
                                    facebook: <?php echo $configs->facebook; ?> 
                                </address>
                            </div><!--/col-md-3-->
                            <!-- End Address -->
                        </div>
                    </div>
                </div><!--/footer-->

                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    2016 &copy; All Rights Reserved.
                                    <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                                </p>
                            </div>

                            <!-- Social Links -->
                            <div class="col-md-6">
                                <ul class="footer-socials list-inline">
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Social Links -->
                        </div>
                    </div>
                </div><!--/copyright-->
            </div>
            <!--=== End Footer Version 1 ===-->
        </div><!--/wrapper-->

        <!--=== Style Switcher ===-->
        <a href="<?php echo base_url('user/login'); ?>"><i class="style-switcher-btn fa fa-cogs hidden-xs"></i></a>
        <!--/style-switcher-->
        <!--=== End Style Switcher ===-->


        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/smoothScroll.js"></script>

        <!-- JS Customization -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/custom.js"></script>

        <!-- JS Page Level -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/plugins/style-switcher.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function () {
                App.init();
                StyleSwitcher.initStyleSwitcher();
            });
        </script>

    </body>
</html>

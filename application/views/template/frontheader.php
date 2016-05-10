
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <title>โรงพยาบาลละแม จังหวัดชุมพร</title>

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
        <?php echo link_tag('bootstrap/plugins/bootstrap/css/bootstrap.min.css'); ?>
        <?php echo link_tag('bootstrap/css/style.css'); ?>


        <!-- CSS Header and Footer -->
        <?php echo link_tag('bootstrap/css/headers/header-default.css'); ?>
        <?php echo link_tag('bootstrap/css/footers/footer-v1.css'); ?>


        <!-- CSS Implementing Plugins -->
        <?php echo link_tag('bootstrap/plugins/animate.css'); ?>
        <?php echo link_tag('bootstrap/plugins/line-icons/line-icons.css'); ?>
        <?php echo link_tag('bootstrap/plugins/font-awesome/css/font-awesome.min.css'); ?>      
        <?php echo link_tag('bootstrap/plugins/fancybox/source/jquery.fancybox.css'); ?>
        <?php echo link_tag('bootstrap/plugins/revolution-slider/rs-plugin/css/settings.css'); ?>


        <!-- CSS Theme -->
        <?php echo link_tag('bootstrap/css/theme-colors/default.css'); ?>
        <?php echo link_tag('bootstrap/css/theme-skins/dark.css'); ?>


        <!-- CSS Customization -->
        <?php echo link_tag('bootstrap/css/custom.css'); ?>

    </head>

    <body>

        <div class="wrapper">
            <!--=== Header ===-->
            <div class="header">
                <div class="container">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <img src="<?php echo base_url(); ?>bootstrap/img/logo1-default.png" alt="Logo">
                    </a>
                    <!-- End Logo -->



                    <!-- Toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <!-- End Toggle -->
                </div><!--/end container-->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                    <div class="container">
                        <ul class="nav navbar-nav">
                            <!-- Home -->
                            <li class="active">
                                <a href="<?php echo  base_url(); ?>">
                                    หน้าหลัก
                                </a>

                            </li>
                            <!-- End Home -->

                            <!-- Department -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    หน่วยงาน
                                </a>
                                <ul class="dropdown-menu">  

                                    <li class="">
                                        <a href="#">งานบริหาร</a>                                    
                                    </li>

                                    <li class="">
                                        <a href="#">กลุ่มการพยาบาล</a>                                    
                                    </li>

                                    <li class="">
                                        <a href="#">งานคุณภาพ</a>                                  
                                    </li> 

                                    <li class="">
                                        <a href="#">องค์กรแพทย์</a>                                  
                                    </li>   

                                    <li class="">
                                        <a href="#">งานส่งเสริม</a>                                  
                                    </li> 

                                </ul>
                            </li>
                            <!-- End Department -->

                            <!-- Blog -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    ข่าวสารโรงพยาบาล
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="#">กิจกรรมโรงพยาบาล</a>

                                    </li>
                                    <li class="">
                                        <a href="#">จัดซื้อจัดจ้าง</a>                                     
                                    </li>
                                    <li class="">
                                        <a href="#">กิจกรรมอื่นๆ</a>

                                    </li>

                                </ul>
                            </li>
                            <!-- End Blog -->

                            <!-- Portfolio -->
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    ดาวน์โหลด
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="">
                                        <a href="#">เอกสารทางราชการทั่วไป</a>

                                    </li>
                                    <li class="">
                                        <a href="#">เอกสารทางราชการ ภายใน</a>

                                    </li>
                                    <li class="">
                                        <a href="#">เอกสารคู่มือ-แบบฟอร์ม</a>

                                    </li>
                                    <li class="">
                                        <a href="#">ไฟล์นำเสนอ</a>

                                    </li>
                                    <li class="">
                                        <a href="#">โปรแกรมต่างๆ</a>

                                    </li>


                                </ul>
                            </li>
                            <!-- End Portfolio -->


                            <!-- Shortcodes -->
                            <li class="">
                                <a href="#" class="dropdown-toggle" data-toggle="">
                                    สมัครสมาชิก
                                </a>

                            </li>
                            <!-- End Shortcodes -->

                            <!-- Demo Pages -->
                            <li class="">
                                <a href="<?php echo  base_url('user/login'); ?>" class="dropdown-toggle" data-toggle="">
                                    เข้าสู่ระบบ
                                </a>

                            </li>
                            <!-- End Demo Pages -->


                        </ul>
                    </div><!--/end container-->
                </div><!--/navbar-collapse-->
            </div>
            <!--=== End Header ===-->



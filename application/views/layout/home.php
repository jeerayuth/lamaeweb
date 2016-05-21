
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
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/style.css" rel="stylesheet">

        <!-- CSS Header and Footer -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/headers/header-default.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/footers/footer-v1.css" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/animate.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/line-icons/line-icons.css" rel="stylesheet">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/font-awesome/css/font-awesome.min.css">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/fancybox/source/jquery.fancybox.css">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/plugins/revolution-slider/rs-plugin/css/settings.css">

        <!-- CSS Theme -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/theme-colors/default.css">
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/theme-skins/dark.css">

        <!-- CSS Customization -->
        <link href="<?php echo base_url('themes/bootstrap'); ?>/css/custom.css">

    </head>

    <body>

        <div class="wrapper">
            <!--=== Header ===-->
            <div class="header">
                <div class="container">
                    <!-- Logo -->
                    <a href="index.html">
                        <img src="<?php echo base_url('themes/bootstrap'); ?>/img/logo1-default.png" alt="Logo">
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
                                <a href="<?php echo base_url(); ?>">
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
                                    ข่าวสาร
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


                            <!-- End Shortcodes -->

                            <!-- Demo Pages -->
                            <li class="">

                                <a href="<?php echo base_url('user/login'); ?>" class="dropdown-toggle" data-toggle="">
                                    ผู้ดูแลระบบ
                                </a>


                            </li>
                            <!-- End Demo Pages -->


                        </ul>
                    </div><!--/end container-->
                </div><!--/navbar-collapse-->
            </div>
            <!--=== End Header ===-->

            <!-- display content -->
            <?php echo $content_for_layout; ?>

            <!--=== Footer Version 1 ===-->
            <div class="footer-v1">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!-- About -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <a href="index.html"><img id="logo-footer" class="footer-logo" src="<?php echo base_url(); ?>bootstrap/img/logo2-default.png" alt=""></a>
                                <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                                <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                            </div><!--/col-md-3-->
                            <!-- End About -->

                            <!-- Latest -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="posts">
                                    <div class="headline"><h2>ผู้ดูแลระบบ</h2></div>
                                    <ul class="list-unstyled latest-list">
                                        <li>
                                            <a href="#">นายจีระยุทธ ปิ่นสุวรรณ</a>
                                            <small>manmakemoney@gmail.com</small>
                                        </li>
                                        <li>
                                            <a href="#">นายสมโชค แบนเพชร</a>
                                            <small>vaccine@gmail.com</small>
                                        </li>
                                        <li>
                                            <a href="#">นายอิศเรศร์ นาครักสุด</a>
                                            <small>it001@gmail.com</small>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--/col-md-3-->
                            <!-- End Latest -->

                            <!-- Link List -->
                            <div class="col-md-3 md-margin-bottom-40">
                                <div class="headline"><h2>ค่านิยม 7 ประการ</h2></div>
                                <ul class="list-unstyled link-list">
                                    <li><a href="#">รับผิดชอบมอบคุณค่า</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">สามัคคี มีวินัย</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">ใฝ่เรียนรู้ อยู่อย่างพอเพียง</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">เคียงคู่ชุมชน</a><i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">โรงพยาบาลละแม จ.ชุมพร</a><i class="fa fa-angle-right"></i></li>
                                </ul>
                            </div><!--/col-md-3-->
                            <!-- End Link List -->

                            <!-- Address -->
                            <div class="col-md-3 map-img md-margin-bottom-40">
                                <div class="headline"><h2>ติดต่อเรา</h2></div>
                                <address class="md-margin-bottom-40">
                                    45ม.7 ถ.เพชรเกษม <br />
                                    ต.ละแม อ.ละแม จ.ชุมพร <br />
                                    โทร: 077-559116 <br />
                                    Fax: 077-559117 <br />
                                    Email: <a href="mailto:manmakemoney@gmail.com" class="">manmakemoney@gmail.com</a>
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


        <!-- JS Global Compulsory -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/jquery/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- JS Implementing Plugins -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/smoothScroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/flexslider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- JS Customization -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/custom.js"></script>
        <!-- JS Page Level -->
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/app.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/plugins/fancy-box.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/plugins/style-switcher.js"></script>
        <script type="text/javascript" src="<?php echo base_url('themes/bootstrap'); ?>/js/plugins/revolution-slider.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                App.init();
                FancyBox.initFancybox();
                StyleSwitcher.initStyleSwitcher();
                RevolutionSlider.initRSfullWidth();
            });
            s
        </script>

    </body>
</html>

<div class="col-md-9">
    <!-- Magazine Slider -->
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; visibility: hidden;">      

        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?php echo base_url('themes/bootstrap'); ?>/plugins/jssor-slider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>

        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">

            <?php foreach ($slideshow as $row) { ?>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="<?php echo base_url(); ?>assets/slideshow_uploads/<?php echo $row->filename; ?>" />
                    <div data-u="caption" data-t="0" style="position: absolute; top: 320px; left: 30px; width: 350px; height: 30px; background-color: rgba(235,81,0,0.5); font-size: 20px; color: #ffffff; line-height: 30px; text-align: center;"><?php echo $row->title; ?></div>
                </div>          
            <?php } ?>

        </div>

        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>

        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>

    </div>

    <!-- End Magazine Slider -->
    <br/>

    <!-- Magazine News -->
    <div class="magazine-news">
        <div class="row">

            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="<?php echo site_url('site'); ?>/news/1" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">N E W S !!</h4>
                        <p class="list-group-item-text">ข่าวประชาสัมพันธ์</p>
                    </a>

                    <?php foreach ($news_general as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_new/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน: <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">ประกาศล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/news.jpg" width="80" height="80">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> <font color="blue">...อ่านต่อ</font>
                            </p> 
                        </a>

                    <?php } ?>



                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a  href="<?php echo site_url('site'); ?>/news/2" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">N E W S !!</h4>
                        <p class="list-group-item-text">จัดซื้อจัดจ้าง</p>
                    </a>

                    <?php foreach ($news_budget as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_new/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน: <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">ประกาศล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/news.jpg" width="80" height="80">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?><font color="blue">...อ่านต่อ</font>
                            </p> 
                        </a>

                    <?php } ?>

                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="<?php echo site_url('site'); ?>/gallery" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">ดูทั้งหมด..</span>
                        <h4 class="list-group-item-heading">Gallery !!</h4>
                        <p class="list-group-item-text">กิจกรรมหน่วยงาน</p>
                    </a>

                    <?php foreach ($gallery as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_gallery/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->title; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">ผู้ชม : <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">ข้อมูลล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/gallery_uploads/<?php echo $row->thumbnail; ?>" width="100" height="65">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> <font color="blue">...ดูภาพกิจกรรม</font>
                            </p> 
                        </a>

                    <?php } ?>

                </div>
            </div><!-- /.col-sm-4 -->







        </div>
    </div>
    <!-- End Magazine News -->




    <div class="magazine-news">
        <div class="row">

            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="<?php echo site_url('site'); ?>/articles/1" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">Articles !!</h4>
                        <p class="list-group-item-text">บทความทั่วไป</p>
                    </a>

                    <?php foreach ($articles_general as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_article/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน: <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">โพสต์ล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/articles.jpg" width="60" height="60">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> <font color="blue">...อ่านต่อ</font>
                            </p> 
                        </a>

                    <?php } ?>



                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a  href="<?php echo site_url('site'); ?>/articles/2" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">Articles !!</h4>
                        <p class="list-group-item-text">บทความทางวิชาการ</p>
                    </a>

                    <?php foreach ($articles_technical as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_article/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน: <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">โพสต์ล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/articles.jpg" width="60" height="60">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> <font color="blue">...อ่านต่อ</font>
                            </p> 
                        </a>

                    <?php } ?>

                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="<?php echo site_url('site'); ?>/articles/3" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">Articles !!</h4>
                        <p class="list-group-item-text">บทความงานคุณภาพ</p>
                    </a>

                    <?php foreach ($articles_ha as $row) { ?>
                        <a target="_blank" href="<?php echo site_url('site'); ?>/read_article/<?php echo $row->id; ?>" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">ผู้ชม : <?php echo $row->view; ?></span>&nbsp;&nbsp;
                            <span class="label pull-right btn-default"><font color="#2f7086">โดย: <?php echo $row->display_name; ?></font></span>
                            <span class="label pull-right btn-default"><font color="#2f7086">โพสต์ล่าสุด: <?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/articles.jpg" width="60" height="60">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> <font color="blue">...อ่านต่อ</font>
                            </p> 
                        </a>

                    <?php } ?>

                </div>
            </div><!-- /.col-sm-4 -->







        </div>
    </div>
    <!-- End Magazine News -->








    <!-- Magazine News -->
    <div class="magazine-news">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="#ffffff"><b>DOWNLOAD DOCUMENT (เรื่องใหม่)</b></font>
                        <span class="badge pull-right"></span>
                    </div>
                    <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th align="center">วันที่โพสต์</th>
                                <th>ชื่อรายการโหลด</th>
                                <th>ประเภท</th>
                                <th>จำนวนผู้เข้าชม</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doc_new as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->register_date)); ?></td>
                                    <td><a target="_blank" href="<?php echo site_url('site'); ?>/read_doc/<?php echo $row->id; ?>"><?php echo $row->topic; ?></a></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->view; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->

                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Magazine News -->


    <!-- Magazine News -->
    <div class="magazine-news">

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-danger">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red"><b>DOWNLOAD DOCUMENT (ยอดนิยม)</b></font>
                        <span class="badge pull-right"></span>
                    </div>
                    <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th align="center">วันที่โพสต์</th>
                                <th>ชื่อรายการโหลด</th>
                                <th>ประเภท</th>
                                <th>จำนวนผู้เข้าชม</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doc_hit as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->register_date)); ?></td>
                                    <td><a target="_blank" href="<?php echo site_url('site'); ?>/read_doc/<?php echo $row->id; ?>"><?php echo $row->topic; ?></a></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->view; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->

                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- End Magazine News -->

    <!--<div class="text-center">
        <ul class="pagination">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="active"><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </div>-->

</div>

<script type="text/javascript">
    window.onload = function () {

        var jssor_1_SlideoTransitions = [
            [{b: 0, d: 600, y: -290, e: {y: 27}}],
            [{b: 0, d: 1000, y: 185}, {b: 1000, d: 500, o: -1}, {b: 1500, d: 500, o: 1}, {b: 2000, d: 1500, r: 360}, {b: 3500, d: 1000, rX: 30}, {b: 4500, d: 500, rX: -30}, {b: 5000, d: 1000, rY: 30}, {b: 6000, d: 500, rY: -30}, {b: 6500, d: 500, sX: 1}, {b: 7000, d: 500, sX: -1}, {b: 7500, d: 500, sY: 1}, {b: 8000, d: 500, sY: -1}, {b: 8500, d: 500, kX: 30}, {b: 9000, d: 500, kX: -30}, {b: 9500, d: 500, kY: 30}, {b: 10000, d: 500, kY: -30}, {b: 10500, d: 500, c: {x: 87.50, t: -87.50}}, {b: 11000, d: 500, c: {x: -87.50, t: 87.50}}],
            [{b: 0, d: 600, x: 410, e: {x: 27}}],
            [{b: -1, d: 1, o: -1}, {b: 0, d: 600, o: 1, e: {o: 5}}],
            [{b: -1, d: 1, c: {x: 175.0, t: -175.0}}, {b: 0, d: 800, c: {x: -175.0, t: 175.0}, e: {c: {x: 7, t: 7}}}],
            [{b: -1, d: 1, o: -1}, {b: 0, d: 600, x: -570, o: 1, e: {x: 6}}],
            [{b: -1, d: 1, o: -1, r: -180}, {b: 0, d: 800, o: 1, r: 180, e: {r: 7}}],
            [{b: 0, d: 1000, y: 80, e: {y: 24}}, {b: 1000, d: 1100, x: 570, y: 170, o: -1, r: 30, sX: 9, sY: 9, e: {x: 2, y: 6, r: 1, sX: 5, sY: 5}}],
            [{b: 2000, d: 600, rY: 30}],
            [{b: 0, d: 500, x: -105}, {b: 500, d: 500, x: 230}, {b: 1000, d: 500, y: -120}, {b: 1500, d: 500, x: -70, y: 120}, {b: 2600, d: 500, y: -80}, {b: 3100, d: 900, y: 160, e: {y: 24}}],
            [{b: 0, d: 1000, o: -0.4, rX: 2, rY: 1}, {b: 1000, d: 1000, rY: 1}, {b: 2000, d: 1000, rX: -1}, {b: 3000, d: 1000, rY: -1}, {b: 4000, d: 1000, o: 0.4, rX: -1, rY: -1}]
        ];

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 2000,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                    [{d: 2000, b: 1000}]
                ]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);


        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 600);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end


    };
</script>



<style>

    /* jssor slider bullet navigator skin 01 css */
    /*
    .jssorb01 div           (normal)
    .jssorb01 div:hover     (normal mouseover)
    .jssorb01 .av           (active)
    .jssorb01 .av:hover     (active mouseover)
    .jssorb01 .dn           (mousedown)
    */
    .jssorb01 {
        position: absolute;
    }
    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
        position: absolute;
        /* size of bullet elment */
        width: 12px;
        height: 12px;
        filter: alpha(opacity=70);
        opacity: .7;
        overflow: hidden;
        cursor: pointer;
        border: #000 1px solid;
    }
    .jssorb01 div { background-color: gray; }
    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
    .jssorb01 .av { background-color: #fff; }
    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

    /* jssor slider arrow navigator skin 02 css */
    /*
    .jssora02l                  (normal)
    .jssora02r                  (normal)
    .jssora02l:hover            (normal mouseover)
    .jssora02r:hover            (normal mouseover)
    .jssora02l.jssora02ldn      (mousedown)
    .jssora02r.jssora02rdn      (mousedown)
    */
    .jssora02l, .jssora02r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url('<?php echo base_url('themes/bootstrap'); ?>/plugins/jssor-slider/img/a02.png') no-repeat;
        overflow: hidden;
    }
    .jssora02l { background-position: -3px -33px; }
    .jssora02r { background-position: -63px -33px; }
    .jssora02l:hover { background-position: -123px -33px; }
    .jssora02r:hover { background-position: -183px -33px; }
    .jssora02l.jssora02ldn { background-position: -3px -33px; }
    .jssora02r.jssora02rdn { background-position: -63px -33px; }
</style>
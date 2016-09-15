<div class="col-md-9">
    <!-- Magazine Slider -->
    <div class="flexslider">        
        <ul class="slides">       
            <li>
                <img  src="<?php echo base_url(); ?>assets/slideshow_uploads/1.jpg">
            </li>         
            <li>
                <img  src="<?php echo base_url(); ?>assets/slideshow_uploads/2.jpg">
            </li>
        </ul>
    </div>

    <!-- End Magazine Slider -->

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
                                <?php echo $row->description; ?> 
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
                                <?php echo $row->description; ?> 
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
                                <?php echo $row->description; ?> 
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
                                <?php echo $row->description; ?> 
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
                                <?php echo $row->description; ?> 
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
                                <?php echo $row->description; ?> 
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
        $(.flexslider).flexslider();
        //alert('hello');
    };
</script>
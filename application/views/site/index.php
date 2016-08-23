<div class="col-md-9">
    <!-- Magazine Slider -->
    <div class="carousel slide carousel-v1 margin-bottom-40" id="myCarousel-1">
        <div class="carousel-inner">
            <div class="item active">
                <img alt="" src="<?php echo base_url(); ?>assets/slideshow_uploads/10.jpg">
                <div class="carousel-caption">
                    <p>ใส่หัวข้อๆๆๆๆๆๆ</p>
                </div>
            </div>

            <div class="item">
                <img alt="" src="<?php echo base_url(); ?>assets/slideshow_uploads/11.jpg">
                <div class="carousel-caption">
                    <p>ใส่หัวข้อๆๆๆๆๆๆ</p>
                </div>
            </div>
        </div>

        <div class="carousel-arrow">
            <a data-slide="prev" href="#myCarousel-1" class="left carousel-control">
                <i class="fa fa-angle-left"></i>
            </a>
            <a data-slide="next" href="#myCarousel-1" class="right carousel-control">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- End Magazine Slider -->

    <!-- Magazine News -->
    <div class="magazine-news">
        <div class="row">

            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="index.php?r=news/index&amp;type=1" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">N E W S !!</h4>
                        <p class="list-group-item-text">ข่าวประชาสัมพันธ์</p>
                    </a>

                    <?php foreach ($news_general as $row) { ?>
                        <a href="index.php?r=news/views&amp;id=19" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน : <?php echo $row->view; ?></span>&nbsp;&nbsp;
                          
                            <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/no-image.gif" width="100" height="48">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> 
                            </p> 
                        </a>

                    <?php } ?>



                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="index.php?r=news/index&amp;type=1" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">N E W S !!</h4>
                        <p class="list-group-item-text">จัดซื้อจัดจ้าง</p>
                    </a>

                    <?php foreach ($news_budget as $row) { ?>
                        <a href="index.php?r=news/views&amp;id=19" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->topic; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">อ่าน : <?php echo $row->view; ?></span>&nbsp;&nbsp;
                           
                            <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/images/no-image.gif" width="100" height="48">
                            <p class="list-group-item-text">
                                <?php echo $row->description; ?> 
                            </p> 
                        </a>

                    <?php } ?>

                </div>
            </div><!-- /.col-sm-4 -->


            <div class="col-sm-4 ">
                <div class="list-group panel-danger">
                    <a href="index.php?r=news/index&amp;type=1" class="list-group-item active">
                        <span class="badge pull-right rounded btn-danger">อ่านทั้งหมด..</span>
                        <h4 class="list-group-item-heading">N E W S !!</h4>
                        <p class="list-group-item-text">กิจกรรมหน่วยงาน</p>
                    </a>

                    <?php foreach ($gallery as $row) { ?>
                        <a href="index.php?r=news/views&amp;id=19" class="list-group-item ">
                            <h5 class="list-group-item-heading"><b><font color="#3775dd"><?php echo $row->title; ?></font></b></h5>
                            <span class="label pull-right rounded btn-success">ผู้ชม : <?php echo $row->view; ?></span>&nbsp;&nbsp;
                         
                            <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $row->modified_date; ?></font></span>
                            <img src="<?php echo base_url(); ?>assets/gallery_uploads/<?php echo $row->thumbnail; ?>" width="100" height="48">
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
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red">D O W N L O A D - D O C U M E N T-(เรื่องใหม่)</font>
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
                                <th>จำนวนครั้ง</th>
                                <th align="center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doc_new as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->register_date)); ?></td>
                                    <td><?php echo $row->topic; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->download; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->
                                    <td>
                                        <span class="label pull-right rounded btn-primary">                              
                                            <a target="_blank" href="<?php echo base_url('assets/doc_uploads/' . $row->filename); ?>" role="button"> <img src="<?php echo base_url(); ?>assets/images/load2.png"> ดาวน์โหลด</a>
                                        </span>
                                    </td>
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
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red">D O W N L O A D - D O C U M E N T- (ยอดนิยม)</font>
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
                                <th>จำนวนครั้ง</th>
                                <th align="center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doc_hit as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->register_date)); ?></td>
                                    <td><?php echo $row->topic; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->download; ?></td>
                                   <!-- <td><span class="label rounded label-success">1</span></td>-->
                                    <td>                                    
                                    <span class="label pull-right rounded btn-danger">                              
                                            <a target="_blank" href="<?php echo base_url('assets/doc_uploads/' . $row->filename); ?>" role="button"> <img src="<?php echo base_url(); ?>assets/images/load2.png"> ดาวน์โหลด</a>
                                        </span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- End Magazine News -->

    <div class="text-center">
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
    </div>
</div>
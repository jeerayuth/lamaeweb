<div class="col-md-9">


  <div class="magazine-news">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><font color="red">บทความ</font>
                        <span class="badge pull-right"></span>
                    </div>
                    <!-- Table -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th align="center">วันที่โพสต์</th>
                                <th>หัวข้อ</th>
                                <th>หมวดหมู่</th>
                                <th>จำนวนผู้อ่านบทความ</th>
                                <th align="center">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $row) { ?>
                                <tr>
                                    <td>#</td>
                                    <td><img src="<?php echo base_url(); ?>assets/images/date.png">  <?php echo date('d/m/Y', strtotime($row->modified_date)); ?></td>
                                    <td><a target="_blank" href="<?php echo site_url('site'); ?>/read_article/<?php echo $row->id; ?>"><?php echo $row->topic; ?></a></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->view; ?></td>
                           
                       
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    
                    <br/>
                </div>
            </div>
        </div>
    </div>
    
  
 
</div>
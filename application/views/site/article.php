<div class="col-md-9">

<div class="panel panel-info" style="padding:15px;border-top-width:2px; border-right-width:2px; border-bottom-width:2px; border-left-width:2px;">
    <div><h3>เรื่อง: <?php echo $result->topic ;?></h3></div>
    <div>โดย: <?php echo $result->display_name ;?></div>
     <div>อ่าน: <?php echo $result->view ;?></div>
     <div>วันที่โพสต์: <?php echo $result->created_date ;?></div>
     <div>ปรับปรุงโพสต์ล่าสุด: <?php echo $result->modified_date ;?></div>
     <?php if($result->filename != '') {?>
     [<a target="_blank" href="<?php echo base_url('assets/articles_uploads/' . $result->filename); ?>" role="button">ดาวน์โหลดแฟ้มประกอบ</a>]
     <?php } ?>
    <div><?php echo $result->description;?></div>
    
    
</div>
    
 
</div>
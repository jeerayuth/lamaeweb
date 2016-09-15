<div class="col-md-9">

<div class="panel panel-info" style="padding:15px;border-top-width:2px; border-right-width:2px; border-bottom-width:2px; border-left-width:2px;">
    <div><h3>เรื่อง: <?php echo $result->topic ;?></h3></div>
    <div>โดย: <?php echo $result->display_name ;?></div>
     <div>เข้าชม: <?php echo $result->view ;?></div>
     <div>วันที่ประกาศ: <?php echo $result->created_date ;?></div>
     <div>ปรับปรุงประกาศล่าสุด: <?php echo $result->modified_date ;?></div>
     <?php if($result->filename != '') {?>
     [<a target="_blank" href="<?php echo base_url('assets/news_uploads/' . $result->filename); ?>" role="button">ดาวน์โหลดแฟ้มประกอบ</a>]
     <?php } ?>
    <div><?php echo $result->description;?></div>
    
    
</div>
    
      <br/>
    <center><a target="_blank" href = "http://www.facebook.com/sharer.php?u=<?php echo site_url('site'); ?>/read_new/<?php echo $result->id; ?>"><img src="<?php echo base_url(); ?>assets/images/share.jpg" ></a></center>
    <br/>
 
</div>
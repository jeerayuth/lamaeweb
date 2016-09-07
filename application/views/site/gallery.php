<div class="col-md-9">

<div class="panel panel-info" style="padding:15px;border-top-width:2px; border-right-width:2px; border-bottom-width:2px; border-left-width:2px;">
    <div><h3>เรื่อง: <?php echo $result->title ;?></h3></div>
    <div>โดย: <?php echo $result->display_name ;?></div>
    <div>จำนวนผู้เข้าชม: <?php echo $result->view ;?></div>
    <div>วันที่โพสต์: <?php echo $result->created_date ;?></div>
    <div>ปรับปรุงข้อมูลล่าสุด: <?php echo $result->modified_date ;?></div>
    <div><?php echo $result->description;?></div>
</div>  

    <?php //echo $output; ?>
    
</div>
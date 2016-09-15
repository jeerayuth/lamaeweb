<?php 

foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
        
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

       
            
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>

<h3>ระบบอัพโหลดแกลอรี่รูปภาพ</h3>
<font color="red" size=2px">หมายเหตุ: ต้องมีการ resize ขนาดภาพมาก่อนทำการอัพโหลด (ขนาดภาพที่เหมาะสม 600x400 pixel)</font>
<div class="alert alert-success" role="alert"><?php echo $output; ?></div>


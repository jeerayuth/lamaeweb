<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			ลิงค์หน่วยงาน
			<small>
				ลิงค์หน่วยงานที่เกี่ยวข้อง
			</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo  base_url('links'); ?>">
					<i class="fa fa-dashboard">
					</i>หน้าแรก
				</a>
			</li>
			<li>
				<a href="<?php echo  base_url('links'); ?>">
					ลิงค์หน่วยงานที่เกี่ยวข้อง
				</a>
			</li>
			<li class="active">
				<?php echo $result->name?>
			</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<!-- Your Page Content Here -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">
					แก้ไขข้อมูล
				</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" action="<?php echo base_url('links/postdata'); ?>" method="post">
				<input type="hidden" name="id" value="<?php echo $result->id?>">
				<div class="box-body">
					<div class="form-group">
						<label for="exampleInputEmail1">
							ชื่อหน่วยงาน/ระบบงาน
						</label> <?php echo $this->session->flashdata('error_name')?>
						<input type="text" id="name" class="form-control" name="name" value="<?php echo  $result->name ?>">
					</div>
					<div class="form-group">
						<label>
							ลิงค์เว็บไซต์
						</label>
						<input type="text" id="link" class="form-control" name="link" value="<?php echo  $result->link ?>">
					</div>
				</div><!-- /.box-body -->

				<div class="box-footer">
					<button class="btn btn-primary" type="submit">
						<i class="fa fa-fw fa-save">
						</i>บันทึกข้อมูล
					</button>
					<a class="btn btn-danger" href="<?php echo  base_url('links'); ?>" role="button">
						<i class="fa fa-fw fa-close">
						</i>ยกเลิก
					</a>
				</div>
			</form>
		</div>
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->
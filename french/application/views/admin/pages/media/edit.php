
<?php
$statement = $this->db->query("SELECT * FROM tbl_file WHERE file_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit File</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/media/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($statement->result() as $row) {
	$file_title = $row->file_title;
	$file_name = $row->file_name;
}
?>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>

			<form class="form-horizontal" action="<?=base_url('Master/media/updateVal');?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$id;?>">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">File Title <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="file_title" value="<?php echo $file_title; ?>">
							</div>
						</div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing File</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<img src="<?=base_url('assets/admin/uploads/'.$file_name);?>" class="existing-photo" style="width:300px;">
				                <input type="hidden" name="previous_file" value="<?php echo $file_name; ?>">
				            </div>
				        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Upload New File <span>*</span></label>
							<div class="col-sm-4" style="padding-top:6px;">
								<input type="file" name="file">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" >Submit</button>
							</div>
						</div>
					</div>
				</div>

			</form>


		</div>
	</div>

</section>

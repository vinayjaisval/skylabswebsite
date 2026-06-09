<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Testimonial</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/testimonial/view')?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php
$statement = $this->db->query("SELECT * FROM tbl_testimonial WHERE id=".$id);
foreach ($statement->result() as $row) {
	$name        = $row->name;
	$designation = $row->designation;
	$company     = $row->company;
	$photo       = $row->photo;
	$comment     = $row->comment;
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

			<form class="form-horizontal" action="<?=base_url('Master/testimonial/updateTestimonial')?>" method="post" enctype="multipart/form-data">
				<input type="hidden" name="current_photo" value="<?php echo $photo; ?>">
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php echo $name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Designation <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="designation" value="<?php echo $designation; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Company <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" autocomplete="off" class="form-control" name="company" value="<?php echo $company; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Existing Photo</label>
							<div class="col-sm-9" style="padding-top:5px">
								<img src="<?=base_url('assets/admin/uploads/'.$photo);?>" alt="<?=$name;?>" style="width:180px;">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Photo </label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
							</div>
						</div>						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Comment <span>*</span></label>
							<div class="col-sm-6">
								<textarea class="form-control" name="comment" style="height:140px;"><?php echo $comment; ?></textarea>
							</div>
						</div>			
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>


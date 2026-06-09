


<?php
$statement = $this->db->query("SELECT * FROM tbl_faq WHERE faq_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit FAQ</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/faq/view');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($statement->result() as $row) {
	$faq_title       = $row->faq_title;
	$faq_content     = $row->faq_content;
	$faq_category_id = $row->faq_category_id;
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

			<form class="form-horizontal" action="<?=base_url('Master/faq/updateFaq');?>" method="post">
				<input type="hidden" name="id" value="<?=$id;?>">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">FAQ Title <span>*</span></label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="faq_title" value="<?php echo $faq_title; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">FAQ Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="faq_content"><?php echo $faq_content; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select FAQ Category <span>*</span></label>
							<div class="col-sm-4">
								<select class="form-control select2" name="faq_category_id">
									<?php
									$statement1 = $this->db->query("SELECT * FROM tbl_faq_category ORDER BY faq_category_id ASC");					
									foreach ($statement1->result() as $row) {
										if($row->faq_category_id == $faq_category_id) {
											$selected = 'selected';
										} else {
											$selected = '';
										}
										echo '<option value="'.$row->faq_category_id.'" '.$selected.'>'.$row->faq_category_name.'</option>';
									}
									?>
								</select>
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
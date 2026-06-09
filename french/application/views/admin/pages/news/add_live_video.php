

<section class="content-header">
	<div class="content-header-left">
		<h1>Add Live Video</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/news/live_news');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>

			<form class="form-horizontal" action="<?=base_url('Master/news/addLiveVideo');?>" method="post">

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Video Title <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="video_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">iframe Code <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="video_iframe" style="height:200px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Video Category <span>*</span></label>
							<div class="col-sm-4">
								<select class="form-control" name="category_id">
									<option value="">Select a video category</option>
									<?php
$statement = $this->db->query("SELECT * FROM tbl_category ORDER BY category_name ASC");
									
									foreach ($statement->result() as $row) {
										echo '<option value="'.$row->category_id.'">'.$row->category_name.'</option>';
									}
									?>
								</select>
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

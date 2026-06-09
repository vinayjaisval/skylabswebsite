
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Menu</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/menu_two/view')?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
		</div>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab">Page as Menu</a></li>
					<li><a href="#tab_2" data-toggle="tab">Other Menu</a></li>
				</ul>
				<div class="tab-content">
      				<div class="tab-pane active" id="tab_1">


						<form class="form-horizontal" action="<?=base_url('Master/menu_two/saveFirstMenu')?>" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Select Page <span>*</span></label>
										<div class="col-sm-4">
											<select class="form-control select2" name="page_id">
												<option value="">Select a page</option>
<?php
$statement = $this->db->query("SELECT * FROM tbl_page ORDER BY page_name ASC");
     
foreach ($statement->result() as $row) {
   	echo '<option value="'.$row->id.'">'.$row->page_name.'</option>';
}
?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Select Parent <span>*</span></label>
										<div class="col-sm-4">
											<select class="form-control select2" name="menu_parent">
												<option value="">Select a parent for this menu</option>
                                                <option value="0">No Parent</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Order <span>*</span></label>
										<div class="col-sm-1">
											<input type="text" class="form-control" name="menu_order">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>


      				</div>
      				<div class="tab-pane" id="tab_2">


						<form class="form-horizontal" action="<?=base_url('Master/menu_two/saveSecondMenu');?>" method="post">
							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Menu Name <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="menu_name">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Menu URL <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="menu_url">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Parent <span>*</span></label>
										<div class="col-sm-4">
											<select class="form-control select2" name="menu_parent" style="width:100%;">
												<option value="">Select a parent for this menu</option>
												<option value="0">No Parent</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Order <span>*</span></label>
										<div class="col-sm-1">
											<input type="text" class="form-control" name="menu_order">
										</div>
									</div>

									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Target Blank </label>
										<div class="col-md-8">
											<select class="form-control select2" name="menu_target">
												<option value="0">Non</option>
												<option value="1">Target Blank</option>
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label for="" class="col-sm-2 control-label"></label>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-success pull-left" name="form_other">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</form>



      				</div>
      				
      			</div>
      		</div>
			
		</div>
	</div>

</section>


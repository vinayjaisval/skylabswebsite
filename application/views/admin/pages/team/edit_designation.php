<?php
$statement = $this->db->query("SELECT * FROM tbl_designation WHERE designation_id=".$id);
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Designation</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/team/designation');?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<?php							
foreach ($statement->result() as $row) {
	$designation_name = $row->designation_name;
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

        <form class="form-horizontal" action="<?=base_url('Master/team/update_designation');?>" method="post">
        	<input type="hidden" name="id" value="<?=$id;?>">
	        <div class="box box-info">
	            <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Designation Name <span>*</span></label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="designation_name" value="<?php echo $designation_name; ?>" autocomplete="off">
	                    </div>
	                </div>
	                <div class="form-group">
	                	<label for="" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-6">
	                      <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
	                    </div>
	                </div>
	            </div>
	        </div>
        </form>



    </div>
  </div>

</section>



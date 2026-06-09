
<?php
$statement = $this->db->query("SELECT * FROM tbl_page_content WHERE page_id=".$id);
foreach ($statement->result() as $row) {
	$page1      = $row->page1;
	$page2     	= $row->page2;
	$page3  	= $row->page3;
	$page4  	= $row->page4;
	$page5      = $row->page5;
	$page6 		= $row->page6;
	$page7 		= $row->page7;
	$page8 		= $row->page8;
	$page9 		= $row->page9;
	$page10 	= $row->page10;
}
?>


<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Page Service</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/page/service_page')?>" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">

	

		<?php if ($this->session->flashdata('success')) { ?>
        	<div class="alert alert-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
        <?php } ?>

        <form class="form-horizontal" action="<?=base_url('Master/page/updatePageContent');?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="page_id" value="<?php echo $id; ?>">
        <div class="box box-info">
			

            <div class="box-body">
				<h4><?php echo $page_name; ?></h4>
				<hr>

				<input type="text" class="form-control" name="page1" value="<?php echo $page1; ?>">
				<br>
				<input type="text" class="form-control" name="page2" value="<?php echo $page2; ?>">
				<br>
				<input type="text" class="form-control" name="page3" value="<?php echo $page3; ?>">
				<br>

				<div class="row">
					<div class="col-md-4">
						<input type="text" class="form-control" name="page4" value="<?php echo $page4; ?>">
						<br>
						<textarea class="form-control" rows="6" name="page5"><?php echo $page5; ?></textarea>
						<br>
					</div>
					<div class="col-md-4">
						<input type="text" class="form-control" name="page6" value="<?php echo $page6; ?>">
						<br>
						<textarea class="form-control" rows="6" name="page7"><?php echo $page7; ?></textarea>
						<br>
					</div>
					<div class="col-md-4">

						<input type="file" name="page8">(Only jpg, jpeg, gif and png are allowed)
						<input type="hidden" name="page8_old" value="<?=$page8;?>">

						<img src="<?=base_url('assets/admin/uploads/'.$page8);?>" alt="Page Banner" style="width:200px;">

					</div>
				</div>

                <div class="form-group">
                	<label for="" class="col-sm-2 control-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-success pull-left">Update</button>
                    </div>
                </div>

            </div>
        </div>
        </form>
    </div>
  </div>
</section>




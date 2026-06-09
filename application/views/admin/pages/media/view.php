

<section class="content-header">
	<div class="content-header-left">
		<h1>View Files</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/media/add');?>" class="btn btn-primary btn-sm">Add New</a>
	</div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        <?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
			<thead>
			    <tr>
			        <th>SL</th>
			        <th>File Title</th>
			        <th>File Url</th>
			        <th>Download File</th>
			        <th>Action</th>
			    </tr>
			</thead>
            <tbody>

            	<?php
            	$i=0;
            	$statement = $this->db->query("SELECT 
            	                           
											file_id,
											file_title,
											file_name

            	                           	FROM tbl_file
            	                           	");
            							
            	foreach ($statement->result() as $row) {
            		$i++;
	            	?>
	                <tr>
	                    <td><?php echo $i; ?></td>
	                    <td><?php echo $row->file_title; ?></td>
	                    <td>
	                    	<?php
	                    		echo base_url('assets/admin/uploads/'.$row->file_name);
	                    	?>
	                    </td>
	                    <td>
	                    	<a download="<?php echo $row->file_name; ?>" href="<?=base_url('assets/admin/uploads/'.$row->file_name);?>">Click Here</a>
	                    </td>
	                    <td>
	                        <a href="<?=base_url('Master/media/edit/'.$row->file_id);?>" class="btn btn-primary btn-xs">Edit</a>
	                        <a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/media/delete/'.$row->file_id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
	                    </td>
	                </tr>
	                <?php
            	}
            	?>
            </tbody>
          </table>
        </div>
      </div>
  

</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>



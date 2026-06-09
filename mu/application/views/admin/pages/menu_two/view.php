

<section class="content-header">
	<div class="content-header-left">
		<h1>View Menus</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/menu_two/menu_add');?>" class="btn btn-primary btn-sm">Add New</a>
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

			<div class="box box-info">        
				<div class="box-body table-responsive">

					
					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Serial</th>
								<th>Menu Type</th>
								<th>Menu Name</th>
								<th>Menu URL</th>
								<th>Menu Order</th>
								<th>Menu Parent</th>
								<th style="width:60px;">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							foreach ($menu as $row) {
								$i++;

								if($row->menu_type =='Page'):
   
    $r = $this->db->query("SELECT * FROM tbl_page WHERE id=".$row->page_id);
    foreach ($r->result() as $row1) {
    	$menu_name = $row1->page_name;
    }
    $menu_url = '---';
    							else:
	$menu_name = $row->menu_name;
    $menu_url = $row->menu_url;
                                endif;

								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row->menu_type; ?></td>
									<td><?php echo $menu_name; ?></td>
									<td style="width:250px;word-break: break-word;"><?php echo $menu_url; ?></td>
									<td><?php echo $row->menu_order; ?></td>
									<td>
										<?php
                                        if($row->menu_parent == 0):
                                            echo '---';
                                        else:

           $r = $this->db->query("SELECT * FROM tbl_menu_two WHERE id=".$row->menu_parent);
           //echo $this->db->last_query();                  
            foreach ($r->result() as $row1) {
				if($row1->page_id == '0'):
                	echo $row1->menu_name;
                else:
           $s = $this->db->query("SELECT * FROM tbl_page WHERE id=".$row1->page_id);                         
            foreach ($s->result() as $row2) {
                echo $row2->page_name;
           }
                endif;
           }
                                        endif;
                                        ?>
									</td>
									<td>
		<a href="<?=base_url('Master/menu_two/menu_edit/'.$row->id)?>" class="btn btn-primary btn-xs" style="width: 100%;margin-bottom:5px;">Edit</a>
		<a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/menu_two/deleteMenu/'.$row->id)?>" data-toggle="modal" data-target="#confirm-delete" style="width: 100%;">Delete</a>
									</td>
								</tr>
								<?php
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
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


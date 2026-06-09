<section class="content-header">
	<div class="content-header-left">
		<h1>View Products</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/products/add');?>" class="btn btn-primary btn-sm">Add Product</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">


			<div class="box box-info">
				<?php if ($this->session->flashdata('success')) { ?>
		            <div class="alert alert-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
		        <?php } ?>
		        <?php if ($this->session->flashdata('error')) { ?>
		            <div class="alert alert-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
		        <?php } ?>

				<div class="box-body table-responsive">
					<table id="example4" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
                <th>UniqueId</th>
								<th>Thumbnail</th>
								<th>Title</th>
								<th>Tags</th>
                <th>Status</th>
								<th></th>
                <th></th>
							</tr>
						</thead>
						<tbody>
							<?php					
							foreach ($productss as $row) {
								
								?>
								<tr>
									<td><?=$page1+1;?></td>
                  <td><?=$row->prod_code;?></td>
									<td>
                  <img src="<?=base_url('assets/admin/uploads/'.$row->photo);?>" alt="<?=$row->prod_title;?>" style="max-width:100px;" />
									</td>
									<td><?php echo $row->prod_title; ?></td>
									<td><?php echo $row->tags; ?></td>
                  <td><?php if($row->status == '1'){ echo "Active"; } else { echo 'Inactive'; }?></td>
									<td>										
                    <a href="<?=base_url('Master/products/edit/'.$row->prod_id);?>" class="btn btn-primary btn-xs">Edit</a>
                  </td>
                  <td>
										<a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/products/delete/'.$row->prod_id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td>
								</tr>
								<?php ++$page1;
							}
							?>							
						</tbody>
					</table>


					<?php if(!empty($productss)){
                                              
            $count = $catNumRows;
            $a = $count/$offset;
            $a = ceil($a);
            $j=($page);
            $j = ceil($j);
            if($j<0) {
                $j=1;
            }
            $k=$j+6;
            if($j >= $a-6){
                $k=$a;
            }
            $i =$j-5;
            if($i<=0){
                $i=1;
            }
                                
                            ?>

                  <div class="col-md-6">
                    <div class="col-md-2">
                      <a href="<?=base_url('Master/products/view');?>?page=1"><i class="fa fa-fast-backward" aria-hidden="true"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                      <?php
                            if( $page > 1){
                            ?>
                              <a href="<?=base_url('Master/products/view');?>?page=<?=$page-1;?>"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
                      <?php } else { ?>
                        <i class="fa fa-step-backward" aria-hidden="true"></i>
                      <?php } ?>
                      
                    </div>
                    <div class="col-md-8 text-center">
                      Page <?php if($page==0){ echo '1'; } else { echo $page; } ?> of <?=$a;?> (Total Products: <?=$count;?>)
                    </div>
                    <div class="col-md-2 text-right">
                      <?php
                            if($a >= $page+1){
                            ?>
                              <a href="<?=base_url('Master/products/view');?>?page=<?=$page+1;?>"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
                      <?php } else { ?>
                        <i class="fa fa-step-forward" aria-hidden="true"></i>
                      <?php } ?>
                       &nbsp;&nbsp;&nbsp;&nbsp;
                      <a href="<?=base_url('Master/products/view');?>?page=<?=$a;?>"><i class="fa fa-fast-forward" aria-hidden="true"></i></a>
                    </div>
                  </div>
<?php } ?>
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
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>



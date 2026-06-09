<section class="content-header">
	<div class="content-header-left">
		<h1>View News</h1>
	</div>
	<div class="content-header-right">
		<a href="<?=base_url('Master/news/add');?>" class="btn btn-primary btn-sm">Add New</a>
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
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Thumbnail</th>
								<th width="180">Title</th>
								<th width="280">Short Content</th>
								<th>Category</th>
								<th>ADD</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
$statement = $this->db->query("SELECT

														t1.*,

														t2.category_id,
														t2.category_name

							                           	FROM tbl_news t1
							                           	JOIN tbl_category t2
							                           	ON t1.category_id = t2.category_id

							                           	ORDER BY t1.news_id DESC
							                           	");						
							foreach ($statement->result() as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>
										<?php
										if($row->photo == '')
										{ ?>
											<img src="<?=base_url("assets/admin/uploads/no-photo1.jpg");?>" alt="" style="width:100px;">
										<?php }
										else
										{ ?>
											<img src="<?=base_url("assets/admin/uploads/").$row->photo?>"alt="<?=$row->news_title;?>" style="width:100px;">
										<?php }
										?>
									</td>
									<td><?php echo $row->news_title; ?></td>
									<td><?php echo $row->news_content_short; ?></td>
									<td>
										<?php echo $row->category_name; ?>
									</td>
									<td>
										<?php if($row->popular=='0'){ ?>
											<a class="btn btn-primary btn-xs" href="<?=base_url('Master/news/addPopular/'.$row->news_id)?>">Add Popular</a>
										<?php } else{ ?>
											<a class="btn btn-danger btn-xs" href="<?=base_url('Master/news/removePopular/'.$row->news_id)?>">Remove Popular</a>
										<?php } ?>

										<?php if($row->trending=='0'){ ?>
											<a class="btn btn-primary btn-xs" href="<?=base_url('Master/news/addTrending/'.$row->news_id)?>">Add Trending</a>
										<?php } else{ ?>
											<a class="btn btn-danger btn-xs" href="<?=base_url('Master/news/removeTrending/'.$row->news_id)?>">Remove Trending</a>
										<?php } ?>
									</td>
									<td>										
										<a href="<?=base_url('Master/news/edit/'.$row->news_id);?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/news/delete/'.$row->news_id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
                <p>Are you sure want to delete this item?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
	function addPopular(id){
		$.ajax({
            url: "<?=base_url('Master/news/ajaxSubCat');?>",
            type: "POST",
            data: "id="+id,
            success: function (response) {
                $("#type1").html(response);
            },
        });
	}

	function addTrending(id){
		alert(id);
	}

	function removePopular(id){
		alert(id);
	}

	function removeTrending(id){
		alert(id);
	}
</script>
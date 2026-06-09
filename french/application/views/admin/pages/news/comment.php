<section class="content-header">
	<div class="content-header-left">
		<h1>View Comments</h1>
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
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Message</th>
								<th>News Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
<?php
							$i=0;
	$statement = $this->db->query("SELECT * FROM tbl_comments WHERE comment_type = 'news' ORDER BY id DESC");						
	foreach ($statement->result() as $row) {
		$i++;
?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->email; ?></td>
									<td><?php echo $row->mobile; ?>
									</td>
									<td><?php echo $row->message; ?>
									</td>
									<td>
<?php 
$sta = $this->db->query("SELECT a.`news_slug`, a.`news_title`, b.`slug` FROM tbl_news a, tbl_sub_category b WHERE a.`sub_category_id` = b.`id` AND a.`news_id` = {$row->reference_id}");						
	foreach ($sta->result() as $row1) {
?>
<a target="_blank" href="<?=base_url($row1->slug.'/'.$row1->news_slug.'.html');?>">
	<?=$row1->news_title;?>
<?php } ?>
</a> 
									</td>
									<td>								<?php if($row->active == '0'){ ?>	
										
										<a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/news/activeComment/'.$row->id);?>" data-toggle="modal" data-target="#confirm-delete">In Active</a>  
										<?php } else { ?>
											<a href="<?=base_url('Master/news/inActiveComment/'.$row->id);?>" class="btn btn-success btn-xs" >Active</a>
										<?php } ?>
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
                <h4 class="modal-title" id="myModalLabel"> Active Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to Active this Comment?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok"> Active</a>
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
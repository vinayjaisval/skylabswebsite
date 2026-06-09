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
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL</th>
                <th>Thumbnail</th>
                <th width="180">Title</th>
                <th width="280">Tags</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
$statement = $this->db->query("SELECT t1.*, t2.* FROM tbl_products t1 JOIN tbl_category_prod t2 ON t1.category_id = t2.category_id WHERE t1.status = 0 ORDER BY t1.prod_id DESC");            
              foreach ($statement->result() as $row) {
                $i++;
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td>
                    <?php 
                                    $q1 = $this->db->query("SELECT image FROM tbl_prod_image WHERE prod_id = {$row->prod_id} AND status = 1 Order by prod_id DESC LIMIT 0, 1");
                                            foreach($q1->result() as $row1){
                                                $prod_image = $row1->image;
                                        ?>
                                        <img src="<?=base_url('assets/admin/uploads/'.$row1->image);?>" alt="<?=$row->prod_title;?>" style="width:100px;" />
                                <?php } ?>
                  </td>
                  <td><?php echo $row->prod_title; ?></td>
                  <td><?php echo $row->tags; ?></td>
                  <td>
                    <?php echo $row->category_name; ?>
                  </td>
                  
                  <td>                    
                    <a href="#" class="btn btn-primary btn-xs" data-href="<?=base_url('Master/trans/active_product/'.$row->prod_id);?>" data-toggle="modal" data-target="#confirm-delete1">Restore</a>
                          <a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/trans/delete_product/'.$row->prod_id);?>" data-toggle="modal" data-target="#confirm-delete">Permanent Delete</a>
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
                Are you sure want to Permanent delete this item?<br>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Restore Confirmation</h4>
            </div>
            <div class="modal-body">
                Are you sure want to restore this item?<br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary btn-ok">Restore</a>
            </div>
        </div>
    </div>
</div>


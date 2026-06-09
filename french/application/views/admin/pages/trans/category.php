
<section class="content-header">
  <div class="content-header-left">
    <h1>View Categories</h1>
  </div>
  <div class="content-header-right">
    <a href="<?=base_url('Master/products/add_category')?>" class="btn btn-primary btn-sm">Add New</a>
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
              <th>Category Name</th>
              <th>Category Slug</th>
              <th>Category Image</th>
              <th>Category Percentage</th>
              <th>Action</th>
          </tr>
      </thead>
            <tbody>
              <?php
              $i=0;
              $statement = $this->db->query("SELECT * FROM tbl_category_prod WHERE status = 0 ORDER BY category_id ASC");           
              foreach ($statement->result() as $row) {
                $i++;
                ?>
          <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row->category_name; ?></td>
                      <td><?php echo $row->category_slug; ?></td>
                        <td><img src="<?=base_url('assets/admin/uploads/'.$row->photo);?>" style="max-width: 100px;"></td>
                        <td><?php echo $row->category_perc; ?></td>
                      <td>
                          <a href="#" class="btn btn-primary btn-xs" data-href="<?=base_url('Master/trans/active_category/'.$row->category_id);?>" data-toggle="modal" data-target="#confirm-delete1">Restore</a>
                          <a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/trans/delete_category/'.$row->category_id);?>" data-toggle="modal" data-target="#confirm-delete">Permanent Delete</a>
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
                Are you sure want to delete this item?<br>
                <b>Be Careful!</b> All Subcategory and Products also deleted in this category
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
                <b>Be Careful! You have to add Subcategory in this Category. Otherwise May be front design distrubed.</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary btn-ok">Restore</a>
            </div>
        </div>
    </div>
</div>



<section class="content-header">
  <div class="content-header-left">
    <h1>View Return</h1>
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
                <th>User Name</th>
                <th>User Email</th>
                <th>User Mobile</th>
                <th>Product Title</th>
                <th>Prod Qty</th>
                <th>Price</th>
                <th>Coupon</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Country</th>
                <th>Payment Desc</th>
                <th>Order Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i=0;
$statement = $this->db->query("SELECT t1.prod_title, t1.prod_id, t1.prod_slug, t2.*, t3.name, t3.email, t3.mobile FROM tbl_products t1, tbl_prod_order t2, tbl_user_end t3  WHERE t1.prod_id = t2.prod_id AND t2.user_id = t3.id AND t2.status > 0 ORDER BY t2.id DESC");            
              foreach ($statement->result() as $row) {
                $i++;
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row->name; ?></td>
                  <td><?php echo $row->email; ?></td>
                  <td><?php echo $row->mobile; ?></td>
                  <td><a href="<?=base_url('product/'.$row->prod_slug.'.html');?>" target="_blank"><?php echo $row->prod_title; ?></td>
                  <td><?php echo $row->prod_price; ?></td>
                  <td><?php echo $row->prod_qty; ?></td>
                  <td></td>
                  <td><?php echo $row->company_name; ?></td>
                  <td><?php echo $row->address; ?></td>
                  <td><?php echo $row->country; ?></td>
                  <td><?php echo $row->payment_desc; ?></td>
                  <td><?php echo $row->order_date; ?></td>
                  <td>                    
                    <select class="form-control" name="status" onchange="statusUpd(<?=$row->id;?>, this.value)" style="width: 150px;">
                      <option <?php if($row->status == '1'){ echo 'selected'; } ?> value="1">Under Processing</option>
                      <option <?php if($row->status == '2'){ echo 'selected'; } ?> value="2">Confirm</option>
                      <option <?php if($row->status == '3'){ echo 'selected'; } ?> value="3">Complete</option>
                    </select>
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
                <h4 class="modal-title" id="myModalLabel">Change Status</h4>
            </div>
            <div class="modal-body">
                Your Status Change Successfully!!!
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  function statusUpd(id, status){
    var id = id;
    var status = status;
    $.ajax({
            url: "<?=base_url('Master/sales/ajaxStatusUpd');?>",
            type: "POST",
            data: "status="+status+"&id="+id,
            success: function (response) {
                $("#confirm-delete").modal("show");
            },
        });
  }
</script>


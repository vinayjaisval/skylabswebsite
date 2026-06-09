<section class="content-header">
  <div class="content-header-left">
    <h1>View Order Details</h1>
  </div>
</section>


<section class="content">

  <div class="row">
    <div class="col-md-12">
<?php
$statement = $this->db->query("SELECT t1.prod_title, t1.prod_id, t1.prod_slug, t2.*, t3.name as u_name, t3.email as u_email, t3.mobile as u_mobile FROM tbl_products t1, tbl_prod_order t2, tbl_user_end t3  WHERE t1.prod_id = t2.prod_id AND t2.user_id = t3.id AND t2.status > 0 AND t2.order_id = '".$order_id."' ORDER BY t2.id DESC");            
    foreach ($statement->result() as $row) {
      $u_name = $row->u_name;
      $u_email = $row->u_email;
      $u_mobile = $row->u_mobile;
      $u_address = $row->address.', '.$row->country;
      $order_date = $row->order_date;
      $payment_method = $row->order_type;
    }

  
?>



      <div class="box box-info">
        <div style="text-align: center;">
  <button onclick="printDiv('printDiv')" style="background-color: #069; color:#fff; border: 1px solid #069; padding: 10px 20px; border-radius: 20px;">Print Invoice</button>
</div>


        <div id="printDiv">





         
          







          <div style="text-align: center;">
            <img src="<?=base_url('assets/admin/uploads/'.$logo);?>">
          </div>
          
          <div style="width: 100%; float: left; padding: 20px;">
            <div style="width: 50%; float: left;">
              <h4>Customer Details</h4>
              <div style="width: 100px; border-bottom: 2px solid #069; margin-bottom: 30px;"></div>
              <b>Name:-</b> <?=$u_name;?> <br>
              <b>Email:-</b> <?=$u_email;?> <br>
              <b>Mobile:-</b> <?=$u_mobile;?> <br>
              <b>Address:-</b> <?=$u_address;?> <br><br><br>
            </div>
            <div style="width: 50%; float: left; text-align: right;">
              <h4>Company Details</h4>
              <div style="width: 100px; border-bottom: 2px solid #069; margin-bottom: 20px; float: right;"></div><br><br>
              <b>Natraj Gharelu Aatachakki</b> <br>
              <b>Address:-</b> <?=$address;?> <br>
              <b>Phone:-</b> <?=$contact_phone;?> <br>
              <b>Email:-</b> <?=$contact_email;?> <br><br><br>
            </div>
          </div>

          <table style="width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;" class="invTable">
              <thead>
                <tr style="border-bottom: 1px solid #ccc; padding: 15px">
                  <th style="padding-bottom: 15px" class="service">IMAGE</th>
                  <th style="padding-bottom: 15px;" class="desc">DESCRIPTION</th>
                  <th style="padding-bottom: 15px">PRICE</th>
                  <th style="padding-bottom: 15px">QTY</th>
                  <th style="padding-bottom: 15px">TOTAL</th>
                </tr>
              </thead>
              <tbody>
                <?php
              $i=0;
$statement = $this->db->query("SELECT t1.prod_title, t1.prod_id, t1.prod_slug, t1.prod_content, t2.* FROM tbl_products t1, tbl_prod_order t2, tbl_user_end t3  WHERE t1.prod_id = t2.prod_id AND t2.user_id = t3.id AND t2.status > 0 AND t2.order_id = '".$order_id."' ORDER BY t2.id DESC");            
              foreach ($statement->result() as $row) {
                $i++;
                ?>
                <tr style="border-bottom: 1px solid #ccc;">
                  <td class="service" style="padding: 5px;">
                    
                    <?php 
                      $q1 = $this->db->query("SELECT image FROM tbl_prod_image WHERE prod_id = {$row->prod_id} AND status = 1 Order by prod_id DESC LIMIT 0, 1");
                      foreach($q1->result() as $row1){
                    ?>
                    <img src="<?=base_url('assets/admin/uploads/'.$row1->image);?>" alt="<?=$row->prod_title;?>" style="width: 100px;" />
                    <?php } ?>


                  </td>
                  <td class="desc" style="padding: 15px;">
                    
                    <?=$row->prod_content;?>
                  </td>
                  <td class="unit" style="padding: 15px;"><i class="fa fa-inr"></i><?=($row->prod_price/$row->prod_qty);?></td>
                  <td class="qty" style="padding: 15px;"><?=$row->prod_qty;?></td>
                  <td class="total" style="padding: 15px;"><i class="fa fa-inr"></i><?=$row->prod_price;?></td>
                </tr>
              <?php } ?>
                
                <tr>
                  <td colspan="4" style="text-align: right; padding: 15px;">SUBTOTAL</td>
                  <td class="total" style="padding: 15px;"><i class="fa fa-inr"></i><?=$row->sub_total;?></td>
                </tr>
                
                <tr>
                  <td colspan="4" style="text-align: right; padding: 15px;">DISCOUNT</td>
                  <td class="total" style="padding: 15px;"><i class="fa fa-inr"></i><?=$row->discount;?></td>
                </tr>
                <tr>
                  <td colspan="4" class="grand total" style="text-align: right; padding: 15px;">GRAND TOTAL</td>
                  <td class="grand total" style="padding: 15px;"><i class="fa fa-inr"></i><?=$row->total_price;?></td>
                </tr>
              </tbody>
            </table>

            <main>
            
            <div id="notices" style="padding-bottom: 50px">
            
              <div class="notice" style="padding: 15px;"><b>Invoice No-</b> <?=$order_id;?> <br>
                <b>Order Date-</b> <?=$order_date;?><br>
                <b>Date-</b> <?=date('M d,Y');?>
              </div>
            </div>
          </main>
          <footer style="color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;">
            Invoice was created on a computer and is valid without the signature and seal.
          </footer>


        </div>


        
      </div>
    </div>
  </div>


</section>




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



<script type="text/javascript">
  function printDiv(divName) {
       var printContents = document.getElementById(divName).innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print();

       document.body.innerHTML = originalContents;
  }
</script>

<style type="text/css">
  

.invTable tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

.invTable th,
.invTable td {
  text-align: center;
}

.invTable th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

.invTable .service,
.invTable .desc {
  text-align: left;
}

.invTable td {
  padding: 20px;
  text-align: right;
}

.invTable td.service,
.invTable td.desc {
  vertical-align: top;
}

.invTable td.unit,
.invTable td.qty,
.invTable td.total {
  font-size: 1.2em;
}

.invTable td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}


</style>


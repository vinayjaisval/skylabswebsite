<?php

    if(!empty($id)){
        $edit = $this->db->query("SELECT * FROM tbl_coupon WHERE id=".$id);
        foreach ($edit->result() as $row) {
            $name = $row->name;
            $dis_type = $row->dis_type;
            $amount = $row->amount;
            $s_date = $row->s_date;
            $e_date = $row->e_date;
        }
    } else {
        $name = "";
        $dis_type = "";
        $amount = "";
        $s_date = "";
        $e_date = "";
    }
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Coupon</h1>
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
                    <div class="box-body">


<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <form class="form-horizontal" action="<?=base_url('Master/sales/addCoupon');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id;?>">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Name <span>*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required name="name" placeholder="Example: Name" value="<?=$name;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Discount Type <span>*</span></label>
                <div class="col-sm-8">
                    <select class="form-control" name="dis_type">
                        <option value="">Select Discount Type</option>
                        <option <?php if($dis_type == '1'){ echo "selected";} ?> value="1">Flat</option>
                        <option <?php if($dis_type == '2'){ echo "selected";} ?> value="2">Percentage</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Discount <span>*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required name="amount" placeholder="Example: Amount/Percentage" value="<?=$amount;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Start Date <span>*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required id="datepicker" name="s_date" placeholder="Example: Start Date" value="<?=$s_date;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> End Date <span>*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" required id="datepicker1" name="e_date" placeholder="Example: End Date" value="<?=$e_date;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success pull-left">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>



                        
                        
                        
                       
                        
                    </div>
                </div>

            


        </div>
    </div>




  <div class="row">
    <div class="col-md-12">


      <div class="box box-info">
        
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th> Name</th>
                    <th> Discount Type</th>
                    <th> Discount</th>
                    <th> Start Date</th>
                    <th> End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                $statement = $this->db->query("SELECT * FROM tbl_coupon WHERE 1 ORDER BY id DESC");                     
                foreach ($statement->result() as $row) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php if($row->dis_type == '1'){ echo "Flat"; } else { echo "Percentage";} ?></td>
                        <td><?php if($row->dis_type == '1'){ echo "<i class='fa fa-inr'></i>"; } ?> <?php echo $row->amount; ?><?php if($row->dis_type == '1'){ } else { echo "%";} ?></td>
                        <td><?php echo $row->s_date; ?></td>
                        <td><?php echo $row->e_date; ?></td>
                        <td>
                            <a href="<?=base_url('Master/sales/coupon/'.$row->id);?>" class="btn btn-primary btn-xs">Edit</a>
                            <a target="_blank" href="<?=base_url('Master/sales/print_coupon/'.$row->id);?>" class="btn btn-success btn-xs">Print Coupon</a>
                            <a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/sales/delete_coupon/'.$row->id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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



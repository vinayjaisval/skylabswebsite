<?php

    if(!empty($id)){
        $edit = $this->db->query("SELECT * FROM tbl_prod_size WHERE id=".$id);
        foreach ($edit->result() as $row) {
            $name = $row->name;
            $description = $row->description;
        }
    } else {
        $name = "";
        $description="";
    }
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Product Size</h1>
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
        <form class="form-horizontal" action="<?=base_url('Master/attribute/addValues');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$id;?>">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Name <span>*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="name" placeholder="Example: Name" value="<?=$name;?>">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label"> Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" rows="3" placeholder="Description" name="description"><?=$description;?></textarea>
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
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                $statement = $this->db->query("SELECT * FROM tbl_prod_size WHERE 1 ORDER BY id DESC");                     
                foreach ($statement->result() as $row) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row->name; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td>
                            <a href="<?=base_url('Master/attribute/size/'.$row->id);?>" class="btn btn-primary btn-xs">Edit</a>
                            <a href="#" class="btn btn-danger btn-xs" data-href="<?=base_url('Master/attribute/delete/'.$row->id);?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
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



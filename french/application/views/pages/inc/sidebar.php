<div class="collection-filter-block">
    <!-- brand filter start -->
    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
    <div class="collection-collapse-block open">
        <h3 class="collapse-block-title">CATEGORIES</h3>
        <div class="collection-collapse-block-content">
            <div class="collection-brand-filter">
                <?php 
                    foreach($category as $rowCat){
                ?>
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="zara">
                    <label class="form-check-label" for="zara"><a href="<?=base_url('products.html?cat='.$rowCat->category_id);?>"><?=$rowCat->category_name;?></a></label>
                </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
    <!-- color filter start here -->
    <div class="collection-collapse-block open">
        <h3 class="collapse-block-title">colors</h3>
        <div class="collection-collapse-block-content">
            <div class="color-selector">
                <ul>
                    <?php
                        $sqlColorSrch = $this->db->query("SELECT `id`, `name` FROM tbl_prod_color WHERE 1");
                        foreach($sqlColorSrch->result() as $rowClr){
                    ?>
                    <a href="<?=base_url('products.html?color='.$rowClr->id);?>"><li class="" style="background-color: #<?=$rowClr->name;?>"></li></a>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- price filter start here -->
    <div class="collection-collapse-block border-0 open">
        <h3 class="collapse-block-title">price</h3>
        <div class="collection-collapse-block-content">
            <div class="collection-brand-filter">
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="hundred">
                    <label class="form-check-label" for="hundred"><a href="<?=base_url('products.html?price=1');?>"><span class="fa fa-inr"></span>10 - <span class="fa fa-inr"></span>100</a></label>
                </div>
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="twohundred">
                    <label class="form-check-label" for="twohundred"><a href="<?=base_url('products.html?price=2');?>"><span class="fa fa-inr"></span>100 - <span class="fa fa-inr"></span>200</a></label>
                </div>
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="threehundred">
                    <label class="form-check-label" for="threehundred"><a href="<?=base_url('products.html?price=3');?>"><span class="fa fa-inr"></span>200 - <span class="fa fa-inr"></span>300</a></label>
                </div>
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="fourhundred">
                    <label class="form-check-label" for="fourhundred"><a href="<?=base_url('products.html?price=1');?>"><span class="fa fa-inr"></span>300 - <span class="fa fa-inr"></span>400</a></label>
                </div>
                <div class="form-check collection-filter-checkbox">
                    <input type="checkbox" class="form-check-input" id="fourhundredabove">
                    <label class="form-check-label" for="fourhundredabove"><a href="<?=base_url('products.html?price=1');?>"><span class="fa fa-inr"></span>400 above</a></label>
                </div>
            </div>
        </div>
    </div>
</div>
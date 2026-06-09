<form method="post" action="<?=base_url('Master/users/updatePermission');?>" class="label-normal">

<section class="content-header">
	<div class="content-header-left">
		<h1>Set Permissions</h1>
	</div>
	<div class="content-header-right">
		<input type="submit" class="btn btn-primary" value="Update Permission">
		<a href="<?=base_url('Master/users/view');?>" class="btn btn-primary btn-sm">All User</a>
	</div>
</section>


<?php
$statement = $this->db->query("SELECT permission_menu, permission_sub_menu FROM tbl_user WHERE id = ".$id);
	foreach ($statement->result() as $row) {
		$menu1 = $row->permission_menu;
		$submenu1 = $row->permission_sub_menu;
	}

	$menu = explode(",",$menu1);
	$submenu = explode(",",$submenu1);
?>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php if ($this->session->flashdata('success')) { ?>
                <div class="callout callout-success"><b>Success:-</b> <?=$this->session->flashdata('success');?></div>
            <?php } ?>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="callout callout-danger"><b>Error:-</b> <?=$this->session->flashdata('error');?></div>
            <?php } ?>
			<div class="box box-info">
				
					<input type="hidden" name="id" value="<?=$id;?>">

				<div class="box-body table-responsive">
					<table id="example3" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>SL</th>
								<th>Menus</th>
								<th>Sub Menues</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>1</td>
								<td><label><input type="checkbox" name="menu[]" value="1" <?php if( in_array('1', $menu)){	echo "checked";	} ?> > Setting</label></td>
								<td>
									<label><input type="checkbox" name="submenu[]" value="s_1" <?php if( in_array('s_1', $submenu)){	echo "checked";	} ?> > Logo</label>
									
									<label><input type="checkbox" name="submenu[]" value="s_2" <?php if( in_array('s_2', $submenu)){	echo "checked";	} ?> > Favicon</label>

									<label><input type="checkbox" name="submenu[]" value="s_3" <?php if( in_array('s_3', $submenu)){	echo "checked";	} ?> > General Content</label>

									<label><input type="checkbox" name="submenu[]" value="s_4" <?php if( in_array('s_4', $submenu)){	echo "checked";	} ?> > Email Setting</label>

									
									<label><input type="checkbox" name="submenu[]" value="s_5" <?php if( in_array('s_5', $submenu)){	echo "checked";	} ?> > Home Page SEO</label>

									<label><input type="checkbox" name="submenu[]" value="s_6" <?php if( in_array('s_6', $submenu)){	echo "checked";	} ?> > Banner</label>

									<label><input type="checkbox" name="submenu[]" value="s_7" <?php if( in_array('s_7', $submenu)){	echo "checked";	} ?> > Home Page</label>

								</td>
								
							</tr>


							<tr>
								<td>2</td>
								<td><label><input type="checkbox" name="menu[]" value="2" <?php if( in_array('2', $menu)){	echo "checked";	} ?> > Sales</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="1" <?php if( in_array('1', $submenu)){	echo "checked";	} ?> > Orders</label>

									<label><input type="checkbox" name="submenu[]" value="2" <?php if( in_array('2', $submenu)){	echo "checked";	} ?> > Returns</label>

									<label><input type="checkbox" name="submenu[]" value="3" <?php if( in_array('3', $submenu)){	echo "checked";	} ?> > Gift Voucher</label>
								</td>
							</tr>

							<tr>
								<td>3</td>
								<td><label><input type="checkbox" name="menu[]" value="3" <?php if( in_array('3', $menu)){	echo "checked";	} ?> > Pages</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>4</td>
								<td><label><input type="checkbox" name="menu[]" value="4" <?php if( in_array('4', $menu)){	echo "checked";	} ?> > Menues</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>4</td>
								<td><label><input type="checkbox" name="menu[]" value="4_1" <?php if( in_array('4_1', $menu)){	echo "checked";	} ?> > Footer Menu 1</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>4</td>
								<td><label><input type="checkbox" name="menu[]" value="4_2" <?php if( in_array('4_2', $menu)){	echo "checked";	} ?> > Footer Menu 2</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>4</td>
								<td><label><input type="checkbox" name="menu[]" value="4_3" <?php if( in_array('4_3', $menu)){	echo "checked";	} ?> > Footer Menu 3</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>5</td>
								<td><label><input type="checkbox" name="menu[]" value="5" <?php if( in_array('5', $menu)){	echo "checked";	} ?> > Products Attributes</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="4" <?php if( in_array('4', $submenu)){	echo "checked";	} ?> > Size</label>

									<label><input type="checkbox" name="submenu[]" value="5" <?php if( in_array('5', $submenu)){	echo "checked";	} ?> > Colors</label>

								</td>
							</tr>

							<tr>
								<td>6</td>
								<td><label><input type="checkbox" name="menu[]" value="6" <?php if( in_array('6', $menu)){	echo "checked";	} ?> > Products</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="6" <?php if( in_array('6', $submenu)){	echo "checked";	} ?> > Category</label>
									<label><input type="checkbox" name="submenu[]" value="7" <?php if( in_array('7', $submenu)){	echo "checked";	} ?> > Sub Category</label>
									<label><input type="checkbox" name="submenu[]" value="7_1" <?php if( in_array('7_1', $submenu)){	echo "checked";	} ?> > Sub Sub Category</label>
									<label><input type="checkbox" name="submenu[]" value="8" <?php if( in_array('8', $submenu)){	echo "checked";	} ?> > Products</label>
									
								</td>
							</tr>

							<tr>
								<td>7</td>
								<td><label><input type="checkbox" name="menu[]" value="7" <?php if( in_array('7', $menu)){	echo "checked";	} ?> >Trans/Deleted Products</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="9" <?php if( in_array('9', $submenu)){	echo "checked";	} ?> > Category</label>
									<label><input type="checkbox" name="submenu[]" value="10" <?php if( in_array('10', $submenu)){	echo "checked";	} ?> > Sub Category</label>
									<label><input type="checkbox" name="submenu[]" value="10_1" <?php if( in_array('10_1', $submenu)){	echo "checked";	} ?> > Sub Sub Category</label>
									<label><input type="checkbox" name="submenu[]" value="11" <?php if( in_array('11', $submenu)){	echo "checked";	} ?> > Products</label>
									
								</td>
							</tr>

							<tr>
								<td>8</td>
								<td><label><input type="checkbox" name="menu[]" value="8" <?php if( in_array('8', $menu)){	echo "checked";	} ?> > Blogs</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="12" <?php if( in_array('12', $submenu)){	echo "checked";	} ?> > Category</label>
									<label><input type="checkbox" name="submenu[]" value="13" <?php if( in_array('13', $submenu)){	echo "checked";	} ?> > Sub Category</label>
									<label><input type="checkbox" name="submenu[]" value="14" <?php if( in_array('14', $submenu)){	echo "checked";	} ?> > News</label>
									<label><input type="checkbox" name="submenu[]" value="15" <?php if( in_array('15', $submenu)){	echo "checked";	} ?> > Live Blog</label>
									<label><input type="checkbox" name="submenu[]" value="16" <?php if( in_array('16', $submenu)){	echo "checked";	} ?> > Popular Blogs</label>
									<label><input type="checkbox" name="submenu[]" value="17" <?php if( in_array('17', $submenu)){	echo "checked";	} ?> > Trending Blogs</label>
									<label><input type="checkbox" name="submenu[]" value="18" <?php if( in_array('18', $submenu)){	echo "checked";	} ?> > Comments</label>
								</td>
							</tr>

							<tr>
								<td>9</td>
								<td><label><input type="checkbox" name="menu[]" value="9" <?php if( in_array('9', $menu)){	echo "checked";	} ?> > Slider</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>10</td>
								<td><label><input type="checkbox" name="menu[]" value="10" <?php if( in_array('10', $menu)){	echo "checked";	} ?> > Testimonials</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>11</td>
								<td><label><input type="checkbox" name="menu[]" value="11" <?php if( in_array('11', $menu)){	echo "checked";	} ?> > FAQ</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="19" <?php if( in_array('19', $submenu)){	echo "checked";	} ?> > Faq Category</label>
									<label><input type="checkbox" name="submenu[]" value="20" <?php if( in_array('20', $submenu)){	echo "checked";	} ?> > FAQ</label>
								</td>
							</tr>

							<tr>
								<td>12</td>
								<td><label><input type="checkbox" name="menu[]" value="12" <?php if( in_array('12', $menu)){	echo "checked";	} ?> > Photo and Videos</label></td>

								<td>
									<label><input type="checkbox" name="submenu[]" value="21" <?php if( in_array('21', $submenu)){	echo "checked";	} ?> > Photo Category</label>
									<label><input type="checkbox" name="submenu[]" value="22" <?php if( in_array('22', $submenu)){	echo "checked";	} ?> > Photo</label>

									<label><input type="checkbox" name="submenu[]" value="23" <?php if( in_array('23', $submenu)){	echo "checked";	} ?> > Video Category</label>
									<label><input type="checkbox" name="submenu[]" value="24" <?php if( in_array('24', $submenu)){	echo "checked";	} ?> > Video</label>
								</td>
							</tr>

							<tr>
								<td>13</td>
								<td><label><input type="checkbox" name="menu[]" value="13" <?php if( in_array('13', $menu)){	echo "checked";	} ?> > File Upload(Media)</label></td>

								<td>-</td>
							</tr>

							<tr>
								<td>14</td>
								<td><label><input type="checkbox" name="menu[]" value="14" <?php if( in_array('14', $menu)){	echo "checked";	} ?> > Subscribe</label></td>
								<td>
									<label><input type="checkbox" name="submenu[]" value="25" <?php if( in_array('25', $submenu)){	echo "checked";	} ?> > All Subscriber</label>

									<label><input type="checkbox" name="submenu[]" value="26" <?php if( in_array('26', $submenu)){	echo "checked";	} ?> > Mail to Subscribers</label>

								</td>
							</tr>

							<tr>
								<td>15</td>
								<td><label><input type="checkbox" name="menu[]" value="15" <?php if( in_array('15', $menu)){	echo "checked";	} ?> > Advertisement</label></td>
								<td>-</td>
							</tr>

							<tr>
								<td>16</td>
								<td><label><input type="checkbox" name="menu[]" value="16" <?php if( in_array('16', $menu)){	echo "checked";	} ?> > Users</label></td>
								<td>-</td>
							</tr>

							
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>


</section>

</form>





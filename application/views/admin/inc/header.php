<?php
$statement = $this->db->query("SELECT permission_menu, permission_sub_menu FROM tbl_user WHERE id = ".$this->session->userdata('userid'));
	foreach ($statement->result() as $row) {
		$menu1 = $row->permission_menu;
		$submenu1 = $row->permission_sub_menu;
	}

	$menu = explode(",",$menu1);
	$submenu = explode(",",$submenu1);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title;?> - 
		<?php 
			$url = base_url();
			$parts = parse_url($url);
			echo $parts['host'];
		?>
	</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/datepicker3.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/all.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/select2.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/_all-skins.min.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/on-off-switch.css">
	<link rel="stylesheet" href="<?=base_url('assets/admin/');?>css/summernote.css">
	

	<!--- For Tags=======--->
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!--- For Tags=======--->

	<link rel="stylesheet" href="<?=base_url('assets/admin/style.css');?>">

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="<?=base_url('Master/Home');?>" class="logo">
				<span class="logo-lg text-uppercase">
					<?php 
						$url = base_url();
						$parts = parse_url($url);
						echo $parts['host'];
					?>
				</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=base_url('assets/admin/uploads/')?><?php echo $this->session->userdata('userimage'); ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo $this->session->userdata('name'); ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="<?=base_url('Master/home/edit_profile');?>" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="<?=base_url('Master/Administrator/logout');?>" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<aside class="main-sidebar">
    		<section class="sidebar">
      			<ul class="sidebar-menu">
			        <li class="treeview <?php if($cur_page == 'home') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/home');?>">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

			        

					
			        <?php if( in_array('1', $menu)){ ?>
			        <li class="treeview <?php if( ($cur_page == 'setting') ) {echo 'active';} ?>">
			          <a href="<?=base_url('Master/setting/setting');?>">
			            <i class="fa fa-hand-o-right"></i> <span>Settings</span>
			          </a>
			        </li>
			    	<?php } ?>




			    	<?php if( in_array('2', $menu)){ ?>
			    	<li class="treeview <?php if( $cur_page == 'sales' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Sales</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('1', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'order' ) {echo 'active';} ?>"><a href="<?=base_url('Master/sales/orders');?>"><i class="fa fa-circle-o"></i> Orders</a></li>
							<?php } ?>
							<?php if( in_array('2', $submenu)){ ?>
							<!--<li class="<?php if( $cur_sub_page == 'return' ) {echo 'active';} ?>"><a href="<?=base_url('Master/sales/returns');?>"><i class="fa fa-circle-o"></i> Return</a></li>-->
							<?php } ?>
							<?php if( in_array('3', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'coupon' ) {echo 'active';} ?>"><a href="<?=base_url('Master/sales/coupon');?>"><i class="fa fa-circle-o"></i> Gift Voucher</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>


			    	<?php if( in_array('3', $menu)){ ?>
			        <li class="treeview <?php if($cur_page == 'page') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/page/page');?>">
			            <i class="fa fa-hand-o-right"></i> <span>Page</span>
			          </a>
			        </li>

					<li class="treeview <?php if($cur_page == 'serv_page') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/page/service_page');?>">
			            <i class="fa fa-hand-o-right"></i> <span>Services Page</span>
			          </a>
			        </li>
			        <?php } ?>

			        <?php if( in_array('4', $menu)){ ?>
			        <li class="treeview <?php if($cur_page == 'menu') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/menu/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Menu</span>
			          </a>
			        </li>
			        <?php } ?>

			        <?php if( in_array('4_1', $menu)){ ?>
			        <li class="treeview <?php if($cur_page == 'menu_one') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/menu_one/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Footer Menu First</span>
			          </a>
			        </li>
			        <?php } ?>

			        <?php if( in_array('4_2', $menu)){ ?>
			        <li class="treeview <?php if($cur_page == 'menu_two') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/menu_two/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Footer Menu Second</span>
			          </a>
			        </li>
			        <?php } ?>

			        <?php if( in_array('4_3', $menu)){ ?>
			        <li class="treeview <?php if($cur_page == 'menu_three') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/menu_three/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Footer Menu Third</span>
			          </a>
			        </li>
			        <?php } ?>

			        <?php if( in_array('5', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'attribute' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Product Attributes</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('4', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'size' ) {echo 'active';} ?>"><a href="<?=base_url('Master/attribute/size');?>"><i class="fa fa-circle-o"></i> Size</a></li>
							<?php } ?>
							<?php if( in_array('5', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'color' ) {echo 'active';} ?>"><a href="<?=base_url('Master/attribute/color');?>"><i class="fa fa-circle-o"></i> Color</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>


			        <?php if( in_array('6', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'product' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Products</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('6', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'pro_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/products/category');?>"><i class="fa fa-circle-o"></i> Category</a></li>
							<?php } ?>
							<?php if( in_array('7', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'pro_sub_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/products/sub_category');?>"><i class="fa fa-circle-o"></i> Sub Category</a></li>
							<?php } ?>
							<?php if( in_array('7_1', $submenu)){ ?>
							<!--<li class="<?php if( $cur_sub_page == 'pro_sub_sub_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/products/view_sub');?>"><i class="fa fa-circle-o"></i> Sub Sub Category</a></li>-->
							<?php } ?>
							<?php if( in_array('8', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'product' ) {echo 'active';} ?>"><a href="<?=base_url('Master/products/view');?>"><i class="fa fa-circle-o"></i> Product</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>

					<?php if( in_array('7', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'trans' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Trans/Deleted Products</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('9', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'category' ) {echo 'active';} ?>"><a href="<?=base_url('Master/trans/category');?>"><i class="fa fa-circle-o"></i> Category</a></li>
							<?php } ?>
							<?php if( in_array('10', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'sub_category' ) {echo 'active';} ?>"><a href="<?=base_url('Master/trans/sub_category');?>"><i class="fa fa-circle-o"></i> Sub Category</a></li>
							<?php } ?>
							<?php if( in_array('10_1', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'sub_sub_category' ) {echo 'active';} ?>"><a href="<?=base_url('Master/trans/sub_sub_category');?>"><i class="fa fa-circle-o"></i> Sub Sub Category</a></li>
							<?php } ?>
							<?php if( in_array('11', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'product' ) {echo 'active';} ?>"><a href="<?=base_url('Master/trans/products');?>"><i class="fa fa-circle-o"></i> Product</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>
			        

			        <?php if( in_array('8', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'news' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Blogs</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('12', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'news_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/category');?>"><i class="fa fa-circle-o"></i> Category</a></li>
							<?php } ?>
							<?php if( in_array('13', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'news_sub_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/sub_category');?>"><i class="fa fa-circle-o"></i> Sub Category</a></li>
							<?php } ?>
							<?php if( in_array('14', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'news' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/view');?>"><i class="fa fa-circle-o"></i> Blogs</a></li>
							<?php } ?>
							<?php if( in_array('15', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'popular' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/popular_news');?>"><i class="fa fa-circle-o"></i> Popular Blogs</a></li>
							<?php } ?>
							<?php if( in_array('16', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'trending' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/trending_news');?>"><i class="fa fa-circle-o"></i> Trending Blogs</a></li>
							<?php } ?>
							<?php if( in_array('17', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'live_news' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/live_news');?>"><i class="fa fa-circle-o"></i> Live Blog</a></li>
							<?php } ?>
							<?php if( in_array('18', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'comment' ) {echo 'active';} ?>"><a href="<?=base_url('Master/news/comment');?>"><i class="fa fa-circle-o"></i> Comment</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>

					<?php if( in_array('9', $menu)){ ?>
			        <li class="treeview <?php if( $cur_page == 'slider' ) {echo 'active';} ?>">
			          <a href="<?=base_url('Master/slider/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Slider</span>
			          </a>
			        </li>
			        <?php } ?>

					<?php if( in_array('10', $menu)){ ?>
			        <li class="treeview <?php if( $cur_page == 'testimonial' ) {echo 'active';} ?>">
			          <a href="<?=base_url('Master/testimonial/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Testimonial</span>
			          </a>
			        </li>
			        <?php } ?>
					
			        <?php if( in_array('11', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'faq' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>FAQ</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('19', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/faq/category');?>"><i class="fa fa-circle-o"></i> FAQ Category</a></li>
							<?php } ?>
							<?php if( in_array('20', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'faq' ) {echo 'active';} ?>"><a href="<?=base_url('Master/faq/view');?>"><i class="fa fa-circle-o"></i> FAQ</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>

					<?php if( in_array('12', $menu)){ ?>
			        <li class="treeview <?php if( $cur_page == 'gallery' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Photo and Video</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('21', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'photo_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/gallery/photo_category');?>"><i class="fa fa-circle-o"></i> Photo Category</a></li>
							<?php } ?>
							<?php if( in_array('22', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'photo' ) {echo 'active';} ?>"><a href="<?=base_url('Master/gallery/photo');?>"><i class="fa fa-circle-o"></i> Photo Gallery</a></li>
							<?php } ?>
							<?php if( in_array('23', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'video_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/gallery/video_category');?>"><i class="fa fa-circle-o"></i> Video Category</a></li>
							<?php } ?>
							<?php if( in_array('24', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'video' ) {echo 'active';} ?>"><a href="<?=base_url('Master/gallery/video');?>"><i class="fa fa-circle-o"></i> Video</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>

					
					<?php if( in_array('13', $menu)){ ?>
					<li class="treeview <?php if( $cur_page == 'media' ) {echo 'active';} ?>">
			          <a href="<?=base_url('Master/media/view');?>">
			            <i class="fa fa-hand-o-right"></i> <span>File Upload (Media)</span>
			          </a>
			        </li>
			        <?php } ?>

					<li class="treeview <?php if( $cur_page == 'team' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Team Member</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="<?php if( $cur_sub_page == 'team_cat' ) {echo 'active';} ?>"><a href="<?=base_url('Master/team/designation');?>"><i class="fa fa-circle-o"></i> Designation</a></li>
							<li class="<?php if( $cur_sub_page == 'tm' ) {echo 'active';} ?>"><a href="<?=base_url('Master/team/view');?>"><i class="fa fa-circle-o"></i> Team Member</a></li>
						</ul>
					</li>


			        <?php if( in_array('14', $menu)){ ?>
			        <li class="treeview <?php if( $cur_page == 'subscriber' ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Subscriber</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php if( in_array('25', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'all' ) {echo 'active';} ?>"><a href="<?=base_url('Master/subscriber/all');?>"><i class="fa fa-circle-o"></i> All Subscribers</a></li>
							<?php } ?>
							<?php if( in_array('26', $submenu)){ ?>
							<li class="<?php if( $cur_sub_page == 'email' ) {echo 'active';} ?>"><a href="<?=base_url('Master/subscriber/send_email');?>"><i class="fa fa-circle-o"></i> Email to Subscribers</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php } ?>

			    	<?php if( in_array('15', $menu)){ ?>
					<li class="treeview <?php if($cur_page == 'add') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/add/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Services</span>
			          </a>
			        </li>
			    	<?php } ?>

					<li class="treeview <?php if($cur_page == 'language') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/language/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Language</span>
			          </a>
			        </li>

					<li class="treeview <?php if($cur_page == 'partner') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/partner/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Partner</span>
			          </a>
			        </li>

			    	<?php if( in_array('16', $menu)){ ?>
					<li class="treeview <?php if($cur_page == 'user') {echo 'active';} ?>">
			          <a href="<?=base_url('Master/users/view')?>">
			            <i class="fa fa-hand-o-right"></i> <span>Users</span>
			          </a>
			        </li>
			    	<?php } ?>
        	
      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gifts</title>
    
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@562&display=swap" rel="stylesheet">


</head>
<body>
<div id="printDiv">
	<img src="<?=base_url('assets/img/bodyimg.jpg');?>" style="width: 100%;">
	<div class="section-main" style="padding: 10px 0px;
position: absolute;
top: 0;
width: 100%;">
		<div class="container">
			<!--  == == = = = =header == = = = -->
			<div class="top-header">
				<a href="#"><img src="<?=base_url('assets/admin/uploads/'.$logo);?>" style="height: 86px;width: 200px;"></a>	
			</div>
			<!--  == == = = = = end header == = = = -->

			<!-- = = = = == ==  section body  == = =  = = -->
			<div class="section-body" style="padding: 30px 150px 0px 150px;">
				<h1 style="font-family: 'Dancing Script', cursive;font-size: 4rem;"><?=$name;?></h1>
				<div class="section-details">
					<p style="font-size: 21px;font-weight: 600;"><span style="margin-right: 10px;">Amount</span> <?php if($dis_type == '1'){ echo "₹"; } ?><?=$discount;?><?php if($dis_type == '1'){ } else { echo "%";} ?></p>
					<p style="font-size: 21px;font-weight: 600;"><span style="margin-right: 10px;">Start Date</span> <?=$s_date;?></p>
					<p style="font-size: 21px;font-weight: 600;"><span style="margin-right: 10px;">End Date</span> <?=$e_date;?></p>
				</div>
			</div>
			<!-- = = = = == == end section body  == = =  = = -->

		</div>
	</div>
</div>
<br>
<div style="text-align: center;">
	<button onclick="printDiv('printDiv')" style="background-color: #069; color:#fff; border: 1px solid #069; padding: 10px 20px; border-radius: 20px;">Print Coupon</button>
</div>

<script type="text/javascript">
	function printDiv(divName) {
	     var printContents = document.getElementById(divName).innerHTML;
	     var originalContents = document.body.innerHTML;

	     document.body.innerHTML = printContents;

	     window.print();

	     document.body.innerHTML = originalContents;
	}
</script>

</body>
</html>
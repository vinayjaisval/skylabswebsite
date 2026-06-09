



/*========== Compare Products Js=============*/

//Popup compare

function compare_product(id, prod_title, prod_slug, prod_price, prod_content_short, prod_image, url1){
	var id = id;
	var prod_title = prod_title;
	var prod_slug = prod_slug;
	var prod_price = prod_price;
	var prod_content_short = prod_content_short;
	var prod_image = prod_image;
	var url1 = url1;


	
	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "id="+id+"&prod_title="+prod_title+"&prod_slug="+prod_slug+"&prod_price="+prod_price+"&prod_content_short="+prod_content_short+"&prod_image="+prod_image,
	    success: function (response) {
		   	console.log(response);
		   	$('.alertMessages1').fadeIn();
		   	$('.alertMessages1').html('<div class="alertMessages"><b>Success:-</b> Product Add to Compare list!!</div>');
		   	//$(".alertMessages1").delay(4000).fadeOut();
		   	setTimeout(function(){location.reload()}, 3000);
	    },
	});
}





/*======== Add Cart Js===============*/



function add_cart_product(id){
	var id = id;
	
	$('.cart_size_'+id).css('display', 'block');
	$('.cart_el_'+id).css('display', 'none');
	$('.cart_size_f_'+id).css('display', 'none');

}

function add_cart_product_cup_type(id, size){
	var id = id;
	var size = size;
	
	$('.cart_size_f_'+id+'_'+size).css('display', 'block');
	$('.cart_size_'+id).css('display', 'none');
	$('.cart_el_'+id).css('display', 'none');

}

function add_cart_product_final(id, prod_title, prod_slug, prod_price, prod_content_short, prod_image, url1,size,colors,cup_type){
	var id = id;
	var prod_title = prod_title;
	var prod_slug = prod_slug;
	var prod_price = prod_price;
	var prod_content_short = prod_content_short;
	var prod_image = prod_image;
	var size = size;
	var colors = colors;
	var url1 = url1;
	var cup_type = 1;
	
	
	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "id="+id+"&prod_title="+prod_title+"&prod_slug="+prod_slug+"&prod_price="+prod_price+"&prod_content_short="+prod_content_short+"&prod_image="+prod_image+"&size="+size+"&colors="+colors+"&cup_type="+cup_type,
	    success: function (response) {
		   	console.log(response);
		   	$('.alertMessages1').fadeIn();
		   	$('.alertMessages1').html('<div class="alertMessages"><b>Success:-</b> Product Add to Cart list!!</div>');
		   	setTimeout(function(){location.reload()}, 3000);
	    },
	});
}

function cartQtyChange(id, count, change_type, url1){
	var id = id;
	var count = count;
	var change_type = change_type;
	var url1 = url1;
		
	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "id="+id+"&count="+count+"&change_type="+change_type,
	    success: function (response) {
		   	console.log(response);
		   	location.reload();
	    },
	});
}

//=== Wishlist---------

//Popup Wishlist



function add_wishlist(id, prod_title, prod_slug, prod_price, prod_content_short, prod_image, url1,size,colors){
	var id = id;
	var prod_title = prod_title;
	var prod_slug = prod_slug;
	var prod_price = prod_price;
	var prod_content_short = prod_content_short;
	var prod_image = prod_image;
	var size = size;
	var colors = colors;
	var url1 = url1;
	
	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "id="+id+"&prod_title="+prod_title+"&prod_slug="+prod_slug+"&prod_price="+prod_price+"&prod_content_short="+prod_content_short+"&prod_image="+prod_image+"&size="+size+"&colors="+colors,
	    success: function (response) {
		   	console.log(response);
		   	$('.alertMessages1').fadeIn();
		   	$('.alertMessages1').html('<div class="alertMessages"><b>Success:-</b> Product Add to Wishlist!!</div>');
		   	$(".alertMessages1").delay(4000).fadeOut();
		   	//location.reload().delay(4000);
		   	setTimeout(function(){location.reload()}, 3000);

	    },
	});
}


function wishlistQtyChange(id, count, change_type, url1){
	var id = id;
	var count = count;
	var change_type = change_type;
	var url1 = url1;
		
	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "id="+id+"&count="+count+"&change_type="+change_type,
	    success: function (response) {
		   	console.log(response);
		   	location.reload();
	    },
	});
}



// Quick View
function quick_view(prod_slug, url){
	var prod_slug = prod_slug;
	var url1 = url;

	$.ajax({
	    url: url1,
	    type: "POST",
	    data: "prod_slug="+prod_slug,
	    dataType: "html",
	    success: function (response) {
			$('.prod_det_ajax').html(response);
		   	console.log(response);
	    },
	});
}




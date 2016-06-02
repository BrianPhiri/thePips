$(document).ready(function(){
	var id = $('#id').val();
	var price = $('#price').html();
	console.log(price);
	var sub_total;
	$('#cart_quantity_up').click(function(){
		var qty = $('#quantity').val();
		qty++;
		$.ajax({
			url : "{{ URL::asset('/carts/quantity') }}/"+id,
			type : "post",
			data : { '_token' : $('input[name=_token]').val(),'quantity' : qty },
			success : function (){
				sub_total = price * qty;
				$('#subtotal').html(sub_total);
			}
		});
		$('#quantity').val(qty);
	});
	$('#cart_quantity_down').click(function(){
		var qty = $('#quantity').val();
		qty--;
		$.ajax({
			url : "{{ URL::asset('/carts/quantity') }}/"+id,
			type : "post",
			data : { '_token' : $('input[name=_token]').val(),'quantity' : qty },
			success : function (){
				sub_total = price * qty;
				$('#subtotal').html(sub_total);
			}
		});
		$('#quantity').val(qty);
	});

	// get subTotal

	var qty =	$('#quantity').val();
	sub_total = price * qty;
	$('#subtotal').html(sub_total);
});

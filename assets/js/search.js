$(document).ready(function(e){
	$("#search").keyup(function(){
		$("#area").show();
		var x = $(this).val().trim();
		$.ajax({
			type:'POST',
			url:'search_product.php',
			data:'key='+x,
			success:function(data){
				$("#area").html(data);
			}
		});
	});
});

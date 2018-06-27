function addToCart(id){
	// alert ("You have select item" + id);
	var quantity = $("#quantity"+id).val();
	// alert("You have purchased " + quantity + " of item" + id);  <---- for testing
	$.ajax({
	"url":"partials/addToCart.php",
	"data":{"quantity": quantity, "id":id},
	//throws to addtocart.php the ID of the selected item
	"type": "GET",
	"success": function(data){
		alert(data);
	}
	});
}
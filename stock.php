<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<div class="rows">
	<div class="col-md-12" >
	<?php include'header.php' ?>
		<?php include'menu.php' ?>
	</div>
</div>
	<div class="rows">
	<div class="col-md-3" >
	<?php include'admin_dashboard_sidebar.php' ?>
	</div>
	<!--=========START FORM========== -->
	<div class="col-md-9" style="margin-top:20px;";  box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);" >
<div style="margin-right:20px;">
	<form method="post">
		
		<div class="" style="margin-right:20px;" >
		
			 <!-- <div class="form-group">
			    <label for="Product ID:">Product ID:</label>
			    <input type="number" class="form-control" name="id">
			 </div> -->
			 <table class="table table-responsive table-bordered">
			 	<tr>
			 		<thead style="background-color: rgb(136, 141, 144);color:#fff"><th colspan="2" align="center" style="text-align: center;">Add to Stock</th></thead>
			 		<tbody>
			 			<tr>
			 				<td> <label for="Price">Model</label></td>
			 				<td><input type="text" autocomplete="off" class="form-control" id="model" name="model" required>
                            <div id="sugession" style="width:56%;position:absolute;background:lime;border-radius:10px;">
                            	
                            </div>
			 				</td>
			 				
			 			</tr>
			 			<tr>
			 				<td> <label for="Price">Price</label></td>
			 				<td> <input type="number" class="form-control" id="price" name="price" required></td>
			 			</tr>
			 			<tr>
			 				<td> <label for="Quantity:">Quantity:</label></td>
			 				<td><input type="number" class="form-control" id="quantity" name="quantity" required></td>
			 			
			 				<tr>
			 				<td> <label for="Seller">Seller</label></td>
			 				<td><input type="text" class="form-control" id="text" name="dealer" required></td>
			 			</tr>
			 				<tr>
			 				<td>  <label for="Payment Type">Payment Type: </label></td>
							 	   <td> <select name="p_type" class="form-control" required>
								    <option value="CASH">CASH</option>
								    <option value="CARD">CARD</option>
								    <option value="BANK">BANK</option>
								    <option value="Bkash">Bkash</option>
								 </select></td>
			 			</tr>
			 				<tr>
			 				<td> <label for="total">Total Amount</label></td>
			 				<td> <input type="number" class="form-control" id="total" name="total" required></td>
			 			</tr>
			 				<tr>
			 				<td>  <label for="Paid">Paid</label></td>
			 				<td><input type="number" class="form-control" id="paid" name="paid" required></td>
			 			</tr>
			 				<tr>
			 				<td>  <label for="Due">Due</label></td>
			 				<td> <input type="number" class="form-control" id="due" name="due" required></td>
			 			</tr>
			 				<tr>
			 				<td> <label for="Date">Date</label></td>
			 				<td><input type="date" class="form-control" id="date" name="date" required></td>
			 			</tr>
			 			</tr>
			 				<tr>
			 				<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="Add" style="width: 20%;">
			 				
			 			</tr>
			 		</tbody>
			 	</tr>
			 </table>

				
			</div>
			</form>
		</div>
		
	

	<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
// $id=$_POST['id'];
$model=$_POST['model'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$seller=$_POST['seller'];
$payment=$_POST['p_type'];
$total=$_POST['total'];
$paid=$_POST['paid'];
$due=$_POST['due'];
$date=$_POST['date'];

$query="insert into stock(model,price,quantity,seller,payment_type,total,paid,due,date)values('$model','$price','$quantity','$seller','$payment','$total','$paid','$due','$date')";
$query2="insert into inventory(model,price,quantity)values('$model','$price','$quantity')";
$a=mysqli_query($conn,$query);
$b=mysqli_query($conn,$query2);


	echo"<script>
	
	
alert('Added Sucessfully')
	
</script>";

}



	?>
</div>
	</div>
</div>
	

</body>
<script type="text/javascript">
	
	$(document).ready(function(){

	$('#model').keyup(function() {
		$('#sugession').show();
		var q=$('#model').val();
		$.post( "fetch.php", { query:q } ,function( data ) {
     $("#sugession" ).html( data );
});
	
	});

	$(document).on('click','li',function(){
		$('#model').val($(this).text());
		var q=$('#model').val();
		$.post( "price.php", { query:q } ,function( data ) {
     $("#price" ).val( data );
	});
		$('#sugession').hide();
	});

	$('#model').change(function(){

		var q=$('#model').val();
		$.post( "price.php", { query:q } ,function( data ) {
     $("#price" ).val( data );
	});
	
	});



$('#quantity').change(function(){

		var q=$('#quantity').val();
		var p=$('#price').val();
		var total=p*q;
		$('#total').val(total);
	
	});

		$('#quantity').keyup(function(){

		var q=$('#quantity').val();
		var p=$('#price').val();
		var total=p*q;
		$('#total').val(total);
	
	});



		$('#paid').change(function(){

		var t=$('#total').val();
		var p=$('#paid').val();
		var due=t-p;
		$('#due').val(due);
	
	});

		$('#paid').keyup(function(){

		var t=$('#total').val();
		var p=$('#paid').val();
		var due=t-p;
		$('#due').val(due);
	
	});

});
</script>
</html>
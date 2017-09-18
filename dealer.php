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
		<?php include'menu2.php' ?>
	</div>
</div>
	<div class="rows">
	
	<!--=========START FORM========== -->
<div class="col-md-12" style="margin-top:20px;";  box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);" >
	<div style="margin-right:20px;">
		<form method="post">
		
			<div class="" style="margin-right:20px;" >
		
			
				<table class="table table-responsive table-bordered">
				 						
				 	<thead style="background-color: rgb(92, 184, 92);color:#fff">
				 			<th colspan="2" align="center" style="text-align: center;">Add To Stock
				 			</th>

				 	</thead>
				 	<tbody>

				 		<tr>
				 			<td>  <label for="Payment Type">Dealer: </label>
				 			</td>
							<td>

								 	    <select name="dealer" class="form-control" >
								 	    <?php
								 	    include('db_connect.php');

								 	    $q="select * from add_dealer";
								 	    $a=mysqli_query($conn,$q);
								 	    while($row=mysqli_fetch_array($a))
								 	    {

								 	    	echo $name=$row['org'];
								 	    ?>

								 	    
									    <option value="<?php  echo $name; ?>"><?php  echo $name; ?></option>
									   <?php  }  ?>
									 	</select>

							</td>	
				 	   </tr>

				 		<tr>
				 			<td> <label for="product Type">Mobile</label></td>
						    <td> 
								<select name="brand" id="brand" class="form-control"  style="float:left;width:33.3%;" >
								 	<option style="background:lightblue;" >Choose Brand</option>
										
								 	    <?php
								 	    include('db_connect.php');

								 	    $q="SELECT DISTINCT `brand` FROM `mobile_brand`";
								 	    $a=mysqli_query($conn,$q);
								 	    while($row=mysqli_fetch_array($a))
								 	    {

								 	    	echo $name=$row['brand'];
								 	    ?>

									    <option value="<?php  echo $name; ?>"><?php  echo $name; ?></option>
									   <?php  } ?>

									</select>

									 	<!-- ..................................MODEL........................................... -->
									 	
									<select name="model" id="model" class="form-control"  style="float:left;width:33.3%;">
										<option style="background:lightblue;">Model</option>
										

									 </select>

									 	<!-- .................................COLOR............................................ -->

									 <select name="color" id="color"  class="form-control"  style="float:left;width:33.3%;" >
									   <option style="background:lightblue;">Color</option>
										
									 </select></td>		
				 		</tr>
				 		
				 			
				 		<tr>
				 				<td> <label for="Price">Price</label></td>
				 				<td> <input type="number" class="form-control" id="price" name="price" required></td>
				 		</tr>
				 		<tr>
				 				<td> <label for="Quantity:">Quantity:</label></td>
				 				<td><input type="number" class="form-control" id="quantity" name="quantity" required ></td>
				 		</tr>
				 				
				 				
				 		<tr>
				 				<td> <label for="total">Total Amount</label></td>
				 				<td> <input type="number" class="form-control" id="total" name="total" ></td>
				 		</tr>

				 		<tr>
				 			<td>
				 				<label for="Payment Type" >Payment Type: </label></td>
							<td>
								<select name="p_type" class="form-control" id="ttt" style="float:left;width:50%;" >
									    <option value="CASH">CASH</option>
									    <option value="CARD">CARD</option>
									    <option  value="T.T" >T.T</option>
									    <option value="BANK">BANK</option>
									    <option value="Bkash">Bkash</option>
								</select>

									 	<div name="tt" id="show" style="float:left;width:auto;">
									 	   <input type="text" placeholder="T.T Amount" class="form-control" id="tk" name="tk" >

									 	   <input type="text" class="form-control" id="num" placeholder="T.T Number" name="num" >

									 	   <input type="text" class="form-control" id="bank" name="bank" placeholder="Bank Name" >

									 	   <input type="date" class="form-control" id="dt" name="dt" >

									 	</div>
							</td>
				 		</tr>

				 		<tr>
				 				<td ><label for="Paid">Cash Paid</label></td>
				 				<td><input type="number" class="form-control" id="paid2" name="paid" ></td>
				 		</tr>
				 		
				 		<tr>
				 				<td>  <label for="Due">Due</label></td>
				 				<td> <input type="number" class="form-control" id="due" name="due" ></td>
				 		</tr>
				 		<tr>
				 				<td> <label for="Date">Date</label></td>
				 				<td ><input style="width:50%" type="date" class="form-control" id="date" name="date" required ></td>
				 		</tr>

				 		
				 		<tr>
				 		    <td colspan="2" align="center"><input type="submit" name="submit"  class="btn btn-success" value="Add" style="width: 20%;">
				 		    </td>	
				 		</tr>
				 	</tbody>
				</table>	
			</div>
		</form>
	</div>
		
	<!-- .................................DB INSERT............................................ -->

	<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
	
	$qq=0;

$dealer=$_POST['dealer'];	
$brand=$_POST['brand'];
$model=$_POST['model'];
$color=$_POST['color'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$payment=$_POST['p_type'];
$tt_amount=$_POST['tk'];
$tt_number=$_POST['num'];
$tt_bank=$_POST['bank'];
$tt_date=$_POST['dt'];
$total=$_POST['total'];
$paid=$_POST['paid'];
$due=$_POST['due'];
$date=$_POST['date'];

$q="SELECT * FROM stock WHERE brand='$brand' and model='$model' and color='$color'";
$aa=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($aa))
            {
            
$qq=$row['quantity'];


}
$qqq=$qq+$quantity;
if(mysqli_num_rows($aa)>0)
{
	
	$query4="UPDATE inventory SET quantity='$qqq', price='$price' WHERE brand='$brand'and model='$model' and color='$color' ";



$b=mysqli_query($conn,$query4);

	echo"<script>
	
	
alert('Inventory Update Sucessfull')
	
</script>";

}



else {


$query3="insert into inventory(brand,model,color,price,quantity)values('$brand','$model','$color','$price','$quantity')";



$b=mysqli_query($conn,$query3);

echo"<script>
	
	
alert('New Data Inserted to Inventory')
	
</script>";


}

$query2="insert into stock(dealer,brand,model,color,price,quantity,payment_type,tt_amount,tt_number,tt_bank,tt_date,total,paid,due,date)values('$dealer','$brand','$model','$color','$price','$quantity','$payment','$tt_amount','$tt_number','$tt_bank','$tt_date','$total','$paid','$due','$date')";
$a=mysqli_query($conn,$query2);
	}



	?>

</div>
	</div>


</body>


<!-- ................................SCRIPT ............................................. -->

<script type="text/javascript">
	
	
$(document).ready(function(){

	$("#show" ).hide( );


	$('#brand').change(function(){
		
		var q=$('#brand').val();

		$.post( "fetch_model.php", { query:q } ,function( data ) {
     $("#model" ).html( data );
	});
	
	});


	$('#model').change(function(){
		
		var q=$('#model').val();

		$.post( "fetch_color.php", { query:q } ,function( data ) {
     $("#color" ).html( data );
	});
	
	});



$( "#ttt" ).change(function() {
 var a=$( "#ttt" ).val();
 if(a=="T.T")
 
 {
 	$("#show" ).show();
 	
 	
}
else{
	$("#show" ).hide();
}

 	
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



		$('#paid2').change(function(){

		var t=$('#total').val();
		var p=$('#paid2').val();
		var due=t-p;
		$('#due').val(due);
	
	});

		$('#paid2').keyup(function(){

		var t=$('#total').val();
		var p=$('#paid2').val();
		var due=t-p;
		$('#due').val(due);
	
	});

		$('#tk').keyup(function(){

		var t=$('#total').val();
		var p=$('#tk').val();
		var due=t-p;
		$('#due').val(due);
	
	});

});
</script>
</html>
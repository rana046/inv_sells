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
		
		
		
		<div class="col-md-6" style="margin-top:2px;margin-left:-14px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:#F1A9A0;color:#FFF;height:auto;" >
		    
		    <div style="">
					
				<form method="post" style="height:auto;">
			
					<div class="form-group" style="margin-top:20px;margin-left:20px;" >
					
							
						<table class="table table-responsive table-bordered">
							<thead  style="background: #4183D7">
								<th colspan="2" align="center" style="text-align: center;">Product Sell
								</th>
							</thead>

							<tbody>
								<tr>
									<td> <label for="Price">Shop Name</label></td>
								   	<td>

								   		<select style="box-shadow:0 0 7px; color:black;" name="customer" class="form-control" required>
									 	    <?php
									 	    include('db_connect.php');

									 	    $q="select * from add_buyers";
									 	    $a=mysqli_query($conn,$q);
									 	    while($row=mysqli_fetch_array($a))
									 	    {

									 	    	echo $name=$row['shop'];
									 	    ?>

									 	    
										    <option value="<?php  echo $name; ?>"><?php  echo $name; ?></option>
										   <?php  }  ?>
										</select>

									</td>
								</tr>

								<tr>
					 				<td> <label for="product Type">Mobile</label></td>
									<td>
									 	  <select name="brand" id="brand" class="form-control" required style="float:left;width:33.3%;">
									 	  <option style="background:lightblue;">Choose Brand</option>
											
									 	    <?php
									 	    include('db_connect.php');

									 	    $q="SELECT DISTINCT `brand` FROM `inventory`";
									 	    $a=mysqli_query($conn,$q);
									 	    while($row=mysqli_fetch_array($a))
									 	    {

									 	    	echo $name=$row['brand'];
									 	    ?>

										    <option value="<?php  echo $name; ?>"><?php  echo $name; ?></option>
										   <?php  } ?>

										 	</select>

										 	<!-- ..................................MODEL........................................... -->
										 	
											<select name="model" id="model" class="form-control" required style="float:left;width:33.3%;">
											
											<option style="background:lightblue;">Choose Model</option>
											

										 	</select>

										 	<!-- .................................COLOR............................................ -->

										 	<select name="color" id="color"  class="form-control" required style="float:left;width:33.3%;" >
										    <option style="background:lightblue;">Choose Color</option>
											
										 </select></td>		
					 			</tr>

								<tr>
								   <td> <label for="Price">Price</label></td>
								   
								   <td><input type="number" class="form-control" id="price" name="price" style="box-shadow:0 0 7px;" required></td>
								</tr>
									
								<tr>
									<td><label for="Quantity:">Quantity:</label></td><td> <input type="number" class="form-control" id="quantity" name="quantity" required style="box-shadow:0 0 7px;">
									</td>
								</tr>

								   
								<tr>
									<td><label for="Discount:%">Discount:%</label></td>
									<td> <input type="number" class="form-control" id="discount" name="discount" required style="box-shadow:0 0 7px;">
									</td>
								</tr>
								    
								<tr>
								   <td><label for="">Total Bill</label></td>
								   <td>  <input type="number" class="form-control" id="total" name="total" style="box-shadow:0 0 7px;"></td>
								</tr>


								    
								<tr>
								   <td><label for="Paid">Paid</label></td>
								   <td><input type="number" class="form-control" id="paid" name="paid" required style="box-shadow:0 0 7px;"></td>
								</tr>

								<tr>
								   <td> <label for="Due">Due</label></td>
								   <td> <input type="number" class="form-control" id="due" name="due" style="box-shadow:0 0 7px;"></td>
								</tr>
								 
								<tr>
								   <td><label for="Date">Date</label></td> 
								   <td><input type="date" class="form-control" id="date" name="date" required ></td>
								</tr>
								   
								<tr>
								   <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="ADD">
								   
								   </td>	
								</tr>

							</tbody>
						</table>
	 				</div >

				</form>
						<?php

						include ('db_connect.php');

						if(isset($_POST['submit']))
						{	
							
							$client=$_POST['customer'];
							$brand=$_POST['brand'];
							$model=$_POST['model'];
							$color=$_POST['color'];
							$price=$_POST['price'];
							$quantity=$_POST['quantity'];
							$discount=$_POST['discount'];
							$total=$_POST['total'];
							$paid=$_POST['paid'];
							$due=$_POST['due'];
							$date=$_POST['date'];

							$qe1nt=0;


							
				$q="SELECT * FROM inventory WHERE brand='$brand' and model='$model' and color='$color'";

				$qe=mysqli_query($conn,$q);	
				while($row=mysqli_fetch_array($qe))

				{

					$qent=$row['quantity'];

				}

				

					if($qent>=$quantity)

						{

						$newqent=$qent-$quantity;

						$query4="UPDATE inventory SET quantity='$newqent' WHERE brand='$brand'and model='$model' and color='$color' ";
						$cb=mysqli_query($conn,$query4);

						echo"<script>
							alert('Inventory Update Sucessfull')
							</script>";

						$query3="insert into sells(client,brand,model,color,quantity,price,discount,total,paid,due,date)values('$client','$brand','$model','$color','$quantity','$price','$discount','$total','$paid','$due','$date')";
							$c=mysqli_query($conn,$query3);
							
						echo"<script>
							alert('Sells Account Updated')
							</script>";

							$query2="insert into select_mobile(brand,model,color,quantity,price,discount)values('$brand','$model','$color','$quantity','$price','$discount')";
							$cc=mysqli_query($conn,$query2);

							echo"<script>
							alert('insert into invoice')
							</script>";

						}


					else{
						echo"<script>
					alert('Stock Low')
					</script>";
					}

				

				

				}
						?>

			</div>

		</div>



		<div class="col-md-6" >
		        <div style="margin-top:2px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);height:auto;>

					<form method="post" style="height:auto;">
					<form method="post" style="height:auto;">
			
						<div align="center" class="form-group" style="margin-top:20px;margin-left:20px;" >
							<p  style="text-align: center;
										font-size: 25px;
										
										color: rgb(106, 209, 81);
											background-color: lightcyan;
											width: 100px;">Invoice</p>
							<p style="text-align:center;text-decoration: underline;">Eva Enterprise</p>
							<table class="table table-responsive" style="border:none">
								<thead>
									
								</thead>
								<tbody>
									<tr>
										<td>Brand</td>
										<td>Model</td>
										<td>Color</td>
										<td>Quantity</td>
										<td>Price</td>
										<td>Discount</td>
									</tr>


										<?php
								          
								          include'db_connect.php';
								            $q="select * from select_mobile";
								            $exe=mysqli_query($conn,$q);
								            while($row=mysqli_fetch_array($exe))
								            {
								            
								            $brand=$row['brand'];
								            $model=$row['model'];
								            $color=$row['color'];
								            $quantity=$row['quantity'];
								            $price=$row['price'];
								            $discount=$row['discount'];
								        ?>
						           	<tr>
						             
							             <td> <label for="Price"><?php echo $brand;  ?></label></td>
							             <td> <label for="Price"><?php echo $model;  ?></label></td>
							             <td> <label for="Price"><?php echo $color;  ?></label></td>
							             <td> <label for="Price"><?php echo $quantity;  ?></label></td>
							             <td> <label for="Price"><?php echo $price;  ?></label></td>
							             <td> <label for="Price"><?php echo $discount;  ?></label></td>
						            </tr>

						           		<?php  }  ?> 

           	`						<tr>
										<td colspan="6" align="center"><input class="btn btn-primary" type="submit" name="submit2" value="Print">
										</td>
									</tr>

								</tbody>
							</table>
	 					</div >

					</form>
					<?php

						include ('db_connect.php');

						if(isset($_POST['submit2']))
						{	
							
							
							

							
				$s="DELETE FROM select_mobile";

				$ss=mysqli_query($conn,$s);	
				echo"<script>
					alert('deleted')
					</script>";


				}
						?>
						
				</div>

			</div> 
	</div>


<script type="text/javascript">
	
	$(document).ready(function(){

	$('#brand').change(function(){
		
		var q=$('#brand').val();

		$.post( "fetch_model_sells.php", { query:q } ,function( data ) {
     $("#model" ).html( data );
	});
	
	});


	$('#model').change(function(){
		
		var q=$('#model').val();

		$.post( "fetch_color_sells.php", { query:q } ,function( data ) {
     $("#color" ).html( data );
	});
	
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

$('#discount').change(function(){

		var r=$('#discount').val();
		var p=$('#price').val();
		var t=$('#quantity').val();
		var q= p*t;
		var s=(q*r)/100;
		
		var total=q-s;

		$('#total').val(total);
	
	});

$('#discount').keyup(function(){

		var r=$('#discount').val();
		var p=$('#price').val();
		var t=$('#quantity').val();
		var q= p*t;
		var s=(q*r)/100;
		
		var total=q-s;

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
</body>
</html>
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
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8" style="margin-top:2px;margin-left:-14px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
										    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:#87aec1;color:#FFF;height:auto;" >
		        <div style="">
					<form method="post" style="height:auto;">
			
						<div class="form-group" align="center" style="margin-top:10px;margin-left:20px;" >
						<div class="form-group" style="text-align:center;
											    padding: 10px;
											    color: white;
											    font-family: cursive;
											    background-color: #337ab7;
											    border: 2px solid;
											    border-radius: 25px;
											    font-size: 23px;
											    
											    width:141px;
											    box-shadow: rgb(0, 0, 0) 0 0 19px;
											    border-collapse: collapse;">

								STONE SELL						
						</div>
					
							
							<table class="table table-responsive table-bordered" style="    margin-top: -10px;">
							
							<tbody>

								<tr>
							   <td> <label for="Quantity:">S.L:</label></td><td> <input type="number" class="form-control" id="quantity" name="sl" required style="box-shadow:0 0 7px;"></td>
							</tr>

							<tr>
							   <td><label for="Date">Date</label></td>
							   <td>
							    <input type="date" class="form-control" id="date" name="date" required ></td>
							</tr>

							<tr>
							   <td><label for="Date">INVOICE NUM</label><td> <input type="number" class="form-control" id="date" name="inv" required ></td>
							</tr>

							

							<tr>
							   <td>  <label for="Price">VEHICLE NUM</label></td><td><input type="number" class="form-control" id="price" name="vn" style="box-shadow:0 0 7px;" ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">VEHICLE RENT</label></td><td><input type="number" class="form-control" id="price" name="vr" style="box-shadow:0 0 7px;" ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">MAGORMENT</label></td><td><input type="number" class="form-control" id="price" name="mr" style="box-shadow:0 0 7px;" ></td>
							</tr>
							<tr><td><label for="">1/2+FEET+RT+AM</label></td>
							<td colspan="2">
							   	<input type="number" class="form-control" id="price" name="price1" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="5/8" >
							   <input type="number" class="form-control" id="price" name="price2" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="1/2" >
							   <input type="number" class="form-control" id="price"  name="price3" style="box-shadow:0 0 7px;width:25%;float:left;" placeholder="3/4">
							   <input type="number" class="form-control" id="price" name="price4" style="box-shadow:0 0 7px;width:25%;" placeholder="1/4" >
							    </td>
							</tr>

							<tr><td><label for="">3/4+FEET+RT+AM</label></td>
							<td colspan="2">
							   	<input type="number" class="form-control" id="price" name="price5" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="5/8" >
							   <input type="number" class="form-control" id="price" name="price6" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="1/2" >
							   <input type="number" class="form-control" id="price"  name="price7" style="box-shadow:0 0 7px;width:25%;float:left;" placeholder="3/4">
							   <input type="number" class="form-control" id="price" name="price8" style="box-shadow:0 0 7px;width:25%;" placeholder="1/4" >
							    </td>
							</tr>


							<tr>
							   <td>  <label for="Price">T.AMOUNT</label></td><td><input type="number" class="form-control" id="price" name="amount" style="box-shadow:0 0 7px;" ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">PAYMENT</label></td><td><input type="number" class="form-control" id="price" name="payment" style="box-shadow:0 0 7px;" ></td>
							</tr>

							
							<tr>
							   <td>  <label for="Price">BALANCE</label></td><td><input type="number" class="form-control" id="price" name="balance" style="box-shadow:0 0 7px;" ></td>
							</tr>
								<tr>
							   <td> <label for="Quantity:">PLACE:</label></td><td> <input type="text" class="form-control" id="quantity" name="place" required style="box-shadow:0 0 7px;"></td>
							</tr>
							   
							  
							   <tr>
							   <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="OK">
							   
							   <input class="btn btn-primary" type="submit" name="submit" value="Print"></td>	
							</tr>

							 </tbody>
							 </table>
	 					</div >

					</form>
						<?php

						include ('db_connect.php');

						if(isset($_POST['submit']))
						{	
							// $aa=$_POST['num'];
							$sl=$_POST['sl'];
							$date=$_POST['date'];
							$inv=$_POST['inv'];
							$vn=$_POST['vn'];
							$vr=$_POST['vr'];
							$mr=$_POST['mr'];

							$price1=$_POST['price1'];
							$price2=$_POST['price2'];
							$price3=$_POST['price3'];
							$price4=$_POST['price4'];
							$price5=$_POST['price5'];
							$price6=$_POST['price6'];
							$price7=$_POST['price7'];
							$price8=$_POST['price8'];

							$amount=$_POST['amount'];
							$payment=$_POST['payment'];
							$balance=$_POST['balance'];
							$place=$_POST['place'];
							
							
							
				$query="insert into import(adate,ddate,lorry_nu,quality1,quality2,quality3,quality4,tqn,ton,fright,rate,amount,type1,type2,type3,type4)values('$aa','$adate','$ddate','$lorry_nu','$quality1','$quality2','$quality3','$quality4','$tqn','$ton','$fright','$rate','$amount','$type1','$type2','$type3','$type4')";


							$a=mysqli_query($conn,$query);

							echo"<script>
	
	
alert('Added Sucessfully')
	
</script>";
					
					} ?>



				</div>

			</div>
			<div class="col-md-2">
			
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
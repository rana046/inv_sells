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
										    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:#31708f;color:#FFF;height:auto;" >
		        <div style="">
					<form method="post" style="height:auto;">
			
						<div class="form-group" align="center" style="margin-top:10px;margin-left:20px;" >
						<div class="form-group" style="text-align:center;
											    padding: 10px;
											    color: aquamarine;
											    font-family: cursive;
											    background-color: #f12729;
											    border: 2px solid;
											    border-radius: 25px;
											    font-size: 23px;
											    
											    width:141px;
											    box-shadow: rgba(255, 201, 206, 1) 0 0 19px;
											    border-collapse: collapse;">

								IMPORT						
						</div>
					
							
							<table class="table table-responsive table-bordered" style="    margin-top: -10px;">
							
							<tbody>

								<tr>
							   <td> <label for="Quantity:">NO:</label></td><td> <input type="number" class="form-control" id="quantity" name="num" required style="box-shadow:0 0 7px;"></td>
							</tr>

							<tr>
							   <td><label for="Date">Date</label></td>

							   <td><label  style="width:auto;float:left;margin-top: 7px;    margin-left: 45px;margin-right: 7px;" for="Date">A.Date:</label>
							    <input style="width:auto;float:left;" type="date" class="form-control" id="date" name="adate" required ><label style="width:auto;float:left;margin-top: 7px;    margin-left: 64px;margin-right: 7px;" for="Date">D.Date:</label>
							    <input style="width:auto;" type="date" class="form-control" id="date" name="ddate" required ></td>
							</tr>
							<tr>
							   <td><label for="Date">LORRY.NU</label><td> <input type="number" class="form-control" id="date" name="lorry_nu" required ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">QUALITY</label></td><td><input type="number" class="form-control" id="price" name="quality1" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="5/8" >
							   <input type="number" class="form-control" id="price" name="quality2" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="1/2" >
							   <input type="number" class="form-control" id="price"  name="quality3" style="box-shadow:0 0 7px;width:25%;float:left;" placeholder="3/4">
							   <input type="number" class="form-control" id="price" name="quality4" style="box-shadow:0 0 7px;width:25%;" placeholder="1/4" ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">F BY TQN</label></td><td><input type="number" class="form-control" id="price" name="tqn" style="box-shadow:0 0 7px;" ></td>
							</tr>


							<tr>
							   <td>  <label for="Price">T.TON</label></td><td><input type="number" class="form-control" id="price" name="ton" style="box-shadow:0 0 7px;" ></td>
							</tr>

							<tr>
							   <td>  <label for="Price">FRIGHT</label></td><td><input type="number" class="form-control" id="price" name="fright" style="box-shadow:0 0 7px;" ></td>
							</tr>

							
							<tr>
							   <td>  <label for="Price">RATE</label></td><td><input type="number" class="form-control" id="price" name="rate" style="box-shadow:0 0 7px;" ></td>
							</tr>
								<tr>
							   <td> <label for="Quantity:">AMOUNT:</label></td><td> <input type="number" class="form-control" id="quantity" name="amount" required style="box-shadow:0 0 7px;"></td>
							</tr>
							   <tr>
							   <td colspan="2">
							   	<input type="number" class="form-control" id="price" name="type1" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="5/8" >
							   <input type="number" class="form-control" id="price" name="type2" style="box-shadow:0 0 7px;width:25%;float:left" placeholder="1/2" >
							   <input type="number" class="form-control" id="price"  name="type3" style="box-shadow:0 0 7px;width:25%;float:left;" placeholder="3/4">
							   <input type="number" class="form-control" id="price" name="type4" style="box-shadow:0 0 7px;width:25%;" placeholder="1/4" >
							    </td>
							</tr>
							   
							  
							   <tr>
			 				<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="Add" style="width: 20%;"></td>
			 				
			 			</tr>

							 </tbody>
							 </table>
	 					</div >

					</form>
						<?php

						include ('db_connect.php');

						if(isset($_POST['submit']))
						{	
							$num=$_POST['num'];
							$adate=$_POST['adate'];
							$ddate=$_POST['ddate'];
							$lorry_nu=$_POST['lorry_nu'];
							$quality1=$_POST['quality1'];
							$quality2=$_POST['quality2'];
							$quality3=$_POST['quality3'];
							$quality4=$_POST['quality4'];
							$tqn=$_POST['tqn'];
							$ton=$_POST['ton'];
							$fright=$_POST['fright'];
							$rate=$_POST['rate'];
							$amount=$_POST['amount'];
							$type1=$_POST['type1'];

							$type2=$_POST['type2'];
							$type3=$_POST['type3'];
							$type4=$_POST['type4'];
							
							
							
				$query="insert into import(num,adate,ddate,lorry_nu,quality1,quality2,quality3,quality4,tqn,ton,fright,rate,amount,type1,type2)values('$num',$adate','$ddate','$lorry_nu','$quality1','$quality2','$quality3','$quality4','$tqn','$ton','$fright','$rate','$amount','$type1','$type2')";


							$a=mysqli_query($conn,$query);

							echo"<script>
	
	
alert('Added Sucessfully')
	
</script>";
					
					}



						?>

				</div>

			</div>
			<div class="col-md-2">
			
		</div>



			 
	</div>

</body>
</html>
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
		<div class="col-md-12" style="margin-top:2px;margin-left:-14px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:rgba(80, 58, 58, 0.61);color:#FFF;height:auto;" >
	        <div style="">
				<form method="post" style="height:auto;">
		
					<div class="form-group" style="margin-top:20px;margin-left:20px;" >
				
						
						<table class="table table-responsive table-bordered">
						<thead  style="background: #ab324e">
						<th colspan="2" align="center" style="text-align: center;">ADD A NEW DEALER</th>

						</thead>
						<tbody>
							<tr>
						   <td> <label for="Price">Company Name</label></td><td><input type="text" class="form-control" id="text" name="org"  style="box-shadow:0 0 7px;"></td>
						</tr>
						<tr>
						   <td> <label for="Price">Owner</label></td><td><input type="text" autocomplete="off" class="form-control" id="model" name="owner"  style="box-shadow:0 0 7px;"><div  id="sugession" style="width:51%;position:absolute;background:#DB0A5B;border-radius:10px;">
                            	
                            </div></td>
						</tr>
						<tr>
						   <td>  <label for="Price">Product Type</label></td><td><select name="product" class="form-control" required>
								    <option value="Mobile">Mobile</option>
								    <option value="Stone">Stone</option>
								    
								 </select></td>
						   

						</tr>
						<tr>
						   <td>  <label for="Price">Location</label></td><td><input type="text" class="form-control" id="price" name="location" style="box-shadow:0 0 7px;" ></td>
						</tr>
							<tr>
						   <td> <label for="Quantity:">Mobile No.:</label></td><td> <input type="number" class="form-control" id="quantity" name="mobile" required style="box-shadow:0 0 7px;"></td>
						</tr>
						
						 
						   <tr>
						   <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="ADD TO LIST">	
							</tr>

						 </tbody>
						 </table>
 					</div >

				</form>
<?php

include('db_connect.php');
if(isset($_POST['submit']))

{


$org=$_POST['org'];
$owner=$_POST['owner'];
$product=$_POST['product'];
$location=$_POST['location'];
$mobile=$_POST['mobile'];


$query="insert into add_dealer(org,owner,product,location,mobile)values('$org','$owner','$product','$location','$mobile')";

$a=mysqli_query($conn,$query);



echo"<script>
alert('Added Sucessfully')
	</script>";

}



	?>

			</div>

		</div>



		
</div>
</body>
</html>
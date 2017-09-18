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

	<div class="rows" style="padding:0 auto;margin:0px;">
		
		<!--=========START FORM========== -->
		<div class="col-md-5" style="margin-top:2px;    margin-left: 108px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:rgba(136, 5, 5, 0.97);color:#FFF;height:auto;" >
		        <div style="">
					<form method="post" style="height:auto;">
			
						<div class="form-group" style="margin-top:20px;margin-left:20px;" >
							<p style="text-align:center;font-family: monospace;
    font-size: 20px;">LOAN</p>
							<p style="text-align:center;text-decoration: underline;">Eba Enterprise</p>
							<table class="table table-responsive" style="border:none">
								<thead>
									
								</thead>
								<tbody>
							<tr>
						   <td> <label for="Price">Name</label></td><td><input type="text" class="form-control" id="text" name="customer"  style="box-shadow:0 0 7px;"></td>
						</tr>
						<tr>
						   <td> <label for="Price">TAKA</label></td><td><input type="text" autocomplete="off" class="form-control" id="model" name="model"  style="box-shadow:0 0 7px;">
						   </td>
						   </tr>
						   <tr>
						   <td> <label for="Price">Reference</label></td><td><input type="text" class="form-control" id="text" name="customer"  style="box-shadow:0 0 7px;"></td>
						</tr>
						  <tr>
						   <td><label for="Date">Date</label><td> <input type="date" class="form-control" id="date" name="date" required ></td>
						</tr>
						   <tr>
							   <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="Confirm">
							   
							   <input class="btn btn-primary" type="submit" name="submit" value="Print"></td>	
							</tr>
							
						

						 </tbody>
						</table>
 					</div >

				</form>
				
			</div>
		</div>



		<div class="col-md-5" style="margin-top:2px;margin-left:5px; box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
									    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6); background:rgba(2, 134, 110, 0.94);color:#FFF;height:auto;" >
		        <div style="">
					<form method="post" style="height:auto;">
			
						<div class="form-group" style="margin-top:20px;margin-left:20px;" >
							<p style="text-align:center;font-family: monospace;
    font-size: 20px;">RECEIVE</p>
							<p style="text-align:center;text-decoration: underline;">Eba Enterprise</p>
							<table class="table table-responsive" style="border:none">
								<thead>
									
								</thead>
								<tbody>
							<tr>
						   <td> <label for="Price">Name</label></td><td><input type="text" class="form-control" id="text" name="customer"  style="box-shadow:0 0 7px;"></td>
						</tr>
						<tr>
						   <td> <label for="Price">Receive TK</label></td><td><input type="text" autocomplete="off" class="form-control" id="model" name="model"  style="box-shadow:0 0 7px;">
						   </td>
						   </tr>
						   <tr>
						   <td> <label for="Price">Due</label></td><td><input type="text" autocomplete="off" class="form-control" id="model" name="model"  style="box-shadow:0 0 7px;">
						   </td>
						   </tr>
						  <tr>
						   <td><label for="Date">Date</label><td> <input type="date" class="form-control" id="date" name="date" required ></td>
						</tr>
						   <tr>
							   <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit" value="Confirm">
							   
							   <input class="btn btn-primary" type="submit" name="submit" value="Print"></td>	
							</tr>
							
						

						 </tbody>
						</table>
 					</div >

				</form>
				
			</div>

		</div>
</div>
<script type="text/javascript">
	
	$(document).ready(function(){

	$('#model').keyup(function() {
		$('#sugession').show();
		var q=$('#model').val();
		$.post( "fetch.php", { query:q } ,function( data ) {
     $("#sugession" ).html( data );
});
		/*
		$.ajax({
			method="POST",
			url:"fetch.php",
			data:{query:q},
			sucess:function(data)
			{

				$('#sugession').html(data);
			}
		});*/

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
</body>
</html>
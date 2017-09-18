
<?php
include 'header.php';
?>

<body background="bg.jpg" style="background-image:url('bg.jpg');">
<fieldset>

 <div class="box" style="border:2px solid #fff;padding: 15px;-webkit-box-shadow: 0 0 5px 5px#888; ">
	<legend>Login</legend>
	
	<form  method="POST" >
		<table>
			<tr>
				<th><label for="username">Username</label></th>
				<td>
					<input type="text" name="username"  placeholder="Username" />
				</td>
			</tr>

			<tr>
				<th><label for="username">Password</label></th>
				<td>
					<input type="password" name="password" placeholder="Password"/>
				</td>
			</tr>

			<tr>
				<th></th>
				<td>
					<input type="Submit" id="button" name="submit" class="btn btn-success">
				</td>
			</tr>
		</table>
	</form>
	
	<?php
include 'db_connect.php';

session_start();

if(isset($_POST['submit']))
{



    $username= $_POST['username'];
	$password= $_POST['password'];
	$q="select * from admin_login where user='$username' and pass='$password'";
	$exe=mysqli_query($conn,$q);
	if(mysqli_num_rows($exe)>0)
	{

		$username=$_SESSION['username']= $_POST['username'];
		header('location:home.php');
	}
	else
	{

		echo"<script>alert('Login Failed')</script>";
	}

}

?>
</div>
</fieldset>

</body>
</html>
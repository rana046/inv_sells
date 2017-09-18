

<?php
include 'header.php';

session_start();
 $username=$_SESSION['username'];

if(!$_SESSION['username'])
{


	header('location:index.php');
}
else{
	?>


<body>
<div class="rows" style="display:block;>
	<div class="col-md-12">
	<?php include'header.php' ?>
		<?php include'menu2.php' ?>
	</div>
</div>
	<div class="rows" >
	
	<div class="col-md-12" style="">
	<img src="logo2.png" alt="" style="
    opacity: 0.5;margin-top:20%; width:initial;width:740.25px;margin:20% 20%;">

	</div>
</div>
	

</body>





	<?php
}
?>

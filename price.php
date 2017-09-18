<?php
include 'db_connect.php';
$query=$_POST['query'];


if($query !="")
{

$q="select * from inventory where model = '$query'";
$result=mysqli_query($conn,$q);

if(mysqli_num_rows($result))

{

while($row=mysqli_fetch_array($result))
{

 $price=$row['price'];

}

echo $price;
}
}
else
{
	
}

?>
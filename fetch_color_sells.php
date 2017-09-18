<?php
include 'db_connect.php';
$query=$_POST['query'];
//echo $query;
if($query !="")
{

$q="select DISTINCT color from inventory where model like '%".$query."%'";
$result=mysqli_query($conn,$q);

if(mysqli_num_rows($result))
{

while($row=mysqli_fetch_array($result))
{


$output .='<option>'.$row[0].'</option>';

}


echo $output;
}
}
else
{

}

?>
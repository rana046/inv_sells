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
       
          <thead style="background:#03C9A9;color:#fff"><th colspan="11" align="center" style="text-align: center;">Mobile List</th></thead>
          
          <tbody>
          <tr style="text-align: center;font-family: cursive;">
              <td> <label for="Price">No.</label></td>
              <td> <label for="Price">Brand Name</label></td>
              <td> <label for="Price">Model</label></td>
              <td> <label for="Price">Color</label></td>
            </tr>

          <?php
          $id=0;
          include'db_connect.php';
            $q="select * from mobile_brand order by brand";
            $exe=mysqli_query($conn,$q);
            while($row=mysqli_fetch_array($exe))
            {
            $id ++;
            $brand=$row['brand'];
            $model=$row['model'];
            $color=$row['color'];
            
          ?>
            <tr>
            <td> <label for="Price"><?php echo $id;  ?></label></td>
              <td> <label for="Price"><?php echo $brand;  ?></label></td>
               <td> <label for="Price"><?php echo $model;  ?></label></td>
               <td> <label for="Price"><?php echo $color;  ?></label></td>
               
               
            </tr>
           <?php  }  ?> 

          </tbody>
    
       </table>

        
      </div>
      </form>
    </div>
    
  
</div>
  </div>

  

</body>

</html>
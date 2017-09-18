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
    <?php include'menu.php' ?>
  </div>
</div>
  <div class="rows">
  <div class="col-md-4" >
  <?php include'admin_dashboard_sidebar.php' ?>
  </div>
  <!--=========START FORM========== -->
  <div class="col-md-8" style="margin-top:20px;";  box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -moz-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.6);
    -o-box-shadow: 0 0 10px rgba(0,0,0,0.6);" >
<div style="margin-right:20px;">
  <form method="post">
    
    <div class="" style="margin-right:20px;" >
    
       <!-- <div class="form-group">
          <label for="Product ID:">Product ID:</label>
          <input type="number" class="form-control" name="id">
       </div> -->
       <table class="table table-responsive table-bordered">
       
          <thead style="background:#03C9A9;color:#fff"><th colspan="11" align="center" style="text-align: center;">All Inventory List</th></thead>
          
          <tbody>
          <tr>
              
              <td> <label for="Price">Model</label></td>
              <td> <label for="Price">Price</label></td>
              <td> <label for="Price">Quantity</label></td>
              <td> <label for="Price">Seller</label></td>
              <td> <label for="Price">Payment Type</label></td>
              <td> <label for="Price">Total</label></td>
              <td> <label for="Price">Paid</label></td>
              <td> <label for="Price">Due</label></td>
              <td> <label for="Price">Date</label></td>
              <td> <label for="Price">Delete</label></td>
              <td> <label for="Price">Update</label></td>
               
              

             
             
              
            </tr>
          <?php
          include'db_connect.php';
            $q="select * from stock";
            $exe=mysqli_query($conn,$q);
            while($row=mysqli_fetch_array($exe))
            {
            $model=$row['model'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            $seller=$row['seller'];
            $payment=$row['payment_type'];
            $total=$row['total'];
            $paid=$row['paid'];
            $due=$row['due'];
            $date=$row['date'];
         

            
          ?>
            <tr>
              <td> <label for="Price"><?php echo $model;  ?></label></td>
               <td> <label for="Price"><?php echo $price;  ?></label></td>
               <td> <label for="Price"><?php echo $quantity;  ?></label></td>
               <td> <label for="Price"><?php echo $seller;  ?></label></td>
               <td> <label for="Price"><?php echo $payment;  ?></label></td>
               <td> <label for="Price"><?php echo $total;  ?></label></td>
               <td> <label for="Price"><?php echo $paid;  ?></label></td>
               <td> <label for="Price"><?php echo $due;  ?></label></td>     
               <td> <label for="Price"><?php echo $date;  ?></label></td>     
               <td><a href="" class="btn btn-danger">Delete</a> </td>
               <td><a href="" class="btn btn-info">Update</a> </td>       
               
              

             
             
              
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
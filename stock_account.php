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
       
          <thead style="background:#ea5e84;color:#fff"><th colspan="16" align="center" style="text-align: center;font-size: larger;">Stock Accounts</th></thead>
          
          <tbody style="">
          <tr style="text-align: center;font-family: cursive;color: blue;
    border-bottom: 2px solid #b5a7d6;
    
    box-shadow: inset 0px 0px 44px 2px #ad9292;">
              <td> <label for="Price">Date</label></td>
              <td> <label for="Price">Dealer Name</label></td>
              <td> <label for="Price">Mobile Brand</label></td>
              <td> <label for="Price">Model</label></td>
              <td> <label for="Price">Color</label></td>
              <td> <label for="Price">Price/Unit</label></td>
              <td> <label for="Price">Quantity</label></td>
              <td> <label for="Price">Total Amount</label></td>
              <td> <label for="Price">Payment Type</label></td>
              <td> <label for="Price">Cash Paid</label></td>
              <td> <label for="Price">T.T Paid</label></td>
              <td> <label for="Price">T.T Number</label></td>
              <td> <label for="Price">T.T Bank</label></td>
              <td> <label for="Price">T.T Date</label></td>
              <td> <label for="Price">Total Paid</label></td>
              <td> <label for="Price">Due</label></td>
              
              
            </tr>

          <?php
          
          include'db_connect.php';
            $q="select * from stock ORDER BY dealer";
            $exe=mysqli_query($conn,$q);
            while($row=mysqli_fetch_array($exe))
            {

            $date=$row['date'];
            $dealer=$row['dealer'];
            $brand=$row['brand'];
            $model=$row['model'];
            $color=$row['color'];
            $price=$row['price'];
            $quantity=$row['quantity'];
            $payment_type=$row['payment_type'];
            $cash=$row['paid'];
            $tt_amount=$row['tt_amount'];
            $tt_number=$row['tt_number'];
            $tt_bank=$row['tt_bank'];
            $tt_date=$row['tt_date'];
            $paid=$row['paid'];
            $due=$row['due'];

            $total_amount=$price*$quantity;
            $total_paid=$cash+$tt_amount;

          ?>
            <tr>
              <td> <label for="Price"><?php echo $date; ?></label></td>
              <td> <label for="Price"><?php echo $dealer;  ?></label></td>
               <td> <label for="Price"><?php echo $brand;  ?></label></td>
               <td> <label for="Price"><?php echo $model;  ?></label></td>
               <td> <label for="Price"><?php echo $color;  ?></label></td>
               <td> <label for="Price"><?php echo $price;  ?></label></td>
               <td> <label for="Price"><?php echo $quantity;  ?></label></td>
              <td> <label for="Price"><?php echo $total_amount;  ?></label></td> 
               <td> <label for="Price"><?php echo $payment_type;  ?></label></td>

               <td> <label for="Price"><?php echo $cash;  ?></label></td>
              <td> <label for="Price"><?php echo $tt_amount;  ?></label></td> 
               <td> <label for="Price"><?php echo $tt_number;  ?></label></td>
               <td> <label for="Price"><?php echo $tt_bank;  ?></label></td> 
               <td> <label for="Price"><?php echo $tt_date;  ?></label></td>

               <td> <label for="Price"><?php echo $total_paid;  ?></label></td>
               <td> <label for="Price"><?php echo $due;  ?></label></td>

            </tr>
           <?php  }  ?> 
           <!-- <tr>
           <td colspan="5" style="/* border-top:4px solid black; */text-align:right;border-bottom:;"> <label for="Price">Total=</label> </td>
           <?php
           $query="select sum(quantity),sum(total),sum(paid),sum(due) from stock";
           $q=mysqli_query($conn,$query);

           while($row=mysqli_fetch_array($q))
           {

            $total=$row[1];
            $paid=$row[2];
            $due=$row[3];
            $quantity=$row[0];

           }
           ?>
           <td> <label for="Price"><?php echo $quantity; ?></label> </td>
           <td> <label for="Price"><?php echo $total; ?></label> </td>
           <td> <label for="Price"><?php echo $paid; ?></label> </td>
           <td> <label for="Price"><?php echo $due; ?></label> </td>
          </tr> -->
          </tbody>
    
       </table>

        
      </div>
      </form>
    </div>
    
  
</div>
  </div>

  

</body>

</html>
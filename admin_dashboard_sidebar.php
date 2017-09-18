
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sidebar Menu Example</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/sidebar-menu.css">
</head>

<body style="display:block;">

  <section style="margin-right:0px">
    <ul class="sidebar-menu">
      <li class="sidebar-header">M/S EBA ENTERPRISE</li>
      <li>
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Accounts</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <!-- <li><a href="daily_account.php"><i class="fa fa-star "></i>Daily Account</a></li> -->
          
          <li><a href="stock_account.php"><i class="fa fa-star "></i>Inventory Account</a></li>

          <li><a href="selling_account.php"><i class="fa fa-star "></i>Sells Account</a></li>
          
         
          <li><a href="total_account.php"><i class="fa fa-star "></i>Total Account</a></li>
          
        
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-industry"></i>
          <span>IN HOUSE</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <li><a href="dealer.php"><i class="fa fa-plus"></i>ADD</a></li>
          <li><a href="inventory.php"><i class="fa fa-eye"></i>VIEW</a></li>
        
        </ul>
      </li>
      <li>
        <a href="sells.php">
          <i class="fa fa-money"></i> <span>Product Sell</span>
        </a>
      </li>
      <li>
        <a href="selling_history.php">
          <i class="fa fa-calendar"></i> <span>Selling History</span>
          
        </a>
      </li>
      
      <li>
        <a href="#">
          <i class="fa fa-user"></i>
          <span>Dealers</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <li><a href="add_dealer.php"><i class="fa fa-user-plus"></i>ADD</a></li>
          <li><a href="view_dealer.php"><i class="fa fa-eye"></i>VIEW</a></li>
          <li><a href="view_buyers.php"><i class="fa fa-user-times"></i>DELETE</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-users"></i>
          <span>CLIENT</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <li><a href="add_client.php"><i class="fa fa-user-plus"></i>ADD</a></li>
          <li><a href="view_client.php"><i class="fa fa-eye"></i>VIEW</a></li>
          <li><a href="#"><i class="fa fa-user-times"></i>DELETE</a></li>
        
        </ul>
      </li>

      <li>
        <a  >
          <i class="fa fa-mobile" aria-hidden="true"></i>
          <span>Mobile Brand</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="sidebar-submenu">
          <li><a href="mobile_brand.php"><i class="fa fa-plus"></i>ADD NEW</a></li>
          <li><a href="view_mobile.php"><i class="fa fa-eye"></i>VIEW LIST</a></li>
          <li><a href="#"><i class="fa fa-trash-o"></i>DELETE</a></li>
        </ul>
      </li>

      <li>
        <a href="#">
          <i class="fa fa-edit"></i> <span>Discount</span>
          
        </a>
        
      </li>
      <li>
        <a href="#">
          <i class="fa fa-table"></i> <span>profite</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Monthly Profite Gain</a></li>
          <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Monthly Profite Loss</a></li>
        </ul>
      </li>
      
      <li>
        <a href="#">
          <i class="fa fa-envelope"></i> <span>Trade Commision</span>
        
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-folder"></i> <span>Volume</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Target</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Achieve</a></li>
          
        </ul>
      </li>
      

  
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a>
      </li>
      <li><a href="index.php"><i class="fa fa-sign-out text-aqua"></i> <span>Logout</span></a>
      </li>
      
    </ul>
  </section>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/sidebar-menu.js"></script>
  <script>
    $.sidebarMenu($('.sidebar-menu'))
  </script>
</body>

</html>

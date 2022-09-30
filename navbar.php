<!-- Required dbhelper -->
<?php require_once('dbhelper.php'); ?>

<!-- require navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light cyrus-nav">
  <a class="navbar-brand" href="index.php">Home</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="Menupage.php">&#127857 Menu &#127857</a></li>
      <li class="nav-item"><a class="nav-link" href="Reviews.php">Reviews</a></li>


      
        <?php if(!isset($_SESSION['username']) AND !isset($_SESSION['accessLevel'])) { ?>
          <li class="dropbtn"><a class="nav-link" href="Register2.php">Sign Up</a></li>

          <ul class="navbar-nav ml-auto">
          <div class="dropdown">
           <button class="btn cancel">Login</button>
           <div class="dropdown-content">
            <a class = "dropdown-link" href="Login_Customer.php">Customer Login</a> 
            <a class = "dropdown-link" href="Login_Staff.php">Staff Login</a>
            </div>
          </div>
          
        </div>

      <?php } ?>

		<!-- First, check if the type is set & is a student -->
      <?php if(isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 1) { ?>
        <li class="nav-item">
          <a class="nav-link" href="CustomerPast.php">My Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Cartpage.php">My Cart</a>
        </li>
        <li class="nav-item">
          <a class="btn cancel" href="logout.php">Logout</a>
        </li>

        <!-- Then, check if the type is set & is an Employee -->
      <?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 2) { ?>
        <li class="nav-item">
          <a class="nav-link" href="OrderinProcess.php">Employee Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="directory.php">Order Directory</a>
        </li>
        <li class="nav-item">
          <a class="btn cancel" href="logout.php">Logout</a>
        </li>

        <!-- Then, check if the type is set & is a manager -->
      <?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 3) { ?>
        <li class="nav-item">
          <a class="nav-link" href="Inventory.php">Manager Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Analytics.php">Analytics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="directory.php">Order Directory</a>
      	</li>
      	<li class="nav-item">
          <a class="nav-link" href="OrderinProcess.php">Edit Order Status</a>
        </li>
          <li class="nav-item">
            <a class="btn cancel" href="logout.php">Logout</a>
          </li>

</ul>

      <?php } ?>


<!-- this part is for easier access without login
      <div class="dropdown">
       <button class="dropbtn">CustomerAccessPage
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a class = "dropdown-link" href="CustomerPast.php">Your Orders</a> 
      </div>
    </div>

    <div class="dropdown">
     <button class="dropbtn">ManagerAccessPage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class = "dropdown-link" href="Inventory.php">Control Inventory</a> 
      <br>
      <a class = "dropdown-link" href="CustomerOrder.php">Customer Orders</a>
      <br>
      <a class = "dropdown-link" href="OrderinProcess.php">Edit Orders Status</a>
      <br>
      <a class = "dropdown-link" href="directory.php">Directory</a>
    </div>
  </div>

  <div class="dropdown">
     <button class="dropbtn">EmployeeAccessPage
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a class = "dropdown-link" href="CustomerOrder.php">Customer Orders</a>
      <br>
      <a class = "dropdown-link" href="OrderinProcess.php">Edit Orders Status</a>
      <br>
      <a class = "dropdown-link" href="directory.php">Directory</a>
    </div>
  </div>
-->

</ul>
</div>

<!-- right side navbar -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
</div>
<img src="logo.png" width=100/>
  </ul>

</nav>

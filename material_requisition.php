<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #4487f2;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #071224;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #dff7ef;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
 <!--  <a href="#home">HR & Admin</a> -->

  <div class="dropdown">
    <button class="dropbtn">HR, Admin & CSR
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="create_material_requisition.php">Create Material Requisition</a>
      <a href="create_material_requisition_Report.php">Report</a> 
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Planning & Business Development
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="create_material_requisition.php">Create Material Requisition</a>
      <a href="create_material_requisition_Report.php">Report</a>
    </div>
  </div> 
<!-- 
  <a href="#home">Accounts & Finance</a> -->


   <div class="dropdown">
    <button class="dropbtn">Accounts & Finance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="create_material_requisition.php">Create Material Requisition</a>
      <a href="create_material_requisition_Report.php">Report</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Operations
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="create_material_requisition.php">Create Material Requisition</a>
      <a href="create_material_requisition_Report.php">Report</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Warehouse & Procurement
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Create Store Requisition</a>
      <a href="#">Inward Material Requisition</a>
      <a href="#">Purchase Requisition</a>
      <a href="#">Quotation Analysis</a>
      <a href="#">Purchase Order</a>
      <a href="#">Material Receiving Report</a>



    </div>
  </div> 
</div>

<div class="container" style="position: relative;text-align: center;color: white;">
 
      <div class="item active">
        <!-- <img src="img/logo.jpg" alt="pic" style="width:auto;"> -->
        <img src="img/pic1-1.jpg" alt="pic" style="width:100%;">

       <!--  <div class="centered" style="position: absolute;top: 40%;left: 60%;
  transform: translate(-50%, -50%);font-size: 40px;font-family: cursive;">Inventory Management System</div> -->
      </div>

</div> 



</body>
</html>

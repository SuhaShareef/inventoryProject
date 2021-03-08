<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset = "utf-8" >
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  
</head>

<body>

 <!--  <div class="container">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">About</a></li>
      <li><a href="login.html">Log In</a></li>
      <li class="active"><a href="signup.html">Sign Up</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>
</div> -->
   <div class="container">
    <div class="jumbotron">
      
   <h2>Create Material Requisition</h2>
   <form align='center'>
   	<div class="form-group">
   		<label for="name">Project Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Project Name" name="name">
       </div>
       <div class="form-group">
          <!-- <label for="contact">Contact:</label> -->
          <!-- <input type="text" class="form-control" id="contact" placeholder="Enter Contact" name="contact"> -->
         
       <fieldset>
         <!--  <legend>Selecting elements</legend> -->
          <p>
             <label>Location</label>
             <select id = "myLocation">
               <option value = "1">Dhaka</option>
               <option value = "2">Sylhet</option>
               <option value = "3">Rangpur</option>
               <option value = "4">Rajshahi</option>
             </select>
          </p>
       </fieldset>
    
        </div>
   		
   		<div class="form-group">

       
       <fieldset>
         <!--  <legend>Selecting elements</legend> -->
          <p>
             <label>Department</label>
             <select id = "dept">
               <option value = "1">HR & Admin</option>
               <option value = "2">Accounts & Finance </option>
               <option value = "3">Engineering</option>
               <option value = "4">IT</option>
             </select>
          </p>
       </fieldset>
   
   			<!-- <label for="email">Email:</label> -->
   			<!-- <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"> -->
      </div>
   			<div class="form-group">
   				<label for="ddate">Due Date:</label>
   				<input type="date" class="form-control" id="ddate"  name="ddate">

   			</div>

        <div class="form-group">
          <label for="ides">Items Description:</label>
          <textarea name="ides"  id="ides" class="form-control"></textarea>

        </div>

        <div class="form-group">
          <label for="ddate">Specification</label>
          <textarea name="speci"  id="speci" class="form-control"></textarea>

        </div>

          <div class="form-group">
      <label for="name">Unit:</label>
      <input type="text" class="form-control" id="unit" placeholder="Enter Unit" name="unit">
       </div>

        <div class="form-group">
      <label for="qty">Quantity:</label>
      <input type="text" class="form-control" id="qty" placeholder="Enter Quantity" name="qty">
       </div>

       <fieldset>
         <!--  <legend>Selecting elements</legend> -->
          <p>
             <label>Purchase Type:</label>
             <select id = "ptype">
               <option value = "1">Pay</option>
               <option value = "2">Pay</option>
               <option value = "3">Pay</option>
               <option value = "4">Pay</option>
             </select>
          </p>
       </fieldset>

        <div class="form-group">
          <label for="rem">Remarks:</label>
          <textarea name="rem"  id="rem" class="form-control"></textarea>

        </div>




   			<button type="submit" class="btn btn-primary">Submit</button>
   		</form>
    </div>
  </div>

  
</body>
<html>

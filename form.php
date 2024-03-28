<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="./login.css"> 
    

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
	
		<form method="post" action="new.php">
		<div class="navbar">
      <img  id="img1" src="logo1.jpg"> 
      
      <ul class="navItems">
      
      <li><a class="nav-link1" href="Add.html">Add</a></li>
        <li><a class="nav-link2" href="Edit.html">Edit</a></li>
        <li><a class="nav-link3" href="Delete.html">Delete</a></li>
        <li><a class="nav-link4" href="Display.html">Display</a></li>
      </ul>
      <div style="display: flex; width: 10%; justify-content: end;">
      <img id="img2" src="logo2.jpeg">
    </div>
  </div>
     
    <section>
      
        <div class="container">

          <form id="myForm">

            <div class=" step step-1 active" id="formCont">

              <div class="form-group" id="Name">
                <label for="Name" id="nameLab">Name</label>
                <input type="text" id="Name" name="Name">
              </div>
              <div class="form-group">
                <label for="IPAddress">IPAddress</label>
                <div class="form-group" id="IPAddress">
                
                <input type="text" id="IPAddress" name="IPAddress">
              </div>
              </div>
              <div class="form-group">
                <label for="phone">Foundation number</label>
                <input type="text" id="Foundationnumber" name="Foundationnumber">
              </div>
              <div class="form-group">
                <label for="email">Date</label>
                <input type="date" id="Date" name="Date">
              </div>


              <div class="form-group">
                <label for="Phonenumber">Phone Number</label>
                <input type="tel" id="Phonenumber"  name="Phonenumber" > <br> <br>
              </div>

     
              

              <div class="form-group">
                <label for="Timein">Timein</label>
                <!-- <input type="time" id="Time in"  value="16:00:00"> -->
                <input type="time" id="Timein"name="Timein" onfocusout="myFunction()">
              </div>

              <div class="form-group" id="timeOut">
                <label for="Timein">Time Out</label>
                <input type="time" id="Timeout" name="Timeout" >
              </div>
              <div class="btn">
                <button type="reset" class="clear-btn">Clear</button>
              </div>
              
              <div class="btn">
                <button type="submit" class="submit-btn">Submit</button>
                
              </div>
              

            </div>
          </form>
        </div>
    </section>
    

</body>
   
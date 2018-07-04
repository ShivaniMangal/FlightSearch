<?php 
  
  // connecting databases
  $connect = mysqli_connect("localhost","root","","airlinebooking") or die(mysqli_error($connect));

  // insert query
 ?>














<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Confirmation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  .form_edit{
    width: 900px;
    margin: auto;
  }  
 </style>
</head>
<body>
<div class="container form_edit" >
  <h2>Fill Details:</h2>
  <form action="confirm.php">
    <div class="form-group">
      <label>FirstName:</label>
      <input type="name" class="form-control"  placeholder="First Name" name="firstname">
    </div>
    <div class="form-group">
      <label>LastName:</label>
      <input type="name" class="form-control"  placeholder="Last Name" name="lastname">
    </div>
      <div class="form-group">
      <label>Gender:</label>
      <label class="radio-inline"><input type="radio" name="optradio">Male</label>
       <label class="radio-inline"><input type="radio" name="optradio">Female</label>
    </div>
    
    <div class="form-group">
      <label>Source:</label>
      <input type="name" class="form-control"  placeholder="Last Name" name="lastname" >
    </div>

    <div class="form-group">
      <label>Destination:</label>
      <input type="name" class="form-control"  placeholder="Last Name" name="lastname" >
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>


</body>
</html>
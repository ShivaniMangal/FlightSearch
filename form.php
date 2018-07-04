<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<header>
  <style>
ul {
    list-style-type: none;
    margin: 20;
    padding: 10px ;
  
}
li {
    float: centre;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding-top: 150px ;
    text-decoration: none;
}
.navbar{
  margin-bottom:0;
}
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   <!--   <a class="navbar-brand" href="./home.php"><h4 style="color:#DC143C;text-align:center;border: 4px green;padding: 5px;">NoveLover's Utopia</h4></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./home.php">Home</a></li>
        <li><a href="./profile.php"></a></li>
      </ul>
   <!--   <ul class="nav navbar-nav navbar-right">
        <li><a href="./login_basic_font.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
      </ul>
    -->
    </div>
  </div>
</nav> 
  </header>

    
    
 <style>
   .carousel-inner > .item > img{
       width:100%;
       height:360px;
     }
     </style>
     


    <div class="container">
      <div class="carousel slide" data-ride="carousel" id="carouselex">
        <ol class="carousel-indicators">
          <li data-target="#carouselex" data-slide-to="0" class="active"></li>
          <li data-target="#carouselex" data-slide-to="1"></li>
          <li data-target="#carouselex" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="./imgs/sunset.jpg" alt="image">
            </div>
          <div class="item">
            <img src="./imgs/airplane.jpg" alt="image">
          </div>
          <div class="item">
            <img src="./bootstrap_imgs/lib2.jpg" alt="image">
          </div>
          <a href="#carouselex" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#carouselex" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    
<br>
<br>
<br>
<form method="post" action="flights.php" target="_blank">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="From">From</label>
      <input type="text" class="form-control" id="From" placeholder="From" name = "Source"  required="true">
    </div>

    <div class="form-group col-md-6">
      <label for="To">To</label>
      <input type="text" class="form-control" id="To" placeholder="To" name ="Destination" required="true" >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DepartureDate">Departure Date</label>
      <input type="Date" class="form-control" id="DepartureDate" name="Date">
    </div>
    <div class="form-group col-md-1">
      <label for="inputState">No. of Passengers</label>
      <select id="inputState" class="form-control" name="no_of_passengers">
        <option selected>1</option>
         <option>2</option>
          <option>3</option>
           <option>4</option>
            <option>5</option>
             <option>6</option>
              <option>7</option>
               <option>8</option>
                <option>9</option>
      </select>
    </div>
  </div>

  <div>     
    <button type="submit" class="btn btn-success">Check for Flights</button>
  </div>
</form>
</body>
</html>

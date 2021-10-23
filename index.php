<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="plant.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Plants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="buy1.php">Buying</a>
          <a class="dropdown-item" href="buy2.php">Selling</a>
        </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="seed.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          seeds
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="buy2.php">Buying</a>
          <a class="dropdown-item" href="sell2.php">Selling</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="signup.php">sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="signup.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="signup.php">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/3pic.jpg" alt="Los Angeles" width="1550" height="700">
      <div class="carousel-caption">
        <h3>SEEDS</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/flower.jpg" alt="Chicago" width="1550" height="700">
      <div class="carousel-caption">
        <h3>FLOWERS</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/save tree.jpg" alt="New York" width="1550" height="700">
      <div class="carousel-caption">
        <h3>TREES</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us</h2>
 </div>
<div class="container-fluid">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="img/sell.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
    <img src="img/seeds.jpg" class="img-fluid">
</div>
<div>
  <p>
    <h1>Website for selling plants</h1>
  Ever since industrialization started the care for plants has made it to our least priority
list, Even though mankind requires plants to balance the food chain that he’s a part of,
but the plant enthusiasts are everywhere, be it big metropolitan cities or rural areas, so
we aim to bring in a platform that can connect these plant/nature enthusiasts and help
them exchange/sell them plants or donate seeds/plants as part of the green initiative
that we started 2 years back
</p>
</div>
</div>
</div>




</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
 </div>
 <div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
       <lable>Username</lable>
       <input type="text" name="user" autocomplete="off" class="form-control">

</div>
<div class="form-group">
       <lable>Email </lable>
       <input type="text" name="email" autocomplete="off" class="form-control">

</div>
<div class="form-group">
       <lable>mobile</lable>
       <input type="text" name="mobile" autocomplete="off" class="form-control">

</div>
<div class="form-group">
       <lable>Comments</lable>
       <textarea class="form-control" name="comments">
</textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</form>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@GreeneryDreamtime.com</p>


</footer>
  
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>








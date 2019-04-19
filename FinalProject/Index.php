<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet"> 
  </head>
  <body style="background-color: #7286a5">
 
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Bidiji</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/FinalProject/register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/FinalProject/postAnnounce.php">Post an Add</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#">French</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">English</a>
      </li> 
    </ul>
  </div> 
</nav>


<div><br/></div>
<div class="index-Announces">

<!-- Paid Announces -->
<div class="card-deck">
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item1</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item2</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px" >
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item3</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item4</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
 
</div>
<br/>
</div>

 <a  href=""> <font color="#edf2f1"> Click here to see more items</font></a>
 </div> <!-- end of payed Announces content -->


<div class="searchNavBar" >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div>
        <select class="form-control">
          <option selected=""> Search For:</option>
          <option>Product</option>
          <option>Category</option>
          <option>Sub-Category</option>
        </select>
      </div>
    &nbsp &nbsp
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-info btn-sm" type="submit">Search</button>
      &nbsp
      <button class="btn btn-light btn-sm" type="reset">Reset</button>     
      </form>

    
  </nav>
</div>

<br/>


<div class="index-Announces">
<!-- Free Announces -->
<div class="card-deck">
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item1</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item2</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px" >
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item3</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
</div>
<div class="card" style="width:400px">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Item4</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Announce</a>
  </div>
 
</div>
<br/>
</div>
</div> <!-- end of free Announces content -->
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
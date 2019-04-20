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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body> 
      <body style="background-color: #7286a5">
 
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/Bidiji/FinalProject/login.php">LogIn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Bidiji/FinalProject/postAnnounce.php">Post Ad</a>
      </li>    
    </ul>
  </div>
  <a class="navbar-brand mx-auto" href="#">Bidiji</a>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown dmenu">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Language
            </a>
            <div class="dropdown-menu sm-menu">
              <a class="dropdown-item" href="#">English</a>
              <a class="dropdown-item" href="#">French</a>
            </div>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
    </div>
</nav>
      
      <br/>
      
      <!-- Main Content -->
      
      <div class="container">   
       
	<div class="card bg-light">
        <article class="card-body mx-auto" >
            <h4 class="card-title mt-3 text-center">Create Announce</h4>
            <p class="text-center">Please enter the following information to continue:</p>
          <form>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-shopping-bag"></i> </span>
                 </div>
                <input name="" class="form-control" placeholder="Title/Name of the article" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clipboard"></i> </span>
                 </div>
               <select class="form-control">
                  <option selected=""> Select Category</option>                  
              </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clipboard-list"></i> </span>
                 </div>
               <select class="form-control">
                  <option selected=""> Select SubCategory</option>                  
              </select>
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-money-bill"></i> </span>
                 </div>
                <input name="" class="form-control" placeholder="Price" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-plus"></i> </span>
                </div>               
                <input name="" class="form-control" placeholder="Quantity" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-pen"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="Description" type="text">
            </div> <!-- form-group end.// -->          
            
            <div>
              <button class="btn btn-secondary">Add Photos</button>
              <button class="btn btn-primary">Submit Announce</button>
            </div>
        </form>
        </article>
        </div> <!-- card.// -->
        
        </div> 
        <!--container end.//-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
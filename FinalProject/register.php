<?php ?>
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
    <!-- Custom styles for this template -->
    <link href="register.css" rel="stylesheet">

</head>
  <body style="background-color: #7286a5">

      <!-- NavBar -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="/Bidiji/FinalProject/index.php">Bidiji</a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/Bidiji/FinalProject/register.php">Register</a>
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

    <div class="container">   

	<div class="card bg-light">
        <article class="card-body mx-auto" >
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get started with your free account</p>
           
            <form method="post" action="register_post.php" >
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                <input name="userName" id="userName"class="form-control" placeholder="Full name" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                 </div>
                <input name="userEmail" id="userEmail"class="form-control" placeholder="Email address" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>          
                 <input name="userAddress" id="userAddress"class="form-control" placeholder="Address" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-city"></i> </span>
                </div>          
                 <input name="userCity" id="userCity"class="form-control" placeholder="City" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-map-marked-alt"></i> </span>
                </div>          
                 <input name="userState" id="userState"class="form-control" placeholder="State" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                 <input name="userPhone" id="userPhone"class="form-control" placeholder="Phone number" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
                </div>
                <select class="form-control" name="userType" id="userType">
                    <option selected=""> Select user type</option>
                    <option>Administrator</option>
                    <option>Employee</option>
                    <option>Member</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Create password" type="password" name="userPass" id="userPass">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Repeat password" type="password" name="userPassRep" id="userPassRep">
            </div> <!-- form-group// -->                                      
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="btnSubmit" id="btnSubmit"> Create Account</button>
            </div> <!-- form-group// -->      
            <p class="text-center">Have an account? <a href="login.php">Log In</a> </p>                                                                 
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
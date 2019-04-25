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
    
    <!-- Custom styles for this template -->
    <link href="postAnnounce.css" rel="stylesheet">   
  </head>

  <body> 
      <body style="background-color: #7286a5">
 
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/Bidiji/FinalProject/index.php">Home</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/Bidiji/FinalProject/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Bidiji/FinalProject/postAnnounce.php">Post Ad</a>
      </li>    
    </ul>
  </div>
  <a class="navbar-brand mx-auto" href="/Bidiji/FinalProject/index.php">Bidiji</a>
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
                <a class="nav-link" href="#">User</a>
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
                <input name="adTitle" id="adTitle" class="form-control" placeholder="Title/Name of the article" type="text">
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clipboard"></i> </span>
                 </div>
               <select class="form-control" name="adCategory" id="adCategory">
                  <option selected=""> Select Category</option>                  
              </select>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-clipboard-list"></i> </span>
                 </div>
               <select class="form-control" name="adSubcategory" id="adSubcategory">
                  <option selected=""> Select SubCategory</option>                  
              </select>
            </div> <!-- form-group// -->

            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-money-bill"></i> </span>
                 </div>
                <input name="adPrice" id="adPrice" class="form-control" placeholder="Price" type="number" min="0.00">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-plus"></i> </span>
                </div>               
                <input name="adQuantity" id="adQuantity" class="form-control" placeholder="Quantity" type="number">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-pen"></i> </span>
                </div>
                <input name="adDescription" id="adDescription" class="form-control" placeholder="Description" type="text">
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-calendar"></i> </span>
                </div>
                    <input type="text" class="form-control datetimepicker-input" id="datetimepicker5" name="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5" placeholder="Select Ad date limit"/>
            </div> <!-- form-group end.// -->


            <div class="form-group input-group">  <!-- Insert Images from File -->
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-camera"></i> </span>
                </div>               
                <input name="adImage" id="adImage" class="form-control" placeholder="" type="file" >
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button" id="btnSubmitImage" name="btnSubmitImage">Add Image</button>
                  </div>
            </div> <br>


            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0"></legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Paid Ad
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">                        
                        Free Ad (10 days expiration)
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset><!-- form-group end.// -->


            <br>
            <div id="divSubmitAd">
              <button id="btnSubmitAdAnnounce" name="btnSubmitAdAnnounce" class="btn btn-primary" >Submit Announce</button>
            </div>

        </form>
        </article>
        </div> <!-- card.// -->       
        </div>
        <!--container end.//-->

    <br>     
    <div class="container"  id="divFormPictures" style="display: none">         
      <div class="card bg-light">
        <article class="card-body mx-auto" >
            <h4 class="card-title mt-3 text-center">Announce Pictures</h4>
            <form name="formPictures" id="formPictures">
<!--               <img class="picture" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
              <img class="picture" src="http://c2.staticflickr.com/8/7218/7209301894_c99d3a33c2_h.jpg">
              <img class="picture" src="http://c2.staticflickr.com/8/7231/6947093326_df216540ff_b.jpg">
              <img class="picture" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
              <img class="picture" src="http://c2.staticflickr.com/8/7218/7209301894_c99d3a33c2_h.jpg">
              <img class="picture" src="http://c2.staticflickr.com/8/7231/6947093326_df216540ff_b.jpg"> -->
              </form>
          </article>
        </div> <!-- card.// -->     
      </div>
      <!--container end.//-->


      <?php include("footer.php")?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />


  </body>
</html>

<script>
  function myFunction(){
    alert("teste");
  }

  document.addEventListener('DOMContentLoaded', function() {
    if ($('.picture').length > 0) {
        $("#divFormPictures").show();
    } 
  }, false);

</script>




<style>
img	{
	width: 30%;
	float: left;
  margin: 1.66%;
}

#divSubmitAd{
  width: 100%;
  display: flex;
  justify-content: center;
  text-align: center;
}
</style>



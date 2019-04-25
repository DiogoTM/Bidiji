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
        <a class="nav-link" href="/Bidiji/FinalProject/postAnnounce.php?id=0">Post Ad</a>
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



<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bidiji</h1>
    <p class="lead">Either Buying or Selling, use it at your own risk. </p>
  </div>
</div>

<br>
<!--   Carousel  -->
<!-- Top content -->
<div class="top-content">
    <div class="container-fluid">
        <p  href=""> <font color="#edf2f1"> Premium ads</font></p>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                        <img src="assets/img/backgrounds/1.jpg" class="img-fluid mx-auto d-block" alt="img1" onclick="carouselClick();">
                        </a>
                      <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>            
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/2.jpg" class="img-fluid mx-auto d-block" alt="img2" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/3.jpg" class="img-fluid mx-auto d-block" alt="img3" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/4.jpg" class="img-fluid mx-auto d-block" alt="img4" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/5.jpg" class="img-fluid mx-auto d-block" alt="img5" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/6.jpg" class="img-fluid mx-auto d-block" alt="img6" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/7.jpg" class="img-fluid mx-auto d-block" alt="img7" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <figcaption name="premAdTitle" class="premAdTitle">Produto</figcaption>
                      <a href="#" class="carousel-img-link">
                    <img src="assets/img/backgrounds/8.jpg" class="img-fluid mx-auto d-block" alt="img8" onclick="carouselClick();">
                        </a>
                    <figcaption name="premAdPrice" class="premAdPrice">Preço</figcaption>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<br><br>


<!--   Search Bar  -->
<div class="searchNavBar" >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <form class="form-inline" action="/action_page.php">
    <div>
        <select class="form-control">
          <option selected=""> Criteria:</option>
          <option>Product</option>
          <option>Category</option>
          <option>Sub-Category</option>
        </select>
      </div>
    &nbsp &nbsp

      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-info btn-sm" type="submit"">Search</button>
      &nbsp
      <button class="btn btn-light btn-sm" type="reset">Reset</button>     
      </form> 
  </nav>
</div>

<br/><br/>


<!-- Free Announces -->
<div class="index-Announces">
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
</div><br> <!-- end of free Announces content -->
      


<!-- Free Announces -->
<div class="index-Announces">
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

<br>


<br><br><br>
<?php include('footer.php'); ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



<script>
/*
    Carousel
*/
$('#carousel-example').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

window.onload = function(){
    var allLinks = document.getElementsByClassName("btn btn-primary");
    for(var i=0;i<allLinks.length;i++)
    {
        var currentLink = allLinks[i];
        currentLink.setAttribute("href","/Bidiji/FinalProject/showProduct.php");
    }
}

function carouselClick(){
  location.href = "/Bidiji/FinalProject/showProduct.php";
}

  function myFunction(){
    alert("teste");
  }

</script>


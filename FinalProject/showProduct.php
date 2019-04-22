<?php
include_once 'dbConfig.php';

?>

<!doctype html>
<html lang="en">
<head>


<title>Title</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">


<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Custom styles for this template -->
<link href="showProduct.css" rel="stylesheet">

</head>

<body style="background-color: #7286a5">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	<!-- Brand -->
	<a class="navbar-brand" href="/Bidiji/FinalProject/index.php">Home</a>

	<!-- Toggler/collapsibe Button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- Navbar links -->
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link"
				href="/Bidiji/FinalProject/login.php">Login</a></li>
			<li class="nav-item"><a class="nav-link"
				href="/Bidiji/FinalProject/postAnnounce.php">Post Ad</a></li>
		</ul>
	</div>
	<a class="navbar-brand mx-auto" href="/Bidiji/FinalProject/index.php">Bidiji</a>
	<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown dmenu"><a
				class="nav-link dropdown-toggle" href="#" id="navbardrop"
				data-toggle="dropdown"> Language </a>
				<div class="dropdown-menu sm-menu">
					<a class="dropdown-item" href="#">English</a> <a
						class="dropdown-item" href="#">French</a>
				</div></li>
			<li class="nav-item"><a class="nav-link" href="#">User</a></li>
		</ul>
	</div>
</nav>
<br />

<!-- Main Content -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">
              <a href="#" class="btn btn-link">Back to the list</a>

              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Man</a></li>
                <li class="breadcrumb-item"><a href="#">Clothes</a></li>
                <li class="breadcrumb-item active" aria-current="page">T-Shirts</li>
              </ol>

              <div class="btn-group">
                <a href="#" class="btn btn-link btn-share">Share</a>
                <a href="#" class="btn btn-link">Sell item like this</a>
              </div>
            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-thumbnails">
                  <ol class="thumbnails-list list-unstyled">
                    <li><img src="https://via.placeholder.com/350x350/ffcf5b" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/f16a22" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/d3ffce" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/7937fc" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/930000" alt=""></li>
                  </ol>
                </div>
                <div class="product-gallery-featured">
                  <img src="https://via.placeholder.com/350x350/ffcf5b" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                
                <div class="product-description mb-5">
                  <h2 class="mb-5">Description</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas
                    necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda
                    ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto,
                    perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!</p>
                </div>

              </div>
            </div>
            <div class="product-payment-details">
              <p class="last-sold text-muted"><small><span>5</span> items sold</small></p>
              <h4 class="product-title mb-2">T-shirt Nickony - XXL Black and White - 100% cotton - Limited Stock</h4>
              <h2 class="product-price display-4" style="float:left; padding-right:10%;">$ 25.00</h2>
              <p class="text-success"><i class="fa fa-credit-card" style="padding-top:2%"></i> 12x or  5x $ 5.00</p>
              <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
              <div class="text-muted mb-2"><small>Consult delivery options</small></div>
              <label for="quant">Quantity</label>
              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
              <button class="btn btn-primary btn-lg btn-block" onclick="confirmation()";>Buy Now</button>           
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>



<?php include("footer.php") ?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>

<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
</body>
</html>


<script type="text/javascript">
// select all thumbnails
const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
// select featured
const galleryFeatured = document.querySelector(".product-gallery-featured img");

// loop all items
galleryThumbnail.forEach((item) => {
  item.addEventListener("mouseover", function () {
    let image = item.children[0].src;
    galleryFeatured.src = image;
  });
});

// show popover
$(".main-questions").popover('show');


function confirmation(){
swal({
  title: "Are you sure?",
  text: "The item cannot be reimbursed",
  icon: "warning",
  buttons: true,
  dangerMode: false,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Nice, your item will be delivered soon, enjoy it!", {
      icon: "success",
    });
  } else {
    swal("Ok, maybe next time.");
  }
});
}
</script>
<?php 

include_once 'dbConfig.php';
include_once 'class.ad.php';
include_once 'class.freeAd.php';
include_once 'class.paidad.php';

session_start();

$counter = 0;

try {
    
    $stmt = $connectionId->prepare("SELECT * FROM article");
    $stmt->execute(array());
    
    if ($stmt->rowCount() > 0) {        
        if ($count<5) {
            echo "<div class='index-Announces'>
                    <div class='card-deck'> " ;
            foreach ($stmt as $value) {
                $count++;
                echo "<div class='card' style='width:400px'>
                      <img class='card-img-top' src='img_avatar1.png' alt='Card image'>
                      <div class='card-body'>
                        <h4 class='card-title'>".$value['name']."</h4>
                        <p class='card-text'>".$value['description']."</p>                            
                        <a href='#' class='btn btn-primary'>See Announce</a></div></div>";
            }
            echo "<br/>
                </div>
                </div>";
            if ($count >=5  && $count <9) {
                echo "<div class='index-Announces'>
                    <div class='card-deck'> " ;
                foreach ($stmt as $value) {
                    $count++;
                    echo "<div class='card' style='width:400px'>
                      <img class='card-img-top' src='img_avatar1.png' alt='Card image'>
                      <div class='card-body'>
                        <h4 class='card-title'>".$value['name']."</h4>
                        <p class='card-text'>".$value['description']."</p>
                        <a href='#' class='btn btn-primary'>See Announce</a></div></div>";}
                echo "<br/>
                </div>
                </div>";
        }
        }
       
       }
    echo "not nice job dude";
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>




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
</div>
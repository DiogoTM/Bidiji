  <?php

  include('dbConfig.php');
 
  
 
  if(isset($_POST["category_id"])){
      
      try {
          $stmt = $connectionId->prepare("SELECT * FROM subcategory WHERE categoryId = " .$_POST['country_id']);
          $stmt->execute(array());
          
          if ($stmt->rowCount() > 0) {
              
              foreach ($stmt as $value) {
                  echo "<option value ='" . $value['subcategoryId'] . "'>" . $value['nameENG'] . "</option>";
              }
          }
          echo "not nice job dude";
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
      
  }  
                        ?>   
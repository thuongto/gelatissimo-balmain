<?php
include('autoloader.php');

$products_obj = new Products();
$products = $products_obj -> getProducts();
$total_items = $products_obj -> total_products;

$page_title = "Home page";
?>
<!doctype html>
<html>
  <head>
    <?php include("includes/head.php"); ?>
  </head>
    <body>
      <?php include("includes/navbar.php"); ?>
      <?php include("includes/banner.php"); ?>
      <?php include("includes/products.php"); ?>
      
      
     
      
      
      <?php include("includes/content.php"); ?>
      <?php include("includes/gelato.php"); ?>
      
      <div id="flavour" class="container">
        <!-- Project Section -->
      <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Flavours</h3>
      </div>
        <?php
          echo "<div class=\"row\">
                <div class=\"col navbar\">
                  <p class=\"navbar-text\">Total of $total_items flavours</p>
                </div>
              </div>";
          if( count($products) > 0 ){
            $col_counter = 0;
            foreach( $products as $product ){
              $col_counter++;
              if( $col_counter == 1 ){
                echo "<div class=\"row\">";
              }
              //print out columns
              $id = $product["id"];
              $name = $product["name"];
              $price = $product["price"];
              $image = $product["image"];
              
              echo "<div class=\"col-sm-3 product-column\">";
              echo "<div class=\"card\">";
              
              echo "<img class=\"product-thumbnail img-fluid\" src=\"images/products/$image\" style=\"width:100%\">";
              echo "<br /><h5 class=\"product-name\">$name</h5>";
              echo "
              <p style=\"margin:0;\"></p>
              </div><p></p></div>";
    
              if($counter == 4){
                echo "</div>";
                $col_counter = 0;
              }
            }
          }
        ?>
      </div>
      <hr>
      </div>
    <?php include("includes/specification.php"); ?>  
    <?php include("includes/about.php"); ?> 
    <?php include("includes/contact.php"); ?> 
    <?php include("includes/footer.php"); ?> 
    </body>
    
</html>
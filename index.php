<!DOCTYPE html>
<html>
<title>A-EAZI Thrift Source</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>

<body class="w3-content" style="max-width:1200px">



    
    
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
 
    <div class="w3-container w3-display-container w3-padding-16">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
        <h3 class="w3-wide"><b>A-EAZI <br>Thrift<br> Source</b></h3>
    </div>
    
    <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
        <a href="#" class="w3-bar-item w3-button">Shirts</a>
        <a href="#" class="w3-bar-item w3-button">Dresses</a>
        <a href="#" class="w3-bar-item w3-button">Jackets</a>
        <a href="#" class="w3-bar-item w3-button">Gymwear</a>
        <a href="#" class="w3-bar-item w3-button">Blazers</a>
        <a href="#" class="w3-bar-item w3-button">Shoes</a>
   </div>
    
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>


<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">A-EAZI</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Jeans</p>
    <p class="w3-right">
      <a href="#jeans" class="fa fa-shopping-cart w3-margin-right"></a> 
      <a href="#jeans" class="fa fa-search"></a>
    </p>
  </header>

   <?php
        // DB name = shop_store, DB-tabel-name=products
        $db = mysqli_connect("localhost", "root", "", "shop_store" );
        $sql = "SELECT count(*) FROM products";
        $result = mysqli_query($db ,$sql);
        
      
        $row_count =  mysqli_fetch_array($result);

         echo '<div class="w3-container w3-text-grey" id="jeans">';
         echo '<p>'.$row_count[0].'</p>';
         echo ' </div>';

        $result = mysqli_query($db , "SELECT * FROM products " );

         /*echo "<pre>";
         print_r($result);*/
        $buynow= "Buy Now";
        
         while($row = mysqli_fetch_assoc($result)){
                $buynow = "Buy Now";
               // echo '<div class ="w3-row w3-grayscale">';
                echo '<div class ="w3-col l3 s4">';
                
                echo '<div class="w3-container">';
                echo '<img src="images/jeans1.jpg" style="width:100%">';
                
                echo '<div class="w3-display-middle w3-display-hover">';
                echo '<button class="w3-button w3-black">'.$buynow. '<i class="fa fa-shopping-cart"></i></button>';
                echo '</div>';
                
                echo '<p><h4><center>'.$row['name'].'</center></h4><br><b><center> $'.$row['price'].'</center></b></p>';
                echo '</div>';
                
                echo ' </div>';
               // echo '</div>';
            }

  ?>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>

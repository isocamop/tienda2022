<?php 
// Include the database connection file 
require_once 'dbConnect.php'; 
 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Fetch products from the database 
$sqlQ = "SELECT * FROM products"; 
$stmt = $db->prepare($sqlQ); 
$stmt->execute(); 
$result = $stmt->get_result(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>IMPRESORAS-3D | TAKANATECH</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style_index.css">

<!-- Bootstrap core CSS -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>

<header id="main-header">
		
		<a id="logo-header" href="index.php">
			<span class="site-name">TAKANATECH</span>
			 <span class="site-desc">Tecnologia para crear ideas</span> 
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href="impresoras_P.php">IMPRESORAS</a></li>
				<li><a href="filamentos_P.php">FILAMENTOS</a></li>
				<li><a href="resinas_P.php">RESINAS</a></li>
                <li><a href="contactos_P.php">CONTACTANOS</a></li>
			</ul>
		</nav><!-- / nav -->
        <a title="Carrito" href="carrito.php"><img src="imagen/carrito.png" alt="Carrito" width=84 /></a>
        <!-- <img src="imagen/índice.jpg" width=80 alt=""/> -->
</header><!-- / #main-header -->

    <a title="wasa" href="whatsapp.html"><img src="imagen/logo-wasap.png" width=150 alt="wasa" id="logo-wasa"/></a>

<!--------------   contenido --------------->


<div class="container">
    <br><br>
    <h1>IMPRESORAS 3D - GRADO TALLER</h1>
	
    <!-- Cart basket -->
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Productos':0; ?>)</a>
    </div>
    
    <!-- Product list -->
    <div class="row col-lg-12">
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
            $proImg = !empty($row["image"])?'images/products/'.$row["image"]:'images/demo-img.png'; 
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $proImg; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Precio: <?php echo CURRENCY_SYMBOL.$row["price"].' '.CURRENCY; ?></h6>
                <p class="card-text"><?php echo $row["description"]; ?></p>
                <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">AGREGAR AL CARRITO</a>
            </div>
        </div>
    <?php } }else{ ?>
        <p>Product(s) not found.....</p>
    <?php } ?>
    </div>
</div>

<!--------------  fin del contenido --------------->

<br>
	<br>
	<footer id="main-footer">
		<p>&copy; 2022 <a > TAKANATECH </a></p>

       

        <table class="en_pie" >
            <tr>
                <td align="center">CONTACTOS:</td>
               
            </tr>
            <tr>
                <td align="left"><li><a href="#"> isocamop@gmail.com </a></li></td>
               
            </tr>
            <tr>
                <td align="left"><li> cel : 987123456 </li></td>
            </tr>
            <tr>
                <td align="left"><li> fono : 457812 anexo 123  </li></td>
            </tr>
        </table>
	</footer> <!-- / #main-footer -->


</body>
</html>
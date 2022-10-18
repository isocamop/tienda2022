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
		
		<a id="logo-header" href="index_p.php">
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
        <a title="Carrito" href="#"><img src="imagen/carrito.png" alt="Carrito" width=84 /></a>
        <!-- <img src="imagen/índice.jpg" width=80 alt=""/> -->
</header><!-- / #main-header -->

    <a title="wasa" href="whatsapp.html"><img src="imagen/logo-wasap.png" width=150 alt="wasa" id="logo-wasa"/></a>

<!--------------   contenido para el carrito --------------->


<div class="container">

    <!-- Cart basket -->
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Productos':0; ?>)</a>
    </div>
    
</div>


<!--------------  fin del contenido --------------->

<aside id="login">
        <h3>Acceso de  Usuarios</h3>
        
        <FORM METHOD="post" action="Acceso.php">
        <label>Usuario :</label> <input name="username" type="text" id="username" value="marisol" required>
        <br>
        <label>su Clave:</label> <input name="password" type="password" id="password" value="mp2" required>
        <br>
        <br>
        <input type="submit" name="Submit" value="LOGIN">
        </FORM>
    </aside>
        
    <a title="wasa" href="whatsapp.html"><img src="imagen/logo-wasap.png" width=150 alt="wasa" id="logo-wasa"/></a>
    
        
        <video id="videoT"   width="640" height="320" controls autoplay muted loop>
        <source src="imagen/producto .mp4"/>
        </video>

        <img src="./imagen/graphics.png" width="450" id="fotopromo" />
        <hr width="1200">
        <br>
        <h1>LAS MEJORES IMPRESORAS </h1>

        <table>
            <tr>
                <td>
                <img src="./imagen/img1.jpg"  id="fotogrande" />
                </td>
                <td>
                    <center>
                    <div class="tex_1" >
                            
                        <h2> IMPRESORAS [SLA] ANYCUBIC </h2>
                        <p>
                        <br>
                        Reduce costes, realiza iteraciones más rápido 
                        </p>
                        y ofrece una mejor experiencia en el mercado con 
                        </p>
                        nuestros avanzados materiales de impresión 3D 
                        </p>
                        diseñados para ofrecer piezas finales de gran 
                        </p>
                        belleza para una amplia gama de aplicaciones.
                        </p>
                    </div>
                    </center>
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>
        <br>
    
        <table>
            <tr>
                <td>
                    <center>
                        <div class="tex_2" >
                                
                            <h2>IMPRESORAS [SLA] CREALITY </h2>
                            <p>
                            <br>
                            Reduce costes, realiza iteraciones más rápido 
                            </p>
                            y ofrece una mejor experiencia en el mercado con 
                            </p>
                            nuestros avanzados materiales de impresión 3D 
                            </p>
                            diseñados para ofrecer piezas finales de gran 
                            </p>
                            belleza para una amplia gama de aplicaciones.
                            </p>
                        </div>
                    </center>
                </td>
                <td>
                    <img src="./imagen/img2.jpg"  id="fotogrande" />
                </td>
            </tr>
        </table>

        <br>
        <br>
        <br>
        <br>

        <table>
            <tr>
                <td>
                <img src="./imagen/img3.jpg"  id="fotogrande" />
                </td>
                <td>
                    <center>
                    <div class="tex_3" >
                            
                        <h2>IMPRESORAS [FDM] TWO TREES </h2>
                        <p>
                        <br>
                        Reduce costes, realiza iteraciones más rápido 
                        </p>
                        y ofrece una mejor experiencia en el mercado con 
                        </p>
                        nuestros avanzados materiales de impresión 3D 
                        </p>
                        diseñados para ofrecer piezas finales de gran 
                        </p>
                        belleza para una amplia gama de aplicaciones.
                        </p>
                    </div>
                    </center>
                </td>
            </tr>
        </table>

        <br>
        <br>
        <hr width="1200">
        <br>
        <br>
        <h1>LOS MEJORES MARCAS</h1>
        <center>
        <img src="./imagen/marcas.jpg" id="" />
        </center>
        

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
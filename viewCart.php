<?php 
// Include the configuration file 
require_once 'config.php'; 
 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TAKANATECH-3D|Mi-Carrito|</title>
<meta charset="utf-8">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom style -->
<link href="css/estilo_car.css" rel="stylesheet">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
</head>
<body>
<div class="container">
    <h1>CARRITO DE COMPRAS</h1>
    <div class="row">
        <div class="cart">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped cart">
                        <thead>
                            <tr >
                                <th width="10%"></th>
                                <th width="35%">Producto</th>
                                <th width="15%">Precio</th>
                                <th width="15%">Cantidad</th>
                                <th width="20%">Total</th>
                                <th width="5%"> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if($cart->total_items() > 0){ 
                            // Get cart items from session 
                            $cartItems = $cart->contents(); 
                            foreach($cartItems as $item){ 
                                $proImg = !empty($item["image"])?'images/products/'.$item["image"]:'images/demo-img.png'; 
                        ?>
                            <tr class="espacio">
                                <td><img src="<?php echo $proImg; ?>" alt="..."></td>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo CURRENCY_SYMBOL.$item["price"].' '.CURRENCY; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td><?php echo CURRENCY_SYMBOL.$item["subtotal"].' '.CURRENCY; ?></td>
                                <td><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to remove cart item?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;" title="Remove Item"><i class="itrash"></i> </button> </td>
                            </tr>
                        <?php } }else{ ?>
                            <tr><td colspan="6"><p>Tu carrito esta vacio.....</p></td>
                        <?php } ?>
                        <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total del carrito</strong></td>
                                <td><strong><?php echo CURRENCY_SYMBOL.$cart->total().' '.CURRENCY; ?></strong></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php" class="btn btn-block btn-secondary"><i class="ialeft"></i>Seguir Comprando</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-block btn-primary">Pasar por la caja<i class="iaright"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
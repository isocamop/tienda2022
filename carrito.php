<center>
<hr> <TABLE>
<td><b>Codigo </b></td>
<td><b>Nombre </b></td>
<td><b>Apellidos</b></td>
<td><b>Categoria</b></td>
<td><b>Ciudad </b></td>
<td><b>Monto </b></td>
<td><b>Foto </b></td>
<td><b>Imprimir </b></td>
<?php
    include("conexion.php");
    $query = "SELECT * FROM inscripcion ORDER BY codigo ASC";
    $result = mysqli_query($conexion,$query); 
    if ($row = mysqli_fetch_array($result))
    {
        do {
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "<td> <img src=$row[6] width=50 align=center> </td>";
            echo "<td> <a href = imprimeInsc.php?cod=$row[0] > Imprimir </a> ";
            echo "</tr>";
        } while($row = mysqli_fetch_array($result)); 
    echo "</TABLE><hr>";
    }
    else
    {
        echo "¡La tabla esta vacia!";
    }    
    echo "<a href='index.html'>Seguir comprando</a>";
    echo "<p>";
    echo "<a href='Insert.php'>finalizar compra</a>";
?>
</BODY>
</HTML>

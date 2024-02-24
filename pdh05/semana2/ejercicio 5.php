<?php
if ($_POST)
{
    $articulo1= $_POST['articulo1'];
    $articulo2= $_POST['articulo2'];

    echo "FACTURA"."<br><br>";
    $subtotal=$articulo1+$articulo2;
    $iva=$subtotal*19/100;
    $total=$subtotal+$iva;
    
    echo "Valor articulo 1: ".$articulo1."<br>"; 
    echo "Valor articulo 2: ".$articulo2."<br><br>";
    echo "<hr><hr>";
    echo "Subtotal: ".$subtotal."<br>"; 
    echo "Iva: ".$iva."<br>";
    echo "Total compra: ".$total."<br>";
}
?>
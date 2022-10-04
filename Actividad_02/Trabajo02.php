<!DOCTYPE >
<html>
    <head>
        <title>Descuento de Gaseosa</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>

        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="Cantidad_de_gaseosa">Ingresa la cantidad de gaseosa:</label>
                        </td>
                        <td>
                            <input name="Cantidad_de_gaseosa" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="PrecioImport">Ingresa el precio del importe:</label>
                        </td>
                        <td>
                            <input name="PrecioImport" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $Cantidad_de_gaseosa = floatval ($_POST['Cantidad_de_gaseosa']);
    $PrecioImport = floatval ($_POST['PrecioImport']);
    $precio_fijo=7.5;
    $sub = $precio_fijo * $Cantidad_de_gaseosa;
    $pagoimport=  $PrecioImport - $Cantidad_de_gaseosa;
    $obsequio = 2 * $Cantidad_de_gaseosa;
    $desc=0;
    $descimport= 0;




    if($Cantidad_de_gaseosa >=1 ){
        $desc = $sub * 0.05;
        echo "El descuento es del : %".$desc. "<br>";
    }else{
        $desc = $sub * 0.00;
    }
    if($PrecioImport >=30){
        $descimpor = $PrecioImport * 0.7; 
        echo "El descuento es del importe es: %". $descimpor. "<br>";
    }else{
        $descimpor = $PrecioImport * 0.0; 
    }  
    $totalimpor= $pagoimport - $descimport;
    echo "El precio a pagar es del importe es: $". $totalimpor. "<br>";

    $tot = $sub - $desc;
    echo "El precio a pagar es : $". $tot. "<br>";
    echo 'Cantidad de caramelo por la compra: ' . $obsequio .   "<br/>\n";
}
 
?>
    </body>
</html>
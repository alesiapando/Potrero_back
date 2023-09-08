<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio clase 2</h1>
        <?php
        echo "Hola Mundo";
        echo " - ";        
        $saludo = "Hola Mundo";
        echo $saludo;
        echo " - ";  
        $opsuma = "Suma";
        $opresta = "Resta";
        $opmult = "Multiplicacion";
        $opdivi = "Division";
        $opresto = "Resto";
        $var1 = "300" ;
        $var2 = "100" ;
        echo $opsuma;
        echo "  ";
        echo $var1+$var2 ;
        echo " - "; 
        echo $opresta;
        echo "  " ;
        echo $var1-$var2;
        echo " - ";  
        echo "  " ;
        echo $opmult;
        echo "  " ; 
        echo $var1*$var2;
        echo " - ";  
        echo $opdivi;
        echo "  ";
        echo $var1/$var2;
        echo " - "; 
        echo $opresto;
        echo "  ";
        echo $var1%$var2;
        echo " - ";  
        echo "  ";
        echo "Celsius a Fahrenheit";
        echo "  "; 
        $varcel = "1";
        $varfah = "33.8";
        $unid = "20";
        echo $varfah*$unid;
        echo " - ";  
        echo "  ";
        echo "Perimetro del rectangulo";
        echo "  "; 
        $lado1 = "18";
        $lado2 = "12";
        echo ($lado1*2)+($lado2*2);
        echo " - ";  
        echo "  ";
        echo "Area de un rectángulo";
        echo $lado1*$lado2;
        echo " - ";  
        echo "  ";
        echo "Perimetro de un circulo";
        echo "  "; 
        $radio = "30";
        $pi = "3.1416";
        echo ($radio*$pi)*2;
        echo " - ";  
        echo "  ";
        echo "Area de un circulo";
        echo "  "; 
        $radio = "30";
        $pi = "3.1416";
        echo ($radio**2)*$pi;
    ?>  
   </body>
</html>
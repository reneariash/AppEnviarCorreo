<html>  
<head>  
<title>Recibo cliente.</title>  
</head>  

<body>  
<!-- Recibimos la variable id y la guardamos en la  
variable identificador y la imprimimos en pantalla --> 


<?php
try

       {
$mensaje = $_GET['mensaje']; 
$nombreRuta = $_GET['nombreRuta']; 
// El mensaje
//$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('reneariash@hotmail.com, reneariash@gmail.com', 'Coordenadas ' . $nombreRuta, $mensaje);
echo 'Se envio lo siguiente\n\n';
echo $mensaje;
}catch(Exception $e)

        {
 echo 'IMPRIMIMOS EL MENSAJE QUE QUEREMOS QUE VEAN MAS EL ERROR CACHADO EN $e '.$e;
 }

?>

</body> 
</html>

<?php
/*
******************************************************************************
************* Info-bux referidos v1.0 ****************************************

ARCHIVO DE CONFIGURACIÓN PARA SCRIPT DE AFILIADOS

- A continuación hay los parámetros a modificar donde quedará totálmente
personalizado su sitio de scripts.

La información de personalización la podrá cambiar siempre que quiera
actualizando esta página. Recuerde guardar los cambios y actualizar
el archivo en su hosting.

La información de conexión es la que utilizará para conectar a la base de
datos de su hosting, la información requerída (usuario, base de datos, contraseña...)
se la proporcionará su hosting ya sea gratuito o de pago. Generalmente todos tienen
un panel con información acerca de la base de datos donde se proporcionará los datos.

No olvide personalizar las imágenes del sistema que se encuentran dentro del directorio
"images". Las puede actualizar mediante photoshop o otro programa de edición pero recuerde
mantener el nombre original para que queden corréctamente enlazadas.
******************************************************************************

*/
//****** Información de personalización de su su script de referidos *****//
$titulo = 'Info-Bux'; //Nombre del sitio, aparecerá en varios lugares de la web.
$sub_titulo = 'Sistema de Referidos'; //Segundo titulo que aparece en la cabezera.
$web_url = 'www.info-bux.com'; //Dirección web donde has instalado el script
$correo = 'ejemplo@gmail.com'; //Escribe tu dirección de correo electrónico de contacto
$url_referido = 'http://www.ejemplo.com?=usuario'; //Tu dirección web de referído.
$nombre_ptc = 'NOMBRE_PTC'; //Nombre de la web PTC que utilizarás para conseguir referidos.
$limite_pago = 2.00; //Límite a llegar para que un usuario pida el pago.
$sistemapago = 'Paypal'; //Sistema con los que se harán los pagos (paypal, payza, egopay, neteller...)
$valor_bono = 0.01; //Valor en céntimos o dolares de un bono (ej: si es 0.01 --> 1 bono = 1 céntimo)
$porcentaje = '60%'; //Porcentaje que pagarémos a los usuarios sobre el total de dinero que nos generen como referídos.
//********************************************************

//****** Información de conexión a la base de datos *****//
$host = 'localhost'; //Host
$usuario = 'root'; //Usuario 
$db_pass = ''; //Contraseña
$db_nombre = 'refer'; //Nombre de la base de datos
//********************************************************
?>
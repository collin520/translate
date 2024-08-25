<?php 

 return [
     "shop-order-payment" => [
     "title" => "Aceptar pago",
     "sample" => "Su pago de 267 $ se liquidó con éxito.<br> Orden: SM-425<br> Gracias, <b>el nombre de tu tienda</b> .<br> vendidohecho",
     "body" => "Su pago de :param2 se liquidó con éxito. Pedido: :param1 Gracias, :param3. vendidohecho",
     "description" => "Envíe un mensaje al cliente de la tienda para informarle sobre el pago exitoso.",
],
     "shop-order-payment-admin" => [
     "title" => "Aceptar pago",
     "sample" => "Nuevo pago de 267 $ liquidado con éxito.<br> Orden: SM-425<br> Gracias, <b>el nombre de tu tienda</b> .<br> vendidohecho",
     "body" => "Nuevo pago de :param2 liquidado con éxito. Pedido: :param1 Gracias, :param3. vendidohecho",
     "description" => "Envíe un mensaje al propietario de la tienda para informarle sobre el pago exitoso.",
],
     "vendor-new-order" => [
     "title" => "Nuevo pedido del proveedor",
     "sample" => "Recibiste un nuevo pedido de $200.<br> Pedido: SM-870 de <b>Nombre del proveedor</b> .",
     "body" => "Recibió un nuevo pedido de :param2. Pedido: :param1 para :param3.",
     "description" => "Envía un mensaje al proveedor para informarle sobre un nuevo pedido.",
],
     "shop-login" => [
     "title" => "Código de verificación de inicio de sesión",
     "sample" => "Su código de inicio de sesión es: <b>123456</b><br> <b>el nombre de tu tienda</b><br> vendidohecho",
     "body" => "Su código de inicio de sesión es: :param1 :param2 Selldone",
     "description" => "Envía el código de inicio de sesión al cliente para iniciar sesión en la tienda.",
],
     "user-login" => [
     "title" => "Mensaje de inicio de sesión exitoso",
     "sample" => "Estimado <b>nombre</b> ,<br> Ha iniciado sesión en su cuenta con <b>iPhone 165.250.300.1</b> el <b>8/5/2021 a las 9:14</b> a. m.<br> vendidohecho",
     "body" => "Estimado :param1, Ha iniciado sesión en su cuenta por :param2 en :param3. vendidohecho",
     "description" => "Envía un mensaje después de que el cliente inicie sesión en la tienda.",
],
     "avocado-order-submit" => [
     "title" => "Nuevo pedido de aguacate enviado al comprador",
     "sample" => "<b>el nombre de tu tienda</b><br> Estimado <b>Tu nombre</b> ,<br> Hemos recibido tu pedido y lo estamos revisando.<br> Número de pedido: <b>AVO-246</b><br> vendidohecho",
     "body" => ":param3 Estimado :param1, Hemos recibido su pedido y lo estamos revisando. Pedido #: :param2 Selldone",
     "description" => "Envía un mensaje al cliente después de realizar un pedido de aguacate.",
],
     "avocado-order-submit-seller" => [
     "title" => "Aguacate recibe nuevo pedido enviado al vendedor",
     "sample" => "Recibiste un pedido de aguacate:<br> Tienda: <b>el nombre de tu tienda</b><br> Comprador: <b>nombre del comprador</b><br> Orden: <b>AVO-246</b><br> vendidohecho",
     "body" => "Recibió un pedido de aguacate: Tienda: :param1 Comprador: :param2 Pedido: :param3 Selldone",
     "description" => "Envíe un mensaje al propietario de la tienda para informarle sobre la recepción de un nuevo pedido de aguacate.",
],
     "avocado-ready-to-pay" => [
     "title" => "Pedido de aguacate listo para pagar",
     "sample" => "<b>el nombre de tu tienda</b><br> Su pedido ha sido confirmado y puede ser pagado a través del siguiente enlace.<br> Número de pedido: <b>AVO-246</b><br> Enlace: <b>https://tu-dominio/aguacate</b><br> vendidohecho",
     "body" => ":param3 Su pedido ha sido confirmado y puede ser pagado a través del siguiente enlace. Pedido #: :param2 Enlace: :param1 Selldone",
     "description" => "Envíe un mensaje con el enlace de pago al cliente después de que el vendedor establezca el costo y confirme su pedido de Aguacate.",
],
];
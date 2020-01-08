$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
	   400 => array('400 Solicitud incorrecta', 'La solicitud no se ha podido procesar.'),
	   401 => array('401 No autorizado', 'El documento o archivo solicitado no se encuentra en este servidor.'),
	   403 => array('403 Prohibido', 'La solicitud se ha rechazado.'),
	   404 => array('404 No encontrado', 'El servidor no encuentra la página solicitada.'),
	   405 => array('405 Método no permitido', 'No se permite el método especificado en la solicitud.'),
	   
	   500 => array('500 Error interno', 'The server has refused to fulfill your request.'),
	   501 => array('501 No implementado', 'The server has refused to fulfill your request.'),
	   502 => array('502 Pasarela incorrecta', 'The server has refused to fulfill your request.'),
	   504 => array('504 Tiempo de espera de la pasarela agotado', 'The server has refused to fulfill your request.'),
);

$title = $codes[$status][0];
$message = $codes[$status][1];

if ($title == false || strlen($status) != 3) {
	   $message = 'Error desconocido.';
}

// Insertar headers o cabeceras aquí
echo '<h1>'.$title.'</h1>
<p>'.$message.'</p>';
// Insert footer o pie de página aquí

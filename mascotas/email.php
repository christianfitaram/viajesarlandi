
<?php

function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'mascotas@viajesarlandi.com';
$subject = 'Reserva';
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "Apellido: " . $_POST['apellido'] . "\n";
$email_message .= "DNI: " . $_POST['dni'] . "\n";
$email_message .= "Residencia: " . $_POST['residencia'] . "\n";
$email_message .= "Telefono: " . $_POST['telefono'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Nombre de la mascota: " . $_POST['nombre_mascota'] . "\n";
$email_message .= "Raza de la mascota : " . $_POST['raza'] . "\n";
$email_message .= "Edad de la mascota : " . $_POST['edad'] . "\n";
$email_message .= "Peso de la mascota : " . $_POST['kg'] . "\n";
$email_message .= "Residencia de la mascota : " . $_POST['residencia-mascota'] . "\n";
$email_message .= "Transporte: " . $_POST['medio-transporte'] . "\n\n";
$email_message .= "Viaje desde: " . $_POST['desde'] . "\n\n";
$email_message .= "Viaje hacia: " . $_POST['hasta'] . "\n\n";
$email_message .= "Fecha de viaje " . $_POST['date-trave'] . "\n\n";
$email_message .= "Viaja junto a mascota " . $_POST['viajo-junto'] . "\n\n";
$email_message .= "Vacuna contra la rabia " . $_POST['mascota-vacunada'] . "\n\n";
$email_message .= "Prueba serologica UE " . $_POST['mascota-vacunada-prueba'] . "\n\n";
$email_message .= "Documentos listos " . $_POST['documentos-listos'] . "\n\n";
$email_message .= "Necesito ayuda " . $_POST['necesito-asistencia'] . "\n\n";

$headers = 'NO CC ADDED';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email, $subject, $email_message, $headers);
}

?>
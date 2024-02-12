<?php
   if (isset($_POST['submit'])) {
      //Obtenemos valores input formulario
      $nombre = $_POST['fullname'];
      $apellido = $_POST['lastname']
      $email = $_POST['email'];
      $subject = "Reserva"
      $cellphone = $_POST['cellphone']
      $motive = $_POST['activities']
      $destination = $_POST['destination']
      $datestart = $_POST['datef'];   
      $datefinish = $_POST['date-finish'];
      $para = 'reservas@viajesarlandi.com';

      //Creamos cabecera.
      $headers = 'From' . " " . $email . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //Componemos cuerpo correo.
      $msjCorreo = "Nombre: " . $nombre;
      $msjCorreo .= "\r\n";
      $msjCorreo = "Apellido: " . $apellido;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Email: " . $email;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Asunto: " . $subject;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Número de teléfono: " . $cellphone;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Motivo: " . $motive;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Destino: " . $destination;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Fecha Inicio: " . $datestart;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Fecha Inicio: " . $datefinish;
      $msjCorreo .= "\r\n";
      echo $msjCorreo
  }

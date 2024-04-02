<?php
// Recibe los datos del sensor DHT11 enviados por el ESP8266
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lee los datos del sensor
    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];

    // Procesa los datos según sea necesario
    // En este ejemplo, simplemente los mostramos en un formato legible
    $mensaje = "Temperatura: $temperatura °C, Humedad: $humedad %";

    // Envía el mensaje como respuesta al ESP8266
    echo $mensaje;
} else {
    // Si no se reciben datos POST, muestra un mensaje de error
    echo "No se han recibido datos del sensor.";
}
?>

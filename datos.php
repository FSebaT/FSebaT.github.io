<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibe los datos enviados desde el ESP8266
    $temperatura = $_POST["temperatura"];
    $humedad = $_POST["humedad"];

    // Imprime los datos en la consola
    error_log("Temperatura recibida: $temperatura °C, Humedad recibida: $humedad %");

    // Procesa los datos si es necesario (por ejemplo, guardarlos en una base de datos)

    // Devuelve una respuesta indicando que los datos fueron recibidos correctamente
    echo "Datos recibidos: Temperatura = $temperatura °C, Humedad = $humedad %";
} else {
    // Si no se reciben datos mediante POST, devuelve un mensaje de error
    http_response_code(405); // Método no permitido
    echo "405 Not Allowed";
}
?>

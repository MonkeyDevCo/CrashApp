<?php
  $allowedApps = [
   "aerotel" => [
       "data" => "ok"
   ],
   // Agrega más aplicaciones y respuestas según sea necesario
];

$appName = isset($_GET["app"]) ? $_GET["app"] : null;
if ($appName && array_key_exists($appName, $allowedApps)) {
   $response = $allowedApps[$appName];
} else {
   $response = [
       "message" => "Tenemos un problema, contactar al equipo de soporte",
       "messageType" => "MODAL",
       "action" => "RETRY"
   ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>

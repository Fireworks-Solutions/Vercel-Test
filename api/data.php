<?php
header('Content-Type: text/plain; charset=utf-8');

echo json_encode([
  "date" => date("Y-m-d H:i:s"),
  "location" => "Kuala Lumpur",
  "temp" => "28°C"
]);

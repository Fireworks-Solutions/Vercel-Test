<?php
header('Content-Type: text/plain; charset=utf-8');
$data = json_decode(file_get_contents("php://input"), true);

$name = $data["name"];
$email = $data["email"];
$message = $data["message"];

$response = [
  "status" => "success",
  "received" => [
    "name" => $name,
    "email" => $email,
    "message" => $message
  ]
];

echo json_encode($response);

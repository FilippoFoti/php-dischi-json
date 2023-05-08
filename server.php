<?php

$string_value = file_get_contents("dischi.json");
$dischi_array = json_decode($string_value, true);

$response = [
    "results" => $dischi_array,
    "success" => true
];
header('Content-Type: application/json');
echo json_encode($response);

?>
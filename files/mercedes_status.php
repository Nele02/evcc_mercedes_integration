<?php

$vin = "W1234567891234567";
$url = "http://localhost:8093/v1/state/mercedesme.0." . $vin . ".state.chargingactive.boolValue/plain?extraPlain=true";

$response = file_get_contents($url);

if ($response === "true") {
    echo "C";
} else {
    echo "A";
}
?>
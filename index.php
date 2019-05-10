<?php

$headers = array();
foreach ($_SERVER as $name => $value) {
    if (substr($name, 0, 5) == 'HTTP_') {
        $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
    }
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://169.254.169.254/latest/dynamic/instance-identity/document');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 1);
$instanceIdentity = curl_exec($ch);
curl_close($ch);

if ($instanceIdentity === false) {
    $instanceIdentity = ['not' => 'available'];
} else {
    $instanceIdentity = json_decode($instanceIdentity);
}

require 'template.php';

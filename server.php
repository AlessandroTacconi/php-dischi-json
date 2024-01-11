<?php

$discs = json_decode(file_get_contents(__DIR__ . '/discs.json'));
header('Content-type: application/json');
echo json_encode($discs);
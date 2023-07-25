<?php

$item_id = $_GET['item_id'];
$q = $_GET['q'] ?? null;

echo json_encode(["item_id" => $item_id, "q" => $q]);

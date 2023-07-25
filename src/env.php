<?php

$env = getenv("ENV_ENV") ?: "World";
echo json_encode(["env" => $env]);

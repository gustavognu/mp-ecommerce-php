<?php

$body = @file_get_contents('php://input');
file_put_contents("eventos.json",date("H:i:s")." > ". $body . "\n\n", FILE_APPEND);
<?php

$body = @file_get_contents('php://input');

file_put_contents("eventos.json",date("H:i:s")." > ". json_decode($_POST) . "\n", FILE_APPEND);
// file_put_contents("eventos.json",date("H:i:s")." > ". json_encode($_REQUEST) . "\n", FILE_APPEND);
// file_put_contents("eventos.json",date("H:i:s")." > ". json_encode($body) . "\n", FILE_APPEND);

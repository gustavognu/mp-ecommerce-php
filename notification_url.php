<?php

$body = @file_get_contents('php://input');

// file_put_contents("eventos.json",date("H:i:s")." > ". json_encode($_POST) . "\n", FILE_APPEND);
// file_put_contents("eventos.json",date("H:i:s")." > ". json_encode($_REQUEST) . "\n", FILE_APPEND);
file_put_contents("eventos.json",date("H:i:s")." > ". $body . "\n\n", FILE_APPEND);


{
	"action": "payment.created",
	"api_version": "v1",
	"data": {
		"id": "20862155612"
	},
	"date_created": "2022-03-14T20:47:37Z",
	"id": 101103396126,
	"live_mode": true,
	"type": "payment",
	"user_id": "1083760945"
}

{
	"action": "payment.updated",
	"api_version": "v1",
	"data": {
		"id": "20862111979"
	},
	"date_created": "2022-03-14T20:46:19Z",
	"id": 101103441351,
	"live_mode": true,
	"type": "payment",
	"user_id": "1083760945"
}
{
  "id": 12345,
  "live_mode": true,
  "type": "payment",
  "date_created": "2015-03-25T10:04:58.396-04:00",
  "application_id": 123123123,
  "user_id": 44444,
  "version": 1,
  "api_version": "v1",
  "action": "payment.created",
  "data": {
      "id": "999999999"
  }
}
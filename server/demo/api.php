<?php
/**
 * I simulate a slow or otherwise effed up API call.
 */
sleep(10);
header('Content-type: application/json');
header("Access-Control-Allow-Origin: *");
?>
{
  "difference": 30,
  "absoluteAmount": 10000
}
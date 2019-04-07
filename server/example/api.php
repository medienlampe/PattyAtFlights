<?php
/**
 * I simulate a slow or otherwise effed up API call.
 */
#sleep(10);
header('Content-type: application/json');
?>
{
  "difference": 30,
  "absoluteAmount": 10000
}
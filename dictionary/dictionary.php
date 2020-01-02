<?php
// This script will create a javascript dictionary from the POST data instead of variables
if($_POST) {
  $vars = array();
  foreach($_POST as $field => $value) {
    $val = json_encode(rawurlencode($value)); // Escape value
    if(!is_numeric($value))$val = "'$val'"; // Add quotes if non-numeric value
    array_push($vars,"$field:$val"); // Push to $vars array so we can just implode() it
  }
  echo "<script>var post = {".implode(", ",$vars)."}</script>";
}

<?php
// This script will create javascript variables from the POST data instead of a dictionary
if($_POST) { // Check to make sure params have been sent via POST
  foreach($_POST as $field => $value) { // Go through each POST param and output as JavaScript variable
    $val = json_encode($value); // Escape value
    $vars .= 'var '.$field.' = "'.$val.'";\n';
  }
  echo "<script>\n$vars</script>\n";
}

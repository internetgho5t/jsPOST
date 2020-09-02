<?php
// This script will create a javascript dictionary from the POST data instead of variables
if($_POST) {
  $vars = array();
  foreach($_POST as $key => $val) {
    array_push($vars,'$key:"'.$val.'"');
  }
  echo "<script>var post = {".implode(",",$vars)."};</script>\n"; // Put POST data into a javascript dictionary
}

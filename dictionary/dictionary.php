<?php
// This script will create a javascript dictionary from the POST data instead of variables
if($_POST)echo "<script>var post = ".json_encode($_POST).";</script>\n"; // Put POST data into a javascript dictionary

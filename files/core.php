<?php
@ini_set("display_errors", "On");   error_reporting(E_ALL);
// why display errors in 404 pages... unless you run it in local?
require_once('tags.php');
require_once('conf.php');
function mc_404(){
  header('HTTP/1.0 404 Not Found');
  echo "<h2>404 Not Found</h2>";
  echo "oops, the page you requested cannot be found.";
  exit();
}
?>

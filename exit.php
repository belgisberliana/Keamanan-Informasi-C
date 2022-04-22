<?php
  session_start();
  if($_GET['click'] == true) {
    session_destroy();
    header("Location: input.php");
  }
?>

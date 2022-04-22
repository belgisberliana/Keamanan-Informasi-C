<?php
  function encrypt($key, $plaintext) {
    $latter = strlen($plaintext) - $key;
    $cyphertext = substr($plaintext, $latter, strlen($plaintext));
    return $cyphertext .= substr($plaintext, 0, $latter);
  }


  session_start();
  $kata_kunci = array(encrypt($_POST['key'], "admin") => "admin");

  $_SESSION['key'] = $_POST['key'];
  $_SESSION['encrypted'] = key($kata_kunci);
  $_SESSION['input'] = $_POST['input'];
  if($_SESSION['input'] == $kata_kunci[$_SESSION['encrypted']]) {
    header("Location: show.php");
  } else {
    header("Location: input.php");
  }

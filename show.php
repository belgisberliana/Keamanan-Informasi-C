<?php
  session_start();
  if(isset($_SESSION['input']) != true) {
    header("Location: input.php");
  } else {
?>

<html>
  <head>
    <title>Laman Utama</title>
  </head>
  <body>
    <p>Cyphertext = <?php echo $_SESSION['encrypted'] ?></p>
    <p>Index = <?php echo $_SESSION['key'] ?></p>
    <br><form name="exit" action="exit.php" method="get">
    <input type="submit" name="click" value="Exit"></form>
  </body>
</html>

<?php } ?>

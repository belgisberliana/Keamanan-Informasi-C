<html>
  <head>
    <title>Laman Input</title>
  </head>
  <body>
    <form name="form" action="check.php" method="post">
      <input type="text" name="input" maxlength="5" placeholder="Ketik Kata Kunci">
      <input type="hidden" id="num" name="key" value="">
      <input type="submit">
    </form>
    <script>
      function key_val() {
        if(key == 5) {
          key = 1;
        }
        document.getElementById('num').value = key;
        key++;
      }
      var key = 1; setInterval(key_val,1000);
    </script>
  </body>
</html>

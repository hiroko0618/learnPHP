<?php
  $name = '';
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
  }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Check username</title>
</head>
<body>
  <?php echo($name) ?>
</body>
</html>


<?php require __DIR__ . '/functions.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>docker test</title>
</head>
<body>
  <!-- header -->
  <header>
  </header>
  <!-- header -->

  <!-- main -->
  <main>
    <?php

    try{
      $pdo = new PDO(DNS, USER, PASS);
      echo '接続成功！' . nl2br(PHP_EOL);
    } catch (PDOException $e) {
      echo '接続失敗' . $e->getMessage() . nl2br(PHP_EOL);
      exit();
    }

    $query = 'SELECT * FROM turns;';
    $stmt = $pdo->prepare($query);

    $stmt->execute();
    $result = $stmt->fetchAll();

    var_dump($result);
    
    unset($pdo);

    ?>
  </main>
  <!-- main -->

  <!-- footer -->
  <footer>
  </footer>
  <!-- footer -->

</body>
</html>

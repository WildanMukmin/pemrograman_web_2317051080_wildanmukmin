<?php
if (!empty($_GET['q'])) {
  switch ($_GET['q']) {
    case 'info':
      phpinfo();
      exit;
      break;
  }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage PHP</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, rgb(199, 40, 46), rgb(187, 107, 85));
      text-align: center;
    }

    .container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .title {
      font-size: 48px;
      font-weight: 600;
      color: #333;
    }

    .info {
      margin-top: 20px;
      font-size: 18px;
      color: #666;
    }

    .info a {
      color: #e63946;
      text-decoration: none;
      font-weight: 600;
    }

    .info a:hover {
      text-decoration: underline;
    }

    .btn-container {
      margin-top: 20px;
    }

    .btn {
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      background: #ff6b6b;
      color: white;
      font-size: 16px;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn:hover {
      background: #e63946;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">Selamat Datang di Homepage PHP</div>
    <div class="info">
      <p>Server: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
      <p>PHP Version: <?php echo phpversion(); ?> <a href="/?q=info">(info)</a></p>
      <p>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></p>
    </div>
    <div class="btn-container">
      <a class="btn" href="https://www.php.net/docs.php">Dokumentasi PHP</a>
    </div>
  </div>
</body>

</html>
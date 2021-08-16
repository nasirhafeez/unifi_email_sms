<?php error_reporting(E_ALL ^ E_NOTICE);
session_start();

include 'parameters.php';
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($business_name); ?> WiFi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" href="bulma.min.css" />
  <script defer src="vendor\fortawesome\font-awesome\js\all.js"></script>
  <meta http-equiv="refresh" content="5;url=connect.php" />
  <link rel="icon" type="image/png" href="favicomatic\favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicomatic\favicon-16x16.png" sizes="16x16" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="page">

    <div class="head">
      <br>
      <figure id="logo">
        <img src="logo.png">
      </figure>
    </div>

    <div class="main">
      <seection class="section">
        <div class="container">
          <div id="margin_zero" class="content has-text-centered is-size-6">Welcome!</div>
          <div id="margin_zero" class="content has-text-centered is-size-6">You'll be automatically authorized</div>
          <div id="margin_zero" class="content has-text-centered is-size-6">on the network in a few moments</div>
        </div>
      </seection>
    </div>
    <div class="foot">
      <div id="margin_zero" class="content has-text-centered is-size-6">Powered by <?php echo htmlspecialchars($business_name); ?></div>
      <div id="margin_zero" class="content has-text-centered is-size-6">(C) Copyright <?php echo htmlspecialchars($current_year); ?></div>
    </div>
  </div>
</body>

</html>
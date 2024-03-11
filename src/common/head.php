<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<head>
  <meta charset="UTF-8" />
  <?php
  $path = dirname($_SERVER['PHP_SELF']);
  $end = basename(dirname(__DIR__, 1));
  $secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
  $protocol = $secure ? 'https://' : 'http://';
  $base = $protocol . $_SERVER['HTTP_HOST'] . strstr($path, $end, true) . $end . '/';
  ?>
  <base href="<?php echo $base ?>" />
  <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
  <meta name="viewport" content="width=device-width initial-scale=1" />
  <link rel="stylesheet" href="css/output.css" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <title>Boardarama</title>
</head>
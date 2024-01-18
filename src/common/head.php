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
  <meta name="viewport" content="width=device-width initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'accent': '#005175',
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="css/my_css.css" />
  <title>Boardarama</title>
</head>

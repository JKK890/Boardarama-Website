<?php
$is_logged_in = isset($_SESSION["customer_id"]);
if ($is_logged_in) {
  $name = $_SESSION["first_name"];
}
?>
<header class="flex gap-5">
  <div class="min-w-32 min-h-32 max-w-32 max-h-32">
    <a href="my_business.php">
      <img class="rounded-lg" src="images/logo.jpg" alt="Boardarama Logo">
    </a>
  </div>
  <div class="w-full text-center">
    <?php include (__DIR__ . "/../scripts/getQuote.php"); ?>
  </div>
  <div class="text-right">
    <div id="time-container" class="text-sm sm:text-lg sm:whitespace-nowrap prose"></div>
    <?php if ($is_logged_in): ?>
      <div class="text-accent text-2xl pb-2">Welcome
        <?php echo $name; ?>!
      </div>
      <a class="py-1 px-2 rounded text-white bg-accent hover:bg-gray-600" href="scripts/logout.php">
        Log out <i class="ph ph-sign-out"></i>
      </a>
    <?php else: ?>
      <div class="text-accent text-2xl pb-2">Welcome!</div>
      <a class="py-1 px-2 rounded text-white bg-accent hover:bg-gray-600" href="pages/login.php">
        Log in <i class="ph ph-sign-in"></i>
      </a>
    <?php endif; ?>
  </div>
</header>

<script>
  (async function updateTime() {
    const data = await (await fetch('scripts/time.php')).json()
    document.getElementById('time-container').innerHTML = `It's ${data.date}<br>Our time is ${data.time}`
    setTimeout(updateTime, 1000)
  })()
</script>
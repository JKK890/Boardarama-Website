<header class="flex gap-5">
  <div class="min-w-20 min-h-20 max-w-32 max-h-32">
    <a href="my_business.php">
      <img class="rounded-lg" src="images/logo.jpg" alt="Boardarama Logo" />
    </a>
  </div>
  <div class="w-full text-center">
    <?php include(__DIR__ . "/../common/quote.php"); ?>
  </div>
  <div class="text-right">
    <div id="time-container" class="text-sm sm:text-lg sm:whitespace-nowrap prose"></div>
    <div class="text-accent text-2xl pb-2">Welcome!</div>
    <a title="Not yet active" class="py-1 px-2 rounded text-white bg-accent hover:bg-gray-600" href="pages/sorry.php">
      Log in
    </a>
  </div>
</header>

<script>
  (async function updateTime() {
    const data = await (await fetch('scripts/time.php')).json()
    document.getElementById('time-container').innerHTML = `It's ${data.date}<br>Our time is ${data.time}`
    setTimeout(updateTime, 1000)
  })()
</script>
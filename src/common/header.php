<header class="flex gap-5">
  <div class="min-w-20 min-h-20 max-w-32 max-h-32">
    <a href="my_business.php">
      <img class="rounded-lg" src="images/logo.jpg" alt="Boardarama Logo" />
    </a>
  </div>
  <div class="w-full text-center">
    <strong class="prose max-w-none">Today's bewildering quote is from Justin Kaiser:
    </strong>
    <p class="text-sm prose max-w-none">
      "A simple roll of the dice can determine the outcome of a game"
    </p>
  </div>
  <div class="text-right">
    <div class="text-accent text-2xl pb-2">Welcome!</div>
    <div id="time-container" class="whitespace-nowrap pb-4 prose"></div>
    <a title="Not yet active" class="py-1 px-2 rounded text-white bg-accent hover:bg-gray-600" href="pages/sorry.php">
      Log in
    </a>
  </div>
</header>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    function updateTime() {
      fetch('common/time.php')
        .then(response => response.json())
        .then(data => {
          document.getElementById('time-container').innerHTML = "It's " + data.date + "<br>Our time is " + data.time;
        })
        .catch(error => {
          console.error('Error fetching time:', error);
        });
    }
    updateTime();
    setInterval(updateTime, 5000);
  });
</script>
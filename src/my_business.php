<!DOCTYPE html>
<html lang="en">
<?php include 'common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include 'common/header.php'; ?>
            <?php include 'common/taskbar.html'; ?>
            <main>
                <div class="flex flex-col lg:flex-row my-5 gap-5">
                    <article class="flex-1 prose max-w-none">
                        <h3>Come play board games and eat!</h3>
                        <p>
                            Welcome to Boardarama, where good food meets great games! Our new location
                            in Halifax is all about tasty bites and board game delights. Grab a quick,
                            delicious meal while playing your favorite games in a casual and welcoming
                            atmosphere. Perfect for a fun night out with friends, a cozy date, or a
                            family-friendly gathering. Our culinary team, led by renowned chefs, curates
                            a diverse menu that tantalizes taste buds and accommodates a range of dietary
                            preferences. From savory appetizers to delightful desserts, each dish is
                            crafted with precision and passion, ensuring an amazing journey that mirrors
                            the thrill of your chosen board game. Boardarama: redefining dining and gaming!
                        </p>
                        <p>
                            Did you play a game here that you enjoyed and want to bring it home?
                            Check out our e-store!
                        </p>
                    </article>
                    <div class="flex-1">
                        <div id="carouselImage" class="carouselImage"></div>
                        <div id="carouselLabel" class="carouselLabel"></div>
                    </div>
                </div>
            </main>
        </div>
        <?php include 'common/footer.html'; ?>
    </div>
</body>
<script src="scripts/carousel.js"></script>

</html>
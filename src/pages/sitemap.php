<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <main class="prose max-w-none py-2">
                <h1>Site Map</h1>
                <div class="flex gap-4 text-center flex-wrap">
                    <div class="bg-gray-400 rounded p-4 text-3xl">
                        <a href="my_business.php">Home</a>
                    </div>
                    <div class="bg-gray-400 rounded flex-grow p-4 text-2xl flex flex-col gap-4">
                        <div class="text-3xl">Shop</div>
                        <a href="pages/products.php">Product&nbsp;Catalog</a>
                        <a href="pages/register.php">Register</a>
                        <a href="pages/cart.php">Shopping&nbsp;Cart</a>
                    </div>
                    <div class="bg-gray-400 rounded flex-grow p-4 text-2xl flex flex-col gap-4">
                        <div class="text-3xl">Classes</div>
                        <a href="pages/dnd.php">D&D&nbsp;Classes</a>
                        <a href="pages/ticket-to-ride.php">Ticket&nbsp;to&nbsp;Ride&nbsp;Classes</a>
                        <a href="pages/catan.php">Catan&nbsp;Classes&nbsp;(NEW!)</a>
                    </div>
                    <div class="bg-gray-400 rounded flex-grow p-4 text-2xl flex flex-col gap-4">
                        <div class="text-3xl">About&nbsp;Us</div>
                        <a href="pages/vision.php">Vision&nbsp;&&nbsp;Mission</a>
                        <a href="pages/locations.php">Our&nbsp;Locations</a>
                        <a href="pages/feedback.php">Feedback&nbsp;Form</a>
                    </div>
                    <div class="bg-gray-400 rounded flex-grow p-4 text-3xl"><a href="
                            pages/sitemap.php">Site&nbsp;Map</a>
                    </div>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>

</body>

</html>
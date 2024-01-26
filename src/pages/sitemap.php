<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.html'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <h1>Site Map</h1>
                <div class="flex gap-4 text-center lg:flex-row flex-col">
                    <div class="bg-gray-400 rounded px-4 py-4 text-3xl w-min h-min"><a href="my_business.php">Home</a>
                    </div>
                    <div class="bg-gray-400 rounded px-4 py-4 text-2xl w-min h-min flex flex-col gap-4">
                        <div class="text-3xl">Shop</div>
                        <a href="pages/estore.php">e-store&nbsp;Options</a>
                        <a href="pages/sorry.php">Product&nbsp;Catalog</a>
                        <a href="pages/sorry.php">Register</a>
                        <a href="pages/sorry.php">Login</a>
                        <a href="pages/sorry.php">Shopping&nbsp;Cart</a>
                        <a href="pages/sorry.php">Checkout</a>
                        <a href="pages/sorry.php">Logout</a>
                    </div>
                    <div class="bg-gray-400 rounded px-4 py-4 text-2xl w-min h-min flex flex-col gap-4">
                        <div class="text-3xl">Classes</div>
                        <a href="pages/sorry.php">D&D&nbsp;Classes</a>
                        <a href="pages/sorry.php">Catan&nbsp;Classes&nbsp;(NEW!)</a>
                    </div>
                    <div class="bg-gray-400 rounded px-4 py-4 text-2xl w-min h-min flex flex-col gap-4">
                        <div class="text-3xl">About&nbsp;Us</div>
                        <a href="pages/vision.php">Vision&nbsp;&&nbsp;Mission</a>
                        <a href="pages/locations.php">Our&nbsp;Locations</a>
                        <a href="pages/sorry.php">Feedback&nbsp;Form</a>
                    </div>
                    <div class="bg-gray-400 rounded px-4 py-4 text-3xl w-min h-min"><a href="
                            pages/sitemap.php">Site&nbsp;Map</a></div>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>

</body>

</html>
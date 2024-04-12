<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<?php
$over = isset($_GET["over"]);
?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include "../scripts/get_cart.php" ?>
            <main class="prose max-w-none py-2">
                <h1>Shopping Cart</h1>
                <a class="no-underline" href="pages/products.php">
                    <i class="ph ph-caret-left"></i>
                    Back to Product Catalog
                </a>
                <br>
                <?php if (!empty($cart_items)): ?>
                    <div class="flex flex-col gap-1">
                        <?php foreach ($cart_items as $item): ?>
                            <div class="flex bg-gray-400 items-start rounded">
                                <img class="flex m-0 w-52 max-h-full rounded" src="images/products/<?= $item["image_file"] ?>"
                                    alt="<?= $item["name"] ?>">
                                <div
                                    class="flex flex-col text-sm sm:text-md sm:flex-row  rounded p-4 justify-between border-separate w-full">
                                    <div class="flex flex-col items-start">
                                        <div class="text-base sm:text-xl font-semibold w-min">Game&nbsp;</div>
                                        <div class="w-min text-sm sm:text-base">
                                            <?= $item["name"] ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-row sm:flex-col">
                                        <div class="text-base sm:text-xl font-semibold">Price&nbsp;</div>
                                        <div class="text-sm sm:text-base">
                                            <?= $item["price"] ?>$
                                        </div>
                                    </div>
                                    <div class="flex flex-row sm:flex-col">
                                        <div class="text-base sm:text-xl font-semibold">Quantity&nbsp;</div>
                                        <div class="text-sm sm:text-base">
                                            <?= $item["qty"] ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-row sm:flex-col">
                                        <a class="flex text-red-500 underline font-semibold text-sm sm:text-base"
                                            href="scripts/remove_from_cart.php?pr=<?= $item["p_id"] ?>&or=<?= $item["o_id"] ?>">
                                            Remove from Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php if ($over): ?>
                            <span class="text-red-500 text-center">Quantity entered is greater than amount in stock for one or
                                more items in cart</span>
                        <?php endif; ?>
                        <div class="flex justify-end items-center font-semibold">
                            Subtotal:&nbsp;
                            <?php
                            $data = mysqli_query(
                                $db,
                                "SELECT SUM(p.price * oi.qty) FROM my_order_items as oi JOIN my_products as p ON p_id = product_id WHERE oi.o_id = $item[o_id]"
                            );
                            echo mysqli_fetch_array($data)[0];
                            ?>$
                        </div>
                        <div class="flex justify-end">
                            <a class="submit-button no-underline" href="pages/checkout.php">
                                Proceed to checkout
                                <i class="ph ph-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>

                <?php else: ?>
                    <?php echo "The cart is currently empty, add products from the product catalog by clicking <a href=\"pages/products.php\">here</a>"; ?>
                <?php endif; ?>


            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
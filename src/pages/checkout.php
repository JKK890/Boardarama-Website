<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <main class="prose max-w-none py-2">
                <h1>Checkout</h1>
                <?php include "../scripts/get_cart.php" ?>
                <?php if (!empty($cart_items)): ?>
                    <?php $over = false; ?>
                    <?php foreach ($cart_items as $item): ?>
                        <?php
                        $rows = mysqli_query($db, "SELECT quantity FROM my_products WHERE product_id = $item[p_id]");
                        $data = mysqli_fetch_assoc($rows);
                        $qty = $data["quantity"];

                        if ($item["qty"] > $qty) {
                            header("Location: cart.php?over=true");
                            $over = true;
                        }
                        ?>
                    <?php endforeach ?>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-center">Your order has been placed successfully! Here is a summary of your
                            order
                        </div>
                        <?php foreach ($cart_items as $item): ?>
                            <div class="flex bg-gray-400 items-start rounded">
                                <div class="flex text-sm sm:text-md p-4 justify-between border-y-2 border-gray-600 w-full">
                                    <div class="flex flex-row sm:flex-col rounded">
                                        <div class="text-base sm:text-xl font-semibold w-min">Game&nbsp;</div>
                                        <div class="w-min text-sm sm:text-base">
                                            <?= $item["name"] ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-row sm:flex-col rounded">
                                        <div class="text-base sm:text-xl font-semibold">Quantity&nbsp;</div>
                                        <div class="text-sm sm:text-base">
                                            <?= $item["qty"] ?>
                                        </div>
                                    </div>
                                    <div class="flex flex-row sm:flex-col rounded">
                                        <div class="text-base sm:text-xl font-semibold">Price&nbsp;</div>
                                        <div class="text-sm sm:text-base">
                                            <?= $item["price"] ?>$
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php include "../scripts/process_checkout.php" ?>
                        <?php endforeach ?>
                        <div class="flex justify-end font-bold">
                            Your order ID is #
                            <?= $item["o_id"] ?>
                        </div>
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
                    </div>
                <?php else: ?>
                    <div>The cart is currently empty, add products from the product catalog by clicking
                        <a href="pages/products.php">here</a>
                    </div>
                <?php endif; ?>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
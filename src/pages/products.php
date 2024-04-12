<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <main class="prose max-w-none py-2">
                <h1>Product Catalog</h1>
                <p>Browse our sizeable product catalog by clicking the following product types</p>
                <div class="flex justify-between items-center px-4 py-2 bg-gray-400 rounded mb-4 gap-2">
                    <a class="hover:bg-slate-200 px-2 py-1 rounded no-underline text-xs sm:text-base"
                        href="pages/products.php">All</a>
                    <?php include "../scripts/process_products.php" ?>
                    <?php foreach ($categories as $category): ?>
                        <a href="pages/products.php?category=<?= $category["code"] ?>"
                            class="hover:bg-slate-200 px-2 py-1 rounded no-underline text-xs sm:text-base">
                            <?= $category["name"] ?>
                        </a>
                    <?php endforeach ?>
                </div>
                <div class="gap-4 columns-xs">
                    <?php foreach ($products as $product): ?>
                        <form id="form" class="form-control" action="scripts/process_cart.php" method="post">
                            <div class="bg-gray-400 rounded p-2 w-full break-inside-avoid mb-4">
                                <img class="m-0" src="images/products/<?= $product["image_file"] ?>"
                                    alt="<?= $product["name"] ?>">
                                <div class="flex justify-between">
                                    <div>
                                        <div class="text-xl font-semibold">
                                            <?= $product["name"] ?>
                                        </div>
                                        <div>
                                            <?= $product["price"] ?>$
                                        </div>
                                        <div class="flex items-center">
                                            <?php
                                            $numberOfOptions = $product["quantity"];
                                            if ($numberOfOptions > 0) {
                                                echo "
                                                <label for=\"qty\">Quantity:&nbsp;</label>
                                                <select class=\"rounded text-lg py-0.5 font-light\" id=\"qty\" name=\"qty\" required>
                                                <option value selected disabled hidden></option>";

                                                for ($i = 1; $i <= $numberOfOptions; $i++) {
                                                    echo "<option value='$i'>$i</option>";
                                                }
                                            } else {
                                                echo "<div class=\"pb-1.5\">None in stock at the moment</div>";
                                            }
                                            ?>
                                            </select>
                                            <input type="hidden" id="product" name="product"
                                                value="<?= $product["product_id"] ?>">
                                        </div>
                                    </div>
                                    <div class="text-right flex flex-col">
                                        <div>
                                            <?= $product["quantity"] ?> in stock
                                        </div>
                                        <?php
                                        if ($numberOfOptions > 0) {
                                            echo "
                                                <button class=\"underline font-semibold\">
                                                    Add to cart <i class=\"ph ph-shopping-cart-simple\"></i>
                                                </button>
                                            ";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endforeach ?>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
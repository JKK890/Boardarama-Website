<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
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
                                </div>
                                <div class="text-right">
                                    <div>
                                        <?= $product["quantity"] ?> in stock
                                    </div>
                                    <a title="Not yet active" href="pages/sorry.php">Add to cart <i
                                            class="ph ph-shopping-cart-simple"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
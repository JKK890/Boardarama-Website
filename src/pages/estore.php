<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.html'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <h1>e-store Options</h1>
                <p>Welcome to our e-store, and thank you for visiting!</p>
                <p>
                    We provide a wide variety of board games and tabletop role playing games.
                    <br>
                    For your shopping and browsing convenience,
                    please choose one of the following links:
                </p>
                <div class="flex flex-col gap-4">
                    <div>
                        <i class="ph-bold ph-dice-one text-accent"></i>
                        To browse our sizeable product catalog <a title="Not yet active" href="pages/sorry.php">click
                            here</a>.
                    </div>
                    <div>
                        <i class="ph-bold ph-dice-two text-accent"></i>
                        Do you already have an account with us?
                        Login to our e-store and begin browsing our vast array of games <a title="Not yet active"
                            href="pages/sorry.php">click
                            here</a>.
                    </div>
                    <div>
                        <i class="ph-bold ph-dice-three text-accent"></i>
                        <span>Don't already have an account with us? Then you can register (you only need to
                            do it once) <a title="Not yet active" href="pages/sorry.php">click here</a>.</span>
                    </div>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>
<?php
$retry = isset($_GET["retry"]);
?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-1">
                        <h1>Login</h1>
                        <p>
                            Purchasing exciting new board games from our e-store requires logging in.
                            And if you haven't yet registered with Boardarama,
                            before attempting to log in you must register here.
                        </p>
                        <form id="form" class="form-control" action="scripts/process_login.php" method="post"
                            novalidate>
                            <div class="flex flex-col flex-wrap gap-4">
                                <div class="form-element">
                                    <label for="username">Username</label>
                                    <input required pattern="^.+$" class="form-field" type="text" name="username"
                                        id="username" placeholder="Enter your name here">
                                    <span class="form-error">Please input a valid username</span>
                                </div>
                                <div class="form-element">
                                    <label for="password">Password</label>
                                    <input required pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9\s]).{8,}$"
                                        class="form-field" type="password" name="password" id="password"
                                        placeholder="Enter your password here">
                                    <span class="form-error">Please input a valid password</span>
                                </div>
                                <span class="text-center">Don't have an account? Click&nbsp;<a
                                        href="pages/register.php">here</a></span>
                                <input type="submit" value="Send"
                                    class="w-full cursor-pointer px-2 py-3 leading-none rounded text-white bg-accent hover:bg-gray-600">
                                <?php if ($retry): ?>
                                    <span class="text-red-500 text-center">Invalid username or password</span>
                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                    <div class="flex flex-1 text-center"><img src="images/monopoly2.png" alt="Uno"></div>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
    <script src="scripts/form_control.js"></script>
</body>

</html>
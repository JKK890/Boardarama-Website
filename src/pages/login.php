<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

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
                        <form id="form" class="form-control" action="#" method="post" novalidate>
                            <div class="flex flex-col flex-wrap gap-4">
                                <div class="form-element">
                                    <label for="fName">User Name</label>
                                    <input required class="form-field" type="text" name="uName" id="uName" placeholder="Enter your name here">
                                    <span class="form-error">Please valid user name</span>
                                </div>
                                <div class="form-element">
                                    <label for="lName">Password</label>
                                    <input required class="form-field" type="text" name="pass" id="pass" placeholder="Enter your password here">
                                    <span class="form-error">Please input a valid password</span>
                                </div>
                                <div class="flex justify-end gap-4">
                                    <input type="reset" value="Reset" class="submit-button">
                                    <input type="submit" value="Send" class="submit-button">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="flex flex-1"><img src="images/monopoly2.png" alt="Uno"></div>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>
<script src="scripts/form_control.js"></script>
</html>
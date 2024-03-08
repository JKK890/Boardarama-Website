<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2 ">
                <h1>Register</h1>
                <form id="form" class="form-control" action="pages/process_register.php" method="post" novalidate>
                    <div><span class="text-red-500">*</span> indicates the field is required</div>
                    <div class="flex flex-col md:flex-row flex-wrap gap-0 md:gap-4">
                        <section class="flex-1 gap-4 md:pb-4">
                            <div class="flex gap-4">
                                <div class="form-element w-28">
                                    <label for="prefix">Prefix<span class="text-red-500">*</span></label>
                                    <select required class="rounded bg-gray-200" id="prefix" name="prefix">
                                        <option value selected disabled hidden></option>              
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                    <span class="form-error">Select a prefix</span>
                                </div>
                                <div class="flex-grow form-element">
                                    <label for="fName">First Name<span class="text-red-500">*</span></label>
                                    <input required pattern="^[A-Z][A-Za-z]*$" class="form-field" type="text" name="fName" id="fName" placeholder="First Name">
                                    <span class="form-error">Please input a first name beginning with a capital letter</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element w-28">
                                    <label for="init">Middle Initial</label>
                                    <input class="form-field" type="text" name="init" id="init">
                                    <span class="form-error">Please input a last name beginning with a capital letter</span>
                                </div>
                                <div class="flex-grow form-element">
                                    <label for="lName">Last Name<span class="text-red-500">*</span></label>
                                    <input required pattern="^[A-Z][A-Za-z]*$" class="form-field" type="text" name="lName" id="lName" placeholder="Last Name">
                                    <span class="form-error">Please input a last name beginning with a capital letter</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element w-28">
                                    <label for="gender">Gender<span class="text-red-500">*</span></label>
                                    <select required class="rounded bg-gray-200" id="gender" name="gender">
                                        <option value selected disabled hidden></option>              
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                        <option value="O">Other</option>
                                    </select>
                                    <span class="form-error">Select a prefix</span>
                                </div>
                                <div class="form-element flex-grow">
                                    <label for="phone">Phone number</label>
                                    <input pattern="^(\d{3}-)?\d{3}-\d{4}$" class="form-field" type="tel" name="phone" id="phone" placeholder="###-###-####">
                                    <span class="form-error">Please input a valid phone number</span>
                                </div>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="user">Username<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="user" id="user" placeholder="Input your username">
                                <span class="form-error">Please input a username</span>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="pass">Password<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="pass" id="pass" placeholder="Input your password">
                                <span class="form-error">Please input a valid password</span>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="repass">Confirm Password<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="repass" id="repass" placeholder="Input your password again">
                                <span class="form-error">Passwords are not equal</span>
                            </div>
                        </section>
                        <section class="flex-1 gap-4">
                            <div class="form-element">
                                <label for="email">Email<span class="text-red-500">*</span></label>
                                <input required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" class="form-field" type="email" name="email" id="email"
                                    placeholder="yourname@example.com">
                                <span class="form-error">Please input a valid email</span>
                            </div>
                            <div class="form-element">
                                <label for="address">Street Address<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="address" id="address" placeholder="Input your address">
                                <span class="form-error">Please input a address</span>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element flex-grow min-w-20">
                                    <label for="city">City<span class="text-red-500">*</span></label>
                                    <input required class="form-field" type="text" name="city" id="city" placeholder="Input your city">
                                    <span class="form-error">Please input a city</span>
                                </div>
                                <div class="form-element">
                                    <?php include '../common/provinces.php'; ?>
                                    <span class="form-error">Select region</span>
                                </div>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="postal">Postal Code<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="postal" id="postal" placeholder="Input your postal code">
                                <span class="form-error">Please input a Postal Code</span>
                            </div>
                            <div class="flex justify-end gap-4 md:gap-0 md:flex-col">
                                <div class="flex justify-end py-2 md:py-8">
                                    <input type="reset" value="Reset" class="submit-button">
                                </div>
                                <div class="flex justify-end py-2 md:py-0">
                                    <input type="submit" value="Send" class="submit-button">
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>
<script src="scripts/form_control.js"></script>
</html>
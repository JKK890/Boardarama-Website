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
                                        <option value selected disabled hidden>Prefix</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Dr.">Dr.</option>
                                    </select>
                                    <span class="form-error">Select a prefix</span>
                                </div>
                                <div class="flex-grow form-element">
                                    <label for="first_name">First Name<span class="text-red-500">*</span></label>
                                    <input required pattern="^[A-Za-z]+$" class="form-field" type="text"
                                        name="first_name" id="first_name" placeholder="First Name">
                                    <span class="form-error">Please input a first name</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element w-28">
                                    <label for="initial">Middle Initial</label>
                                    <input class="form-field" pattern="^[A-Za-z]+$" type="text" name="initial"
                                        id="initial">
                                    <span class="form-error">Input a valid middle initial</span>
                                </div>
                                <div class="flex-grow form-element">
                                    <label for="last_name">Last Name<span class="text-red-500">*</span></label>
                                    <input required pattern="^[A-Za-z]+$" class="form-field" type="text"
                                        name="last_name" id="last_name" placeholder="Last Name">
                                    <span class="form-error">Please input a last name</span>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element w-28">
                                    <label for="gender">Gender<span class="text-red-500">*</span></label>
                                    <select required class="rounded bg-gray-200" id="gender" name="gender">
                                        <option value selected disabled hidden>Gender</option>
                                        <option value="F">Female</option>
                                        <option value="M">Male</option>
                                        <option value="O">Other</option>
                                    </select>
                                    <span class="form-error">Select a gender</span>
                                </div>
                                <div class="form-element flex-grow">
                                    <label for="phone">Phone number</label>
                                    <input pattern="^(\d{3}-)?\d{3}-\d{4}$" class="form-field" type="tel" name="phone"
                                        id="phone" placeholder="###-###-####">
                                    <span class="form-error">Please input a valid phone number</span>
                                </div>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="username">Username<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="username" id="username"
                                    placeholder="Input your username">
                                <span class="form-error">Please input a username</span>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="password">Password<span class="text-red-500">*</span></label>
                                <input required pattern="^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9\s]).{8,}$"
                                    class="form-field" type="password" name="password" id="password"
                                    placeholder="Input your password">
                                <span class="form-error">Please input a valid password</span>
                            </div>
                            <div class="text-gray-500">Password must contain at least one letter, one number, one
                                special character, and must be at least 8 characters long</div>
                            <div class="form-element flex-grow">
                                <label for="confirm_password">Confirm Password<span
                                        class="text-red-500">*</span></label>
                                <input required pattern="(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9\s]).{8,}"
                                    class="form-field" type="password" name="confirm_password" id="confirm_password"
                                    placeholder="Input your password again">
                                <span class="form-error">Please input a valid password</span>
                            </div>
                        </section>
                        <section class="flex-1 gap-4">
                            <div class="form-element">
                                <label for="email">Email<span class="text-red-500">*</span></label>
                                <input required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-field"
                                    type="email" name="email" id="email" placeholder="yourname@example.com">
                                <span class="form-error">Please input a valid email</span>
                            </div>
                            <div class="form-element">
                                <label for="address">Street Address<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="address" id="address"
                                    placeholder="Input your address">
                                <span class="form-error">Please input an address</span>
                            </div>
                            <div class="flex gap-4">
                                <div class="form-element flex-grow min-w-20">
                                    <label for="city">City<span class="text-red-500">*</span></label>
                                    <input required class="form-field" type="text" name="city" id="city"
                                        placeholder="Input your city">
                                    <span class="form-error">Please input a city</span>
                                </div>
                                <div class="form-element">
                                    <label for="region">Region<span class="text-red-500">*</span></label>
                                    <input required class="form-field" type="text" name="region" id="region"
                                        placeholder="Input your region here">
                                    <span class="form-error">Select a region</span>
                                </div>
                            </div>
                            <div class="form-element flex-grow">
                                <label for="postal_code">Postal Code<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="postal_code" id="postal_code"
                                    placeholder="Input your postal code">
                                <span class="form-error">Please input a valid Postal Code</span>
                            </div>
                            <div class="flex justify-end gap-4 md:mt-8">
                                <div class="flex justify-end py-2 md:py-0">
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
    <script src="scripts/form_control.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <main class="prose max-w-none py-2">
                <h1>Feedback Form</h1>
                <p><span class="text-red-500">*</span> indicates the field is required</p>
                <form id="form" class="form-control" action="pages/process_feedback.php" method="post" novalidate>
                    <div class="flex flex-col lg:flex-row flex-wrap gap-4">
                        <section class="flex-1 gap-4">
                            <div class="flex gap-4">
                                <div class="form-element w-32">
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
                                    <label for="fName">First Name<span class="text-red-500">*</span></label>
                                    <input required pattern="^[A-Za-z]+$" class="form-field" type="text" name="fName"
                                        id="fName" placeholder="First Name">
                                    <span class="form-error">Please input a first name</span>
                                </div>
                            </div>
                            <div class="form-element">
                                <label for="lName">Last Name<span class="text-red-500">*</span></label>
                                <input required pattern="^[A-Za-z]+$" class="form-field" type="text" name="lName"
                                    id="lName" placeholder="Last Name">
                                <span class="form-error">Please input a last name</span>
                            </div>
                            <div class="form-element">
                                <label for="email">Email<span class="text-red-500">*</span></label>
                                <input required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-field"
                                    type="email" name="email" id="email" placeholder="yourname@example.com">
                                <span class="form-error">Please input a valid email</span>
                            </div>
                            <div class="form-element">
                                <label for="phone">Phone number</label>
                                <input pattern="^(\d{3}-)?\d{3}-\d{4}$" class="form-field" type="tel" name="phone"
                                    id="phone" placeholder="###-###-####">
                                <span class="form-error">Please input a valid phone number</span>
                            </div>
                        </section>
                        <section class="flex-1 gap-4">
                            <div class="form-element">
                                <label for="subject">Subject<span class="text-red-500">*</span></label>
                                <input required class="form-field" type="text" name="subject" id="subject"
                                    placeholder="Add a subject">
                                <span class="form-error">Please input a subject</span>
                            </div>
                            <div class="form-element mt-1">
                                <label for="message">Message<span class="text-red-500">*</span></label>
                                <textarea required class="form-field resize-none" rows="7" name="message" id="message"
                                    placeholder="Tell us how we did!"></textarea>
                                <span class="form-error">Please input a message</span>
                            </div>
                            <div class="form-element">
                                <div class="flex justify-end items-center py-1">
                                    <label for="reply">Want to receive a follow-up email?</label>
                                    <input class="mt-1 ml-1" type="checkbox" name="reply" id="reply">
                                </div>
                                <div class="flex justify-end gap-4">
                                    <input type="reset" value="Reset" class="submit-button">
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
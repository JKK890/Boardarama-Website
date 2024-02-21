<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <h1>Feedback Form</h1>
                <form action="post">
                    <div class="flex flex-col lg:flex-row flex-wrap gap-4">
                        <section class="flex-1 gap-4">
                            <div class="flex gap-4">
                                <div class="form-element w-20">
                                    <label for="prefix">Prefix</label>
                                    <select required class="rounded bg-gray-200" id="prefix" name="prefix">
                                        <option value selected disabled hidden></option>              
                                        <option value="Mrs">Mrs.</option>
                                        <option value="Mrs">Ms.</option>
                                        <option value="Mr">Mr.</option>
                                        <option value="Dr">Dr.</option>
                                    </select>
                                </div>
                                <div class="flex-grow form-element">
                                    <label for="fName">First Name</label>
                                    <input required pattern="^[A-Z][A-Za-z]*$" class="form-field" type="text" id="fName" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-element">
                                <label for="lName">Last Name</label>
                                <input required pattern="^[A-Z][A-Za-z]*$" class="form-field" type="text" id=lName" placeholder="Last Name">
                            </div>
                            <div class="form-element">
                                <label for="email">Email</label>
                                <input required pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$" class="form-field" type="email" id="email"
                                    placeholder="yourname@example.com">
                            </div>
                            <div class="form-element">
                                <label for="phone">Phone number</label>
                                <input pattern="^(\d{3}-)?\d{3}-\d{4}$" class="form-field" type="tel" id="phone" placeholder="(###)###-####">
                            </div>
                        </section>
                        <section class="flex-1 gap-4">
                            <div class="form-element">
                                <label for="subject">Subject</label>
                                <input required class="form-field" type="text" id="subject" placeholder="Add a subject">
                            </div>
                            <div class="form-element mt-1">
                                <label for="message">Message</label>
                                <textarea required class="form-field" rows="7" id="message"
                                    placeholder="Tell us how we did!"></textarea>
                            </div>
                            <div class="form-element">
                                <div class="flex justify-end items-center py-1">                                
                                    <label for="reply">Want to receive follow-up emails?</label>
                                    <input class="mt-1 ml-1" type="checkbox" id="reply">
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
</body>

</html>
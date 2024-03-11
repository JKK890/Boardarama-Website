<?php
function sanitize($param)
{
    $param = trim($param);
    $param = stripslashes($param);
    $param = htmlspecialchars($param);
    return $param;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: 500.php");
    exit;
}

$prefix = sanitize($_POST["prefix"]);
$fName = sanitize($_POST["fName"]);
$lName = sanitize($_POST["lName"]);
$email = sanitize($_POST["email"]);
$phone = !empty($_POST["phone"]) ? sanitize($_POST["phone"]) : "Not provided";
$subject = sanitize($_POST["subject"]);
$message = sanitize($_POST["message"]);
$reply = isset($_POST["reply"]) ? sanitize($_POST["reply"]) : "";

if (!preg_match("/^[A-Za-z]+$/", $fName)) {
    die("bad first name");
}
if (!preg_match("/^[A-Za-z]+$/", $lName)) {
    die("bad last name");
}
if (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/", $email)) {
    die("bad email");
}
if ($phone !== "Not provided" && !preg_match("/^(\d{3}-)?\d{3}-\d{4}$/", $phone)) {
    die("bad phone number");
}

$emailHeaderBusiness = "Message from $email";
$emailTemplateBusiness =
    "
From: $prefix $fName $lName
E-mail: $email
Phone number: $phone

Subject: $subject
Message: $message
";

$emailHeaderClient = "Message from u50@mail.cs.smu.ca  ";
$emailTemplateClient =
    "
Hello $prefix $lName  
Your message has been successfully received! This is the message you sent:
 
----
$emailTemplateBusiness
----
 
Thank you for your feedback, from the culinary board game freaks at Boardarama  
";

if ($reply !== "") {
    $emailTemplateClient .= "We will follow-up this email soon.";
}

mail("u50@mail.cs.smu.ca", $subject, $emailTemplateBusiness, $emailHeaderBusiness);
mail($email, "RE:$subject", $emailTemplateClient, $emailHeaderClient);

$html = str_replace("\r\n", "<br>", $emailTemplateClient);

$fileVar = fopen("../data/feedback.txt", "a")
    or die("Error: Could not open log file.");
fwrite($fileVar, "\n\n")
    or die("Error: Could not write divider to log file.");
fwrite($fileVar, "Date received " . date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to log file.");
fwrite($fileVar, $emailTemplateBusiness)
    or die("Error: Could not write message to log file");
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../common/head.php'; ?>

<body>
    <div class="content">
        <div>
            <?php include '../common/header.php'; ?>
            <?php include '../common/taskbar.html'; ?>
            <main class="prose max-w-none py-2">
                <h1>Feedback Received</h1>
                <div class="pb-2">
                    <?php echo $html ?>
                </div>
            </main>
        </div>
        <?php include '../common/footer.html'; ?>
    </div>
</body>

</html>
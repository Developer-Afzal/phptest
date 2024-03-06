<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email address where you want to receive the inquiry
    $to = 'afzalansari891@gmail.com';
    $subject = 'New Inquiry from Contact Form';

    // Compose the message
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    $success = mail($to, $subject, $message_body);

    if ($success) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'Sorry, there was a problem sending your message.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

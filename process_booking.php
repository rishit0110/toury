<link rel="stylesheet" href="styles.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];

    // Here you can add code to save the booking details to the database or send a confirmation email

    echo "Thank you, $name! Your booking for $destination has been received.";
} else {
    echo "Invalid request.";
}
?>
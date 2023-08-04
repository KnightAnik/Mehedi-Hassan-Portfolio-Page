if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the email
    $to = "anik.13seeker@gmail.com"; // Replace with the recipient's Gmail address
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
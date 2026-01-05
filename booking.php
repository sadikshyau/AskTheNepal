<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect Form Data
    $name = $_POST['fullname'];
    $customer_email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $date = $_POST['trek_date'];
    $emergency = $_POST['emergency_contact'];
    $adventure = $_POST['adventure_type'];
    $health = $_POST['health_info'];

    $admin_email = "lsadikshya5@gmail.com"; // YOUR EMAIL HERE
    $subject_admin = "New Booking: $adventure by $name";
    
    // Email Content for Admin
    $message_admin = "
    New Booking Details:
    --------------------------
    Name: $name
    Age: $age
    Email: $customer_email
    Phone: $phone
    Adventure: $adventure
    Planned Date: $date
    Emergency Contact: $emergency
    Health Condition: $health
    ";

    // Email Content for Customer
    $subject_customer = "Booking Confirmation - Ask The Nepal Adventure";
    $message_customer = "
    Namaste $name,
    
    Your booking for $adventure on $date has been received! 
    Our team will review your details and contact you shortly to finalize the trip.
    
    Thank you for choosing Ask The Nepal Adventure.
    ";

    // Send to Admin
    mail($admin_email, $subject_admin, $message_admin);

    // Send to Customer
    mail($customer_email, $subject_customer, $message_customer);

    // Success Message
    echo "<h1>Booking Successful! Please check your email for confirmation.</h1>";
}
?>
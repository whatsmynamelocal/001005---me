<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Collect and sanitize form data 
    $besroom = htmlspecialchars($_POST['besroom']); 
    // $email = htmlspecialchars($_POST['email']); 
 
    // Output the data (or process it as needed) 
    echo "besroom: " . $besroom . "<br>"; 
    // echo "Email: " . $email; 
} else { 
    echo "Invalid request method."; 
} 
?> 
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    echo "<h2>Registration Successful</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";

    exit(); // Stop showing the form again
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">
    Name: <br>
    <input type="text" name="name" required><br><br>

    Email: <br>
    <input type="email" name="email" required><br><br>

    Password: <br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Register</button>
</form>

</body>
</html>


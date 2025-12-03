<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        echo "Pogrešan email ili lozinka!";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Prijava</h2>
    <form method="post">
        Email: <input type="text" name="email" required><br>
        Šifra: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Registracija uspješna! Možete se prijaviti.";
    } else {
        echo "Greška: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Registracija</title></head>
<body>
    <h2>Registracija</h2>
    <form method="post">
        Email: <input type="text" name="email" required><br>
        Šifra: <input type="password" name="password" required><br>
        <button type="submit">Registriraj se</button>
    </form>
</body>
</html>
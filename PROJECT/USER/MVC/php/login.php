<?php
$username = "";
$usernameError = $passwordError = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $usernameError = "Username is required";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordError = "Password is required";
    }

    if (empty($usernameError) && empty($passwordError)) {
        $successMessage = "Login successful!";
        $username = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../Css/login.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>

    <form method="post" action="">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php $username ?>">
            <span class="error"><?php $usernameError ?></span>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" value="">
            <span class="error"><?php $passwordError ?></span>
        </div>

        <button type="submit">Login</button>
    </form>

    <?php
    if (!empty($successMessage)) {
        echo "<p class='success'>" . $successMessage . "</p>";
    }
    ?>

    <p class="register-text">
        Not registered yet? <a href="../php/register.php">Register here</a>
    </p>
</div>

</body>
</html>

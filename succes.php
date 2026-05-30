<?php
session_start();

if (!isset($_SESSION['register_success'])) {
    header("Location: register.php");
    exit;
}

$ucp = $_SESSION['ucp'];
$pin = $_SESSION['pin'];

unset($_SESSION['register_success']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="card">

    <h2>Registration Successful</h2>

    <p>UCP Account:</p>
    <h3><?= htmlspecialchars($ucp) ?></h3>

    <p>Your Verification PIN:</p>
    <h1><?= $pin ?></h1>

    <p>
        Join Discord server and use:
    </p>

    <code>/verify <?= $pin ?></code>

    <br><br>

    <a href="login.php">
        <button>Login</button>
    </a>

</div>

</body>
</html>
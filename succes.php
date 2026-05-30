<?php

session_start();

if(
    !isset($_SESSION['pin']) ||
    !isset($_SESSION['ucp'])
){
    header("Location: register.php");
    exit;
}

$pin = $_SESSION['pin'];
$ucp = $_SESSION['ucp'];

session_destroy();

?>

<!DOCTYPE html>
<html>
<head>

<title>Success</title>

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Registration Successful</h1>

        <p>
            UCP:
            <b><?=htmlspecialchars($ucp)?></b>
        </p>

        <br>

        <p>
            Verification PIN:
        </p>

        <h2>
            <?= $pin ?>
        </h2>

        <br>

        <p>
            Join Discord Server
        </p>

        <p>
            Use:
        </p>

        <code>
            /verify <?= $pin ?>
        </code>

    </div>

</div>

</body>
</html>
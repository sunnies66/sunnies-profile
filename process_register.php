<?php

session_start();

require 'config/database.php';

$ucp      = trim($_POST['ucp']);
$email    = trim($_POST['email']);
$password = $_POST['password'];
$confirm  = $_POST['confirm'];

if(empty($ucp) || empty($email) || empty($password))
{
    die("Field kosong");
}

if($password != $confirm)
{
    die("Password tidak sama");
}

if(strlen($password) < 8)
{
    die("Password minimal 8 karakter");
}

if(!preg_match('/^[A-Za-z0-9_]+$/', $ucp))
{
    die("Format UCP tidak valid");
}

$stmt = $conn->prepare(
"SELECT id FROM playerucp WHERE UCP=?"
);

$stmt->bind_param("s", $ucp);

$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0)
{
    die("UCP sudah digunakan");
}

$emailCheck = $conn->prepare(
"SELECT id FROM playerucp WHERE email=?"
);

$emailCheck->bind_param("s", $email);

$emailCheck->execute();

$emailResult = $emailCheck->get_result();

if($emailResult->num_rows > 0)
{
    die("Email sudah digunakan");
}

$hash = password_hash(
    $password,
    PASSWORD_BCRYPT
);

$pin = rand(
    100000,
    999999
);

$discord = "0";

$verified = 0;

$insert = $conn->prepare(
"
INSERT INTO playerucp
(
    UCP,
    Password,
    email,
    Discord,
    VerifyPin,
    Verified
)
VALUES
(
    ?,
    ?,
    ?,
    ?,
    ?,
    ?
)
"
);

$insert->bind_param(
    "ssssii",
    $ucp,
    $hash,
    $email,
    $discord,
    $pin,
    $verified
);

if(!$insert->execute())
{
    die($conn->error);
}

$_SESSION['pin'] = $pin;
$_SESSION['ucp'] = $ucp;

header("Location: success.php");
exit;
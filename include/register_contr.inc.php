<?php

declare(strict_types=1);

function saveError(string $msg)
{
    $_SESSION["register_error"] = $msg;
    header("Location: ../register.php");
    exit;
}

function emptyInputs(string $email, string $username, string $pwd)
{
    return empty($email) || empty($username) || empty($pwd);
}

function invalidEmail(string $email)
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function passwordTooShort(string $pwd)
{
    return mb_strlen($pwd) <= 3 || mb_strlen($pwd) >= 255;
}

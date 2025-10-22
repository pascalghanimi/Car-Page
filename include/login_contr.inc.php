<?php

declare(strict_types=1);

function saveError(string $msg): void
{
    $_SESSION["login_error"] = $msg;
    header("Location: ../login.php");
    exit;
}

function emptyInputs(string $email, string $pwd): bool
{
    return empty($email) || empty($pwd);
}

function invalidPassword(string $pwd): bool
{
    return mb_strlen($pwd) <= 3 || mb_strlen($pwd) >= 255;
}

function invalidEmail(string $email): bool
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function wrongPassword(string $pwd, string $hashedPassword): bool
{
    return !password_verify($pwd, $hashedPassword);
}

<?php

declare(strict_types=1);

function saveError(string $msg)
{
    $_SESSION["contact_error"] = $msg;
    header("Location: ../contact.php#contact-form");
    exit;
}

function emptyInputs(string $email, string $message): bool
{
    return empty($email) || empty($message);
}

function invalidEmail(string $email)
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function saveSuccess($msg)
{
    $_SESSION["contact_success"] = $msg;
}

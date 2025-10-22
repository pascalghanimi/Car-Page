<?php

declare(strict_types=1);

function emailInUse(PDO $pdo, string $email): bool
{
    $query = "SELECT email FROM users WHERE email = :email LIMIT 1;";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":email", $email);
    $stmt->execute();

    return (bool)$stmt->fetchColumn();
}

function usernameInUse(PDO $pdo, string $username): bool
{
    $query = "SELECT username FROM users WHERE username = :username LIMIT 1;";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":username", $username);
    $stmt->execute();

    return (bool)$stmt->fetchColumn();
}

function createUser(PDO $pdo, string $email, string $username, string $pwd)
{
    $query = "INSERT INTO users (email, username, pwd) VALUES (:email, :username, :pwd)";

    $hashedPassword = password_hash($pwd, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":username", $username);
    $stmt->bindValue(":pwd", $hashedPassword);
    $stmt->execute();

    return $pdo->lastInsertId();
}

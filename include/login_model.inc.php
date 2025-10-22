<?php

declare(strict_types=1);

function fetchUser(PDO $pdo, string $email): array | bool
{
    $query = "SELECT * FROM users WHERE email = :email LIMIT 1;";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":email", $email);
    $stmt->execute();

    return $stmt->fetch();
}

<?php

declare(strict_types=1);

function saveComment(PDO $pdo, string $comment): void
{
    $query = "INSERT INTO comments (userId, comment) VALUES (:userId, :comment);";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":comment", $comment);
    $stmt->bindValue(":userId", $_SESSION["user_id"]);
    $stmt->execute();
}

function getComments(PDO $pdo): array | bool
{
    $query = "SELECT c.created_at AS time, c.id AS id, c.comment AS comment, c.created_at AS created_at, u.username AS username
    FROM comments c LEFT JOIN users u ON u.id = c.userId ORDER BY created_at DESC LIMIT 5;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

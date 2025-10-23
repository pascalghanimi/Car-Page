<?php

declare(strict_types=1);

function submitMessage(PDO $pdo, string $email, string $firstName, string $lastName, string $topic, string $message): void
{
    $query = "INSERT INTO submissions (email, firstName, lastName, topic, message) VALUES (:email, :firstName, :lastName, :topic, :message);";

    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":firstName", $firstName);
    $stmt->bindValue(":lastName", $lastName);
    $stmt->bindValue(":topic", $topic);
    $stmt->bindValue(":message", $message);

    $stmt->execute();
}

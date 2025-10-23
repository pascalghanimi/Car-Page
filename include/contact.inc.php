<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $firstName = trim($_POST["first-name"]);
    $lastName = trim($_POST["last-name"]);
    $topic = trim($_POST["topic"]);
    $message = trim($_POST["message"]);

    require_once "dbh.inc.php";
    require_once "session_config.inc.php";
    require_once "contact_model.inc.php";
    require_once "contact_contr.inc.php";

    try {
        if (emptyInputs($email, $message)) {
            saveError("Fill out Email and Message");
        }
        if (invalidEmail($email)) {
            saveError("Enter a valid email!");
        }

        submitMessage($pdo, $email, $firstName, $lastName, $topic, $message);
        saveSuccess("We will get back to you as fast as possible!");
        header("Location: ../contact.php#contact-form");
        exit;
    } catch (PDOException $e) {
        error_log("Error: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: ../contact.php");
    exit;
}

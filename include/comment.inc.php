<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $comment = trim($_POST["comment"]);

    require_once "dbh.inc.php";
    require_once "session_config.inc.php";
    require_once "comment_model.inc.php";
    require_once "comment_contr.inc.php";

    try {
        if (inputEmpty($comment)) {
            saveError("Please enter a comment!");
        }
        if (!isset($_SESSION["user_id"])) {
            saveError("Please log in to comment!");
        }

        saveComment($pdo, $comment);

        saveSuccess("Thanks for your comment!");
        header("Location: ../index.php#comments");
        exit;
    } catch (PDOException $e) {
        error_log("Error: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: ../index.php#comments");
    exit;
}

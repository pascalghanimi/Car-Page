<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $pwd = $_POST["password"];

    require_once "dbh.inc.php";
    require_once "session_config.inc.php";
    require_once "register_model.inc.php";
    require_once "register_contr.inc.php";

    try {
        if (emptyInputs($email, $username, $pwd)) {
            saveError("Please fill out all of the fields!");
        }
        if (invalidEmail($email)) {
            saveError("Please enter a valid email!");
        }
        if (passwordTooShort($pwd)) {
            saveError("Password must be between 4 and 254 characters!");
        }
        if (emailInUse($pdo, $email)) {
            saveError("Email already in use!");
        }
        if (usernameInUse($pdo, $username)) {
            saveError("Username already in use!");
        }

        $userId = createUser($pdo, $email, $username, $pwd);
        session_regenerate_id(true);
        $_SESSION["user_id"] = $userId;
        $_SESSION["username"] = $username;
        header("Location: ../index.php");
        exit;
    } catch (PDOException $e) {
        error_log("Error: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: /car/register.php");
    exit;
}

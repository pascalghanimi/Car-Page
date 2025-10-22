<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $pwd = $_POST["password"];

    require_once "dbh.inc.php";
    require_once "session_config.inc.php";
    require_once "login_model.inc.php";
    require_once "login_contr.inc.php";

    try {
        if (emptyInputs($email, $pwd)) {
            saveError("Fill out all of the input fields!");
        }
        if (invalidPassword($pwd)) {
            saveError("Invalid password!");
        }
        if (invalidEmail($email)) {
            saveError("Invalid email!");
        }

        $result = fetchUser($pdo, $email);
        if (!$result) {
            saveError("Wrong email or password!");
        }
        if (wrongPassword($pwd, $result["pwd"])) {
            saveError("Wrong email or password!");
        }

        session_regenerate_id(true);
        $_SESSION["user_id"] = $result["id"];
        header("Location: ../index.php");
        exit;
    } catch (PDOException $e) {
        error_log("Error: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: ../login.php");
}

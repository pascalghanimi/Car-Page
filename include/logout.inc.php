<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION = [];

    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        "",
        time() - 3600,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );

    session_destroy();

    header("Location: ../register.php");
    exit;
} else {
    header("Location: ../index.php");
    exit;
}

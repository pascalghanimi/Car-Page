<?php
require_once "include/session_config.inc.php";
require_once "include/login_view.inc.php";

if (isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha Login</title>
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <?php include "components/topbar.php" ?>
    <form action="include/login.inc.php" method="post">
        <h2>Sign in</h2>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" class="signin-btn">Sign in</button>
        <?php showError() ?>
        <div class="or-container">
            <span></span>
            <p>Or</p>
            <span></span>
        </div>
        <a href="register.php" class="switch-page-btn">Sign up</a>
    </form>
</body>

</html>
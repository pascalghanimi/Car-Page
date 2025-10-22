<?php
require_once "include/session_config.inc.php";
require_once "include/register_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha - Register</title>
    <link rel="stylesheet" href="styles/register.css">
</head>

<body>
    <?php include "components/topbar.php" ?>
    <form action="include/register.inc.php" method="post">
        <h2>Sign up</h2>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit" class="signup-btn">Sign up</button>
        <?php showError() ?>
        <div class="or-container">
            <span></span>
            <p>Or</p>
            <span></span>
        </div>
        <a href="login.php" class="switch-page-btn">Sign in</a>
    </form>
</body>

</html>
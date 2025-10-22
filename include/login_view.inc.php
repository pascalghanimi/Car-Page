<?php


function showError()
{
    if (!isset($_SESSION["login_error"])) return;
    echo "<p class='error'>" . $_SESSION["login_error"] . "</p>";
    unset($_SESSION["login_error"]);
}

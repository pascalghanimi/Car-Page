<?php

function showError()
{
    if (!isset($_SESSION["contact_error"])) return;
    echo "<p class='error'>" . $_SESSION["contact_error"] . "</p>";
    unset($_SESSION["contact_error"]);
}

function showSuccess()
{
    if (!isset($_SESSION["contact_success"])) return;
    echo "<p class='success'>" . $_SESSION["contact_success"] . "</p>";
    unset($_SESSION["contact_success"]);
}

<?php

function showError()
{
    if (!isset($_SESSION["register_error"])) return;
    echo "<p class='error'>" . $_SESSION["register_error"] . "</p>";
    unset($_SESSION["register_error"]);
}

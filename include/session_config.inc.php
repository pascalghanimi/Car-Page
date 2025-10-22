<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);
ini_set("session.gc_maxlifetime", 1800);

session_set_cookie_params([
    "lifetime" => 1800,
    "path" => "/",
    "secure" => false,
    "httponly" => true,
    "samesite" => "Lax"
]);

session_start();

if (!isset($_SESSION["last_regeneration"])) {
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
} else {
    $interval = 60 * 30;

    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        session_regenerate_id(true);
        $_SESSION["last_regeneration"] = time();
    }
}

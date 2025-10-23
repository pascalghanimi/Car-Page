<?php

declare(strict_types=1);

function showError()
{
    if (!isset($_SESSION["comment_error"])) return;
    echo "<p class='error'>" . $_SESSION["comment_error"] . "</p>";
    unset($_SESSION["comment_error"]);
}

function showSuccess()
{
    if (!isset($_SESSION["success_message"])) return;
    echo "<p class='success'>" . $_SESSION["success_message"] . "</p>";
    unset($_SESSION["success_message"]);
}



function displayComment(PDO $pdo)
{
    $rows = getComments($pdo);
    if (!$rows) return;
    foreach ($rows as $row) {
        echo '
        <div class="comment-container">
            <div class="comment-top-container">
                <p class="username">' . htmlspecialchars($row["username"]) . '</p>
                <p class="time">' . htmlspecialchars(time_ago($row['time'])) . '</p>
            </div>
            <p class="comment">' . htmlspecialchars($row["comment"]) . '</p>
        </div>';
    }
}

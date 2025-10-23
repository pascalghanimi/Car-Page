<?php

declare(strict_types=1);

function inputEmpty(string $comment)
{
    return empty($comment);
}

function saveError(string $msg)
{
    $_SESSION["comment_error"] = $msg;
    header("Location: ../index.php#comments");
    exit;
}

function saveSuccess(string $msg)
{
    $_SESSION["success_message"] = $msg;
}

function time_ago(string $datetime): string
{
    $ts = is_numeric($datetime) ? (int)$datetime : strtotime($datetime);
    if ($ts === false) return '';

    $diff = time() - $ts;
    if ($diff < 5) return 'just now';
    $units = [
        31536000 => 'year',
        2592000  => 'month',
        604800   => 'week',
        86400    => 'day',
        3600     => 'hour',
        60       => 'minute',
        1        => 'second',
    ];
    foreach ($units as $secs => $label) {
        if ($diff >= $secs) {
            $val = (int) floor($diff / $secs);
            return $val . ' ' . $label . ($val > 1 ? 's' : '') . ' ago';
        }
    }
    return '';
}

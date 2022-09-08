<?php
foreach (file('/home/hrexdlvc/courses/.env', 6) as $line) {
    $explode = explode('=', $line, 2);
    $_ENV[$explode[0]] = trim($explode[1], '"\'');
}
/** @var mysqli $connect */
$connect = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

function getInvoiceById(int $id)
{
    /** @var mysqli $connect */
    global $connect;

    return $connect->query("SELECT * FROM payments WHERE id = {$id} limit 1")->fetch_assoc();
}

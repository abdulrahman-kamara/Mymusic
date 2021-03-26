<?php
if (!function_exists('is_connected')) {

    function is_connected(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return !empty($_SESSION['admin']);
    }
}

if (!function_exists('create')) {
    function create(string $email, string $password): bool
    {
        require "./database/db_conn.php";

        $sql = 'INSERT INTO login (email, password) VALUES (:mail, :password)';
        $User = $db->prepare($sql);
        $User->bindValue(":email", $email, PDO::PARAM_STR);
        $User->bindValue(":password", $password, PDO::PARAM_STR);
        $response = $User->execute();
        return $response;
    }
}

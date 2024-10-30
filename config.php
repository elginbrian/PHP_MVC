<?php
class Database {
    private static $dbHost = 'localhost';
    private static $dbName = 'mvc_crud';
    private static $dbUsername = 'root';
    private static $dbPassword = '';

    public static function connect() {
        try {
            $conn = new PDO("mysql:host=".self::$dbHost.";dbname=".self::$dbName, self::$dbUsername, self::$dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
    }
}
?>

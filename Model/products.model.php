<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('db_connect.model.php');

class Products extends db_connect
{
    function catalog($order){
        try{
            $query = "SELECT * FROM products ORDER BY $order";
            $result = $this->pdo->prepare($query);
            $result->execute();
            $results = $result->fetchAll();
            return $results;
        } catch (PDOException $e) {
            echo "General Error: " . $e->getMessage();
        }
    }

}

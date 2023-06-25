<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$order_input = isset($_POST['order']) ? $_POST['order'] : 'name_asc';

switch ($order_input){
    case "name_asc":
        $order = "nom ASC";
        break;
    case 'name_desc':
        $order = "nom DESC";
        break;
    case 'code_asc':
        $order = "code_bar ASC";
        break;
    case 'code_desc':
        $order = "code_bar DESC";
        break;
    case 'stock_asc':
        $order = "stock ASC";
        break;
    case 'stock_desc':
        $order = "stock DESC";
        break;
    default:
        $order = "";
        break;
}

include("../Model/products.model.php");
$var = new Products();
$results = $var->catalog($order);

// average stock
$sum = 0;
foreach($results as $result){
    $sum += $result['stock'];
}
$avg = intval($sum / count($results));

require_once('../View/catalog.view.php');
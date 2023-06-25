<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('header.view.php');
?>

<div class="test">
    <div class="vue avg-stock">Stock moyen : <?=$avg?></div>
    <div class="search">
        <a href="./list" class="vue ">Vue Liste</a>
        <a href="#"class="vue active">Vue Cartes</a>
        <form action='./catalog' method='POST'>
        <select class="form-order" name='order'>
            <option value='name_asc' <?php echo $order_input == 'name_asc' ? "selected" : "" ?>>Nom croissant</option>
            <option value='name_desc' <?php echo $order_input == 'name_desc' ? "selected" : "" ?>>Nom décroissant</option>
            <option value='code_asc' <?php echo $order_input == 'code_asc' ? "selected" : "" ?>>Code Bar croissant</option>
            <option value='code_desc' <?php echo $order_input == 'code_desc' ? "selected" : "" ?>>Code Bar décroissant</option>
            <option value='stock_asc' <?php echo $order_input == 'stock_asc' ? "selected" : "" ?>>Stock croissant</option>
            <option value='stock_desc' <?php echo $order_input == 'stock_desc' ? "selected" : "" ?>>Stock décroissant</option>
            </select>
            <input class="form-submit" type='submit' value='Submit'>
        </form>
    </div>
</div>

<div class="catalog">
<?php foreach ($results as $product) : ?>
    <div class="product">
        <div class="product-aisle"><?= $product['rayon']?></div>
        <img class="product-image" src="./images/<?= $product['image']?>">
        <div class="product-info">
            <div class="product-brand"><b><?= $product['marque']?></b></div>
            <div class="product-title"> <?= $product['nom']?></div>
            <div class="product-numbers">
                <div class="product-code"><?= $product['code_bar']?></div>
                <div class="product-stock"><?= $product['stock']?></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<div>

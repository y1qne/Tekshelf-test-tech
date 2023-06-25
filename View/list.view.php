<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('header.view.php');
?>
<div class="test">
    <div class="vue avg-stock">Stock moyen : <?=$avg?></div>
    <div class="search">
        <a href="#" class="vue active">Vue Liste</a>
        <a href="./catalog"class="vue">Vue Cartes</a>
        <form action='./list' method='POST'>
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

<div class="list-catalog-wrapper">
    <div class="list-catalog">
        <div class="list list-head">
            <div>Image</div>
            <div>Rayon</div>
            <div>Marque</div>
            <div>Nom</div>
            <div>Code Bar</div>
            <div>Stock</div>
        </div>
        <?php foreach ($results as $product) : ?>
            <div class="list">
                <div><img class="list-product-image" src="./images/<?= $product['image']?>"></div>
                <div><?= $product['rayon']?></div>
                <div><?= $product['marque']?></div>
                <div><?= $product['nom']?></div>
                <div><?= $product['code_bar']?></div>
                <div><?= $product['stock']?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

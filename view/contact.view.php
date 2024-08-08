<?php require "view/partials/header.php"?>
    <h1>Contact</h1>
    <ul>
        <?php foreach($menus as $menu): ?>
            <li>
            <?= $menu['category']?>
            </li>
            <?php endforeach;?>
    </ul>
<?php require "view/partials/footer.php"?>
<?php require "view/partials/header.php"?>
    <ul>
        <?php foreach($menus as $menu): ?>
            <li>
            <?= $menu['category']?>
            </li>
            <?php endforeach;?>
    </ul>
    <h1>Add Name</h1>
    <form action="order" method="POST">
        <input type="text" name="name" >
        <input type="submit" value="submit">
    </form>
    <h1>Update</h1>
    <form action="order" method="POST">
        <input type="text" name="update" >
        <input type="submit" value="submit">
    </form>
    <h1>Delete</h1>
    <form action="order" method="POST">
        <input type="text" name="delete" >
        <input type="submit" value="submit">
    </form>
<?php require "view/partials/footer.php"?>

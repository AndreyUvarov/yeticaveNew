<?php
require 'functions.php';

/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;

    if (isset($_FILES['lot_img']['name'])) {
        $path = $_FILES['lot_img']['name'];
        $res = move_uploaded_file($_FILES['lot_img']['tmp_name'], 'uploads/' . $path);
    }

    print_r($_FILES);
    print_r("\n");
    print_r($_POST);

    if (isset($path)) {
        $lot['path'] = $path;
    }
}
*/
if ($_POST) {
    $lot = $_POST;
    $main_content = render('templates/lot.php', [
        'name' => $lot['lot-name'],
        'categories' => $lot['category'],
        'message' => $lot['message'],
        'lot_step' => $lot['lot_step'],
        'lot_date' => $lot['lot_date'],
        'price' => $lot['price']
    ]);
}
else {$main_content = render('templates/add.php', []);}


$page_content = render('templates/layout.php', [
    'main_content' => $main_content,
    'page_name' => 'Yeticave Добавление лота'
]);
print($page_content);

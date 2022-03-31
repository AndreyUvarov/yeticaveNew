<?php
require_once 'functions.php';
require 'lotsData.php';





$lot = NULL;

if (isset($_GET['lot'])) {
    $lot = $_GET['lot'];
}

if (!$lot) {
    http_response_code(404);
}


$main_content = render('templates/lot.php', [
    'name' => $lot_list[$lot]['name'],
    'url' => $lot_list[$lot]['url'],
    'categories' => $lot_list[$lot]['categories']
]);

$page_content = render('templates/layout.php', [
    'main_content' => $main_content,
    'page_name' => 'Yeticave Просмотр лота'
]);
print($page_content);

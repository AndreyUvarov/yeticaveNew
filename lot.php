<?php
require_once 'functions.php';
require 'lotsData.php';





$numLot = NULL;

if (isset($_GET['lot'])) {
    $numLot = $_GET['lot'];
    /*     Данные из формы     */
    


    $main_content = render('templates/lot.php', [
        'name' => $lot_list[$numLot]['name'],
        'url' => $lot_list[$numLot]['url'],
        'categories' => $lot_list[$numLot]['categories']
    ]);
    $page_content = render('templates/layout.php', [
        'main_content' => $main_content,
        'page_name' => 'Yeticave Просмотр лота'
    ]);
    print($page_content);
}
    http_response_code(404);


<?php

require_once 'functions.php';
require_once 'lotsData.php';
$main_content = render ('templates/index.php',[]);
$page_content = render('templates/layout.php',[
    'main_content' => $main_content,
    'page_name' =>'Yeticave Главная'
]);
print_r($page_content);

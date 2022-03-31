<?php
require_once 'functions.php';

$main_content = render('templates/add.php', []);

$page_content = render('templates/layout.php', [
    'main_content' => $main_content,
    'page_name' => 'Yeticave Добавление лота'
]);
print($page_content);

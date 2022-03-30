<?php

require_once 'functions.php';
$main_content = render ('templates/index.php',[]);
print render('templates/layout.php',['main_content' => $main_content]);

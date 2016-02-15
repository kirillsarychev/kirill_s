<?php
function __autoload($class_name) {
    $file = "library/${class_name}.php";
    if (file_exists($file)) {
        include_once $file;
    }
}
$head= include_once './includes/head.php';
if(array_key_exists('admin',$_GET)){
    $page=new AdminPage($head, 'mysite', 'mello in admin page');
    
} else {
    $page=new Page($head, 'megaCool', 'Знаете ли вы...');
}
$page->render();
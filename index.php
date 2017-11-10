<?php
if (isset($_GET['p'])) {
    $page = $_GET['p'];

} else {
    $page = 'home';
}
// var_dump($page);
// die();
ob_start();
if ($page === 'home') {
    include('pages/home.php');
}
// var_dump($page);
// die();

if ($page === 'message') {
    include('pages/message.php');
}
// var_dump($page);
// die();

if ($page === 'users') {
    include('pages/users.php');
}
// var_dump($page);
// die();

if ($page === 'connection') {
    include('pages/connect-shipping-service.php');
}
// var_dump($page);
// die();

if ($page === 'add-users') {
    include('pages/add-users.php');
}
// var_dump($page);
// die();


$content = ob_get_clean();
include('pages/template/default.php');
// var_dump($content); // $content recoit home visiblement
// die();


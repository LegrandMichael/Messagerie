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

if ($page === 'adverts') {
    include('pages/adverts.php');

}
// var_dump($page);
// die();

if ($page === 'users') {
    include('pages/users.php');
}
// var_dump($page);
// die();

if ($page === 'categories') {
    include('pages/categories.php');

}
// var_dump($page);
// die();

if ($page === 'add-users') {
    include('pages/add_users.php');
}
// var_dump($page);
// die();

if ($page === 'search-user') {
    include('pages/search_user.php');
}
// var_dump($page);
// die();

$content = ob_get_clean();
include('pages/template/default.php');
// var_dump($content); // $content recoit home visiblement
// die();


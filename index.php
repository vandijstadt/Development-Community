<?php
if (empty($_SESSION))
    session_start();

include_once('./vue/commun/head.php');
include_once('./vue/commun/menu.php');

echo '<section style="flex: 1 0 auto;">';

if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include_once './vue/home.php';
            break;


        case 'contact':
            include_once './vue/contact.php';
            break;

        case 'equipes':
            include_once './vue/equipes.php';
            break;

        case 'collaborations':
            include_once './vue/collaborations.php';
            break;

        case 'candidature':
            include_once './vue/candidature.php';
            break;

        default:
            include_once './vue/Erreur/Error404.php';
    }
} else {
    include_once './vue/home.php';
}
echo '</section>';
include_once('./vue/commun/foot.php');

?>
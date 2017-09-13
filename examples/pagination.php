<?php
/**
 * Created by PhpStorm.
 * User: sergiocncruz
 * Date: 27/09/16
 * Time: 14:23
 */

include "../vendor/autoload.php";

$pagination = new \SimpleTools\Pagination($_GET['current_page'], $_GET['total_rows'], $_GET['rows_per_page']);

$paginate = $pagination->paginate();

if (empty($paginate['error'])) {
    echo '<li><a href="http://localhost:8000/pagination.php?current_page='.($paginate['first']).'&total_rows='.$_GET['total_rows'].'&rows_per_page='.$_GET['rows_per_page'].'">Primeiras</a></li>';
    foreach($paginate['pages'] as $l) {
        echo '<li><a href="http://localhost:8000/pagination.php?current_page='.$l.'&total_rows='.$_GET['total_rows'].'&rows_per_page='.$_GET['rows_per_page'].'">'. $l .'</a></li>';
    }
    echo '<li><a href="http://localhost:8000/pagination.php?current_page='.$paginate['last'].'&total_rows='.$_GET['total_rows'].'&rows_per_page='.$_GET['rows_per_page'].'">Últimas</a></li>';
} else {
    var_dump($paginate['error']);
}
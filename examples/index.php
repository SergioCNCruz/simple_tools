<?php
/**
 * Created by PhpStorm.
 * User: Sérgio C. N. Cruz
 * Date: 26/02/16
 * Time: 15:06
 */

include "../vendor/autoload.php";

$pagination = new \SimpleTools\Pagination(2, 43, 5);

$paginate = $pagination->paginate();

//var_dump($paginate);

foreach($paginate['pages'] as $l) {
    echo $l['k'] . " > " . $l['l'] . "<br>";
}
/*
$st = new SimpleTools\Date();

$d = date("Y-m-d");
echo "<hr>";
$b = date("d/m/Y");
var_dump($d);
echo "<hr>";
echo $st->revertFormat($d);
echo "<hr>";
echo $st->revertFormat($b);
echo "<hr>";
echo $st->dataExtencion($d);
echo "<hr>";
*/
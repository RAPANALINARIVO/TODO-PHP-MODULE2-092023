<?php
include('fct/items.php');
include('fct/request.php');
include('fct/getItem.php'); 
include('config/app.php');
$items=getitem();

$id=validate($_GET['id']);
var_dump($id);
foreach ( $items as $item) {
    if($item['id']===$id)
    {
        $item['checked']=!$item['checked'];
    }
}

 header('location:index.php');
<?php
include('fct/request.php');
include('fct/getItem.php');
include('config/app.php');

$element=validate($_POST['element']);


// recuperation du contenus
$items =getitem();
$items[] = [
    'id'=>uniqid(),
    'item'=>$element,
    'checked'=>false
    ];

//insertion des donnees ici
file_put_contents(FILE_NAME,serialize($items));

//save items
//redirection vers l'index
header('location:index.php');
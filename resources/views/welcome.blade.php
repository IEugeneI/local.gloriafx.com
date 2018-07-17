
<?php

use App\MenuModel;
use App\SecondMenu;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
$background = 'background.png';
?>

@include('layout/header')
@include('layout/menuandsocial')
@include('layout/mobilemenu')
@include('layout/footer')



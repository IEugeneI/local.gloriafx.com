
<?php

use App\MenuModel;
use App\SecondMenu;

$mainmenu = App\MenuModel::all();
$secondmenu = App\SecondMenu::all();
//$backgroundu = App\mainpagebackgroundModel::all();
foreach ($backgroundu as $back) {
    if ($back->idimage == 1) {
        $background = $back->name;
    }
}
//$background = 'team.jpg';
//$background = 'background.png';
//else{$background = 'background.png';}
?>

@include('layout/header')
@include('layout/menuandsocial')
@include('layout/mobilemenu')
@include('layout/footer')



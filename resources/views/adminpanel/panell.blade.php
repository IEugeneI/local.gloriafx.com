
@include('adminpanel/layout/header')
<?php
$url = substr($_SERVER['REQUEST_URI'], 1);
$uri = explode("/", $url);
?>
@include('adminpanel/layout/menu')
@include('adminpanel/adminsettings/main')
@include('adminpanel/adminsettings/addbackground')
@include('adminpanel/adminsettings/mainmenu')
@include('adminpanel/adminsettings/content')
@include('adminpanel/adminsettings/contentfon')
@include('adminpanel/adminsettings/deletecontent')
@include('adminpanel/adminsettings/updatecontent')
@include('adminpanel/adminsettings/secondmenu')
@include('adminpanel/adminsettings/blogadd')
@include('adminpanel/adminsettings/blogupdate')
@include('adminpanel/adminsettings/blogdelete')
@include('adminpanel/adminsettings/leadershipadd')
@include('adminpanel/adminsettings/leadershipupdate')
@include('adminpanel/adminsettings/leadershipdel')
@include('adminpanel/adminsettings/usersinfo')
@include('adminpanel/layout/footer')

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuModel;
use App\SecondMenu;
use Session;
use Illuminate\Support\Facades\Storage;
use File;

class SecondMenuController extends Controller {

    //
    public function index() {
        if (Session::get('test') == 'ok') {
            $allmenu = SecondMenu::all();
            $allmainmenu = MenuModel::all();
            return view('adminpanel/panell', ["allmenu" => $allmenu, "allmainmenu" => $allmainmenu]);
        } else {
            echo "Вонючий хацкер ничерта у тебя не получится";
        }
    }

    public function adddeleteupdate(Request $request) {
        if (isset($_POST['savesecondmenubutton'])) {
            $mainmenu = MenuModel::all();
            $id = $_POST['idsecondmenu'];
            // $mainmenu =
            $flight = SecondMenu::find($id);
            $flight->name = $_POST['changenamesecond'];
            $flight->http = $_POST['changehttpmenu'];
            foreach ($mainmenu as $log) {
                if ($log->name == $_POST['changemainmenu']) {
                    $flight->mainmenu_id = $log->id;
                }
            }
            $flight->save();
            $allmenu = SecondMenu::all();
            $allmainmenu = MenuModel::all();
            return view('adminpanel/panell', ["allmenu" => $allmenu, "allmainmenu" => $allmainmenu]);
        }
        if (isset($_POST['addsecondmenuadmin'])) {
            if (!empty($_POST['addsecondmenu'])) {
                if (isset($_POST['a'])) {
                    if ($_POST['a'] == 'eeeboy') {
                        $http = $_POST['httpseconmenu'];
                        $text = "Route::get('/$http', 'ContentController@show');";
                        $text2 = "Route::get('/$http/{id}', function () {return view('fullcontent/fullcontentlayout');});";
                        File::append('../routes/web.php', $text);
                        File::append('../routes/web.php', $text2);
                    }
                }
                $mainmenu = MenuModel::all();
                $k = $_POST['addsecondmenu'];
                $flight = new SecondMenu;
                $flight->name = $k;
                foreach ($mainmenu as $log) {
                    if ($log->name == $_POST['selectsecondmenu']) {
                        $flight->mainmenu_id = $log->id;
                    }
                }
                $flight->http = $_POST['httpseconmenu'];
                $flight->save();
                $allmenu = SecondMenu::all();
                $allmainmenu = MenuModel::all();
                return view('adminpanel/panell', ["allmenu" => $allmenu, "allmainmenu" => $allmainmenu]);
            }
        }
        if (isset($_POST['deletesecondmenubutton'])) {
            $k = $_POST['deletesecondmenu'];
            $flight = SecondMenu::find($k);
            $flight->delete();
            $allmenu = SecondMenu::all();
            $allmainmenu = MenuModel::all();
            return view('adminpanel/panell', ["allmenu" => $allmenu, "allmainmenu" => $allmainmenu]);
        }
    }

}

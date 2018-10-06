<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuModel;
use App\Post;
use Session;

class MainMenuController extends Controller {

    //
    public function index(Request $request) {
        if (Session::get('test') == 'ok') {
            $allmenu = MenuModel::all();
            return view('adminpanel/panell', ["allmenu" => $allmenu]);
        } else {
            echo"Вонючий хацкер ничерта у тебя не получится";
        }
    }

    public function mainmenuadd(Request $request) {
        // $allmenu = MenuModel::all();

        if (isset($_POST['savebutton'])) {
            if ((!empty($_POST['idmenu'])) && (!empty($_POST['changename']))) {
                $k = $_POST['idmenu'];
                $flight = MenuModel::find($k);
                $flight->name = $_POST['changename'];
                $flight->save();
                $allmenu = MenuModel::all();
                return view('adminpanel/panell', ["allmenu" => $allmenu]);
            } else {
                $info = 'пустые поля';
                $allmenu = MenuModel::all();
                return view('adminpanel/panell', ["allmenu" => $allmenu, "info" => $info]);
            }
        }
        if (isset($_POST['addmenuadmin'])) {
            if (!empty($_POST['addmenu'])) {
                $k = $_POST['addmenu'];
                $flight = new menuModel;
                $flight->name = $k;
                $flight->save();
                $allmenu = MenuModel::all();
                return view('adminpanel/panell', ["allmenu" => $allmenu]);
            } else {
                $info = 'Заполни поле';
                $allmenu = MenuModel::all();
                return view('adminpanel/panell', ["allmenu" => $allmenu, "status" => $info]);
            }
        }
        if (isset($_POST['deletemenu'])) {
            $k = $_POST['idmenu'];
            $flight = MenuModel::find($k);
            $flight->delete();
            $allmenu = MenuModel::all();
            return view('adminpanel/panell', ["allmenu" => $allmenu]);
        }
    }

}

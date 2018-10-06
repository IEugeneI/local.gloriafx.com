<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminLogin;
use Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller {

//
    public function show() {
        if (Session::get('test') == 'ok') {
            return view('adminpanel/panell');
        } else {
            return view('adminpanel/authorization');
        }
    }

    public function authoriz() {
        $admlog = AdminLogin::all();

        foreach ($admlog as $log) {
            if ($log->name == $_POST['name']) {
                if ($log->password == $_POST['pass']) {
                    Session::put('test', 'ok');
                    return view('adminpanel/panell');
                } else {
                    echo "Неверно ввел пароль";
                    return view('adminpanel/authorization');
                }
            } else {
                echo "Неверно ввел имя";
                return view('adminpanel/authorization');
            }
        }
    }

    public function exitadmin() {
        Session::forget('test');
        echo "Удачи по жизни братишка , во всех делах";
    }

    /*   public function autoload() {
      /* if ($_FILES) {
      $name = $_FILES['filename']['name'];
      move_uploaded_file($_FILES['filename']['tmp_name'], "public/image/mainpagebackground/$name");
      return view('adminpanel/panell');
      echo "Image:$name <br><img src='$name'>";
      }
      return view('adminpanel/adminsettings/main');
      }

      public function store(Request $request) {

      if ($request->hasFile('image')) {
      $request->file('image');
      // return $request->image->storeAs('public', 'Liquid.jpg');
      //$request->image->store('image/mainpagebackground');
      return $request->image->storeAs('image/mainpagebackground', 'Liquid.jpg');
      } else {
      return "No File Selected";
      }
      //
      }

      public function see() {
      return Storage::lastModified('public/Liquid.jpg');
      //return "<img src=''/>";
      }

      public function choiseimage() {

      $count = count($mass);
      return view('adminpanel/panell', ["mass" => $mass]);
      } */
}

;



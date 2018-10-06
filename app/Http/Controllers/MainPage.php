<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Session;
use App\mainpagebackgroundModel;

class MainPage extends Controller {

    public function index() {

        $mainpagebackground = mainpagebackgroundModel::all();

        return view('welcome', ["backgroundu" => $mainpagebackground]);
    }

    //$this->backgrounda;
    // $background = $this->backgrounda;
    ////  if (empty($_POST['backgr'])) {
    //    if (!empty($this->backgrounda)) {
    //      echo "пустая переменная";
    // }
    //  if (isset($this->backgrounda)) {
    //     echo "переменная не существует";
    // }
    //$background = $this->backgrounda;

    /* if (Session::has('background')) {
      $this->backgrounda = Session::get('background');
      var_dump($this->backgrounda);
      } else {
      var_dump($this->backgrounda);
      } */

    //  var_dump();
    /* // if ((isset($this->$backgrounda)) && (!empty($this->$backgrounda))) {
      // $background = $this->$backgrounda;
      //$backgrounda = $idbackground;
      // }
      $mass = array_slice($f, 2);
      $count = count($mass) + 1;
      for ($i = 1; $i < $count; $i++) {
      if ($i == $this->backgrounda) {
      $v = $mass[$i - 1];
      }
      }
      return view('welcome', ["backgroundu" => $v]); */
    //   }
    // }

    public function show() {
        //   $f = scandir('../public/image/mainpagebackground/');
        // $mass = array_slice($f, 2);
        if (Session::get('test') == 'ok') {
            $mainpagebackground = mainpagebackgroundModel::all();
            return view('adminpanel/panell', ["mass" => $mainpagebackground]);
        } else {
            echo"Вонючий хацкер ничего у тебя не получится";
        }
    }

    public function mainbackground(Request $request) {
        $mainpagebackground = mainpagebackgroundModel::all();

        if (!empty($_POST['idbackground'])) {
            // $flight = new mainpagebackgroundModel;
            $flight = mainpagebackgroundModel::where('idimage', 1)->first();
            if (isset($flight)) {
                $flight->idimage = '0';
                $flight->save();
            }
            $flight = mainpagebackgroundModel::where('id', $_POST['idbackground'])->first();
            $flight->idimage = '1';
            $flight->save();
            $backgroundstatus = 'All it OK';
            return view('adminpanel/panell', ["mass" => $mainpagebackground, "backgroundstatus" => $backgroundstatus]);
        } else {
            $backgroundstatus = "You dont Ввел данные в инпут";
            return view('adminpanel/panell', ["mass" => $mainpagebackground, "backgroundstatus" => $backgroundstatus]);
        }
    }

    public function addimage(Request $request) {
        $mainpagebackground = mainpagebackgroundModel::all();
        if (!empty($_POST['uploadimage'])) {
            if ($request->hasFile('image')) {
                if (!empty($_POST['name'])) {
                    $request->file('image');
                    $v = ".jpg";
                    $k = $_POST['name'] . $v;
                    $request->image->storeAs('image/mainpagebackground', $k);
                    $test = 'The image successfully load to server';
                    $flight = new mainpagebackgroundModel;
                    $flight->name = $k;
                    $flight->idimage = 0;
                    $flight->save();
                    return view('adminpanel/panell', ["test" => $test]);
                } else {
                    $test = "Pls write name of image";
                    return view('adminpanel/panell', ["test" => $test]);
                }
            } else {
                $test = "You don't choise the image";
                return view('adminpanel/panell', ["test" => $test]);
            }
        }
    }

}

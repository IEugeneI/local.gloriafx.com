<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\workers;
use Session;
use Illuminate\Support\Facades\Storage;

class LeadershipController extends Controller {

    //
    public function index() {
        if (Session::get('test') == 'ok') {
            $workers = workers::all();
            return view('adminpanel/panell', ["workers" => $workers]);
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

    public function add(Request $request) {
        if (isset($_POST['blogadd'])) {
            if (($request->hasFile('image')) && !empty($_POST['name']) && !empty($_POST['position']) && !empty($_POST['http']) && !empty($_POST['nameimage'])) {
                $request->file('image');
                $jpg = ".jpg";
                $image = $_POST['nameimage'] . $jpg;
                $request->image->storeAs('image/leadership/', $image);
                $flight = new workers;
                $flight->name = $_POST['name'];
                $flight->position = $_POST['position'];
                $flight->photo = "public/image/leadership/$image";
                $flight->http = $_POST['http'];
                $flight->save();
                $status = "Все ок";
                $workers = workers::all();
                return view('adminpanel/panell', ["workers" => $workers, "status" => $status]);
            } else {
                $status = "Заполните все файлы и выберите картинку";
                $workers = workers::all();
                return view('adminpanel/panell', ["workers" => $workers, "status" => $status]);
            }
        }
    }

    public function del(Request $request) {
        if (isset($_POST['deleteleadership'])) {
            $id = $_POST['id'];
            $flight = workers::find($id);
            $flight->delete();
            $photobd = $_POST['photo'];
            $lastname = explode("/", $photobd);
            $directory = "image/leadership/$lastname[3]";
            Storage::delete($directory);
            $workers = workers::all();
            $status = "all its ok";
            return view('adminpanel/panell', ["workers" => $workers, "status" => $status]);
        }
    }

    public function update() {
        if (isset($_POST['leadershipupdate'])) {
            $id = $_POST['id'];
            $flight = workers::find($id);
            $flight->name = $_POST['name'];
            $flight->position = $_POST['position'];
            $flight->http = $_POST['http'];
            $flight->save();
            $status = "all is ok";
            $workers = workers::all();
            return view('adminpanel/panell', ["workers" => $workers, "status" => $status]);
        }
    }

}

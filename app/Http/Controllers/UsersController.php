<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;

class UsersController extends Controller {

    //
    public function index() {
        if (isset($_POST['deleteusersinfo'])) {
            $id = $_POST['id'];
            $flight = UsersModel::find($id);
            $flight->delete();
            $users = UsersModel::all();
            return view('adminpanel/panell', ["usersinfo" => $users]);
        }
        $users = UsersModel::all();
        return view('adminpanel/panell', ["usersinfo" => $users]);
    }

    public function usersadd() {
        if (isset($_POST['userinfo'])) {
            $flight = new UsersModel;
            $flight->name = $_POST['name'];
            $flight->Email = $_POST['EMAIL'];
            $flight->Telephone = $_POST['telephone'];
            $flight->yourself = $_POST['text'];
            $flight->FB = $_POST['fb'];
            $flight->VK = $_POST['vk'];
            $flight->odnoklasniki = $_POST['odnokl'];
            $flight->Inst = $_POST['inst'];
            $flight->Youtube = $_POST['youtube'];
            $flight->save();
            return view('careers/careers');
        }
    }

}

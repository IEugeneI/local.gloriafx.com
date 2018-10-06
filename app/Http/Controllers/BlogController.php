<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller {

    //
    public function index() {
        if (Session::get('test') == 'ok') {
            $blog = Blog::all();
            return view('adminpanel/panell', ["blog" => $blog]);
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

    public function add(request $request) {
        $blog = Blog::all();
        if (isset($_POST['blogadd'])) {
            if (($request->hasFile('image')) && !empty($_POST['nameimage']) && !empty($_POST['name']) && !empty($_POST['text']) && !empty($_POST['http']) && !empty($_POST['fulltext'])) {
                $request->file('image');
                $jpg = ".jpg";
                $image = $_POST['nameimage'] . $jpg;
                $name = $_POST['name'];
                $request->image->storeAs('image/blog/' . $name, $image);
                $flight = new Blog;
                $flight->name = $_POST['name'];
                $flight->photo_uri = "public/image/blog/$name/$image";
                $flight->text = $_POST['text'];
                $flight->http = $_POST['http'];
                $flight->Dateadd = date("Y-m-d");
                $flight->Fulltextblog = $_POST['fulltext'];
                $flight->save();
                $status = "все ок";
                return view('adminpanel/panell', ["blog" => $blog, "status" => $status]);
            } else {
                $status = "Заполните все поля";
                return view('adminpanel/panell', ["blog" => $blog, "status" => $status]);
            }
        }
    }

    public function del() {
        if (isset($_POST['deleteblog'])) {
            $id = $_POST['id'];
            $flight = Blog::find($id);
            $name = $flight->name;
            Storage::deleteDirectory('image/blog/' . $name);
            $flight->delete();
            $blog = Blog::all();
            $status = "Все ок";
            return view('adminpanel/panell', ["blog" => $blog, "status" => $status]);
        }
    }

    public function update() {
        if (isset($_POST['updateblog'])) {
            $id = $_POST['id'];
            $flight = Blog::find($id);
            $flight->name = $_POST['name'];
            $flight->text = $_POST['text'];
            $flight->http = $_POST['http'];
            $flight->Dateadd = $_POST['calendar'];
            $flight->Fulltextblog = $_POST['fulltext'];
            $flight->save();
            $blog = Blog::all();
            $status = "Все ок";
            return view('adminpanel/panell', ["blog" => $blog, "status" => $status]);
        }
    }

}

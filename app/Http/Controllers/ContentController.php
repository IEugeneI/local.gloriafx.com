<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SecondMenu;
use App\ContentModel;
use Session;
use Illuminate\Support\Facades\Storage;
use App\ContentBackgroundModel;

class ContentController extends Controller {

    //
    public function show() {
        $background = ContentBackgroundModel::all();
        return view('ContentViews/content', ["background" => $background]);
    }

    public function index(Request $request) {
        $allmenu = SecondMenu::all();
        if (isset($_POST['addcont'])) {
            if (($request->hasFile('caption')) && ($request->hasFile('video')) && ($request->hasFile('videocaption')) && ($request->hasFile('image1')) && ($request->hasFile('image2')) && ($request->hasFile('image2')) && ($request->hasFile('image4')) && ($request->hasFile('image5')) && ($request->hasFile('image6')) && ($request->hasFile('imagecaption1')) && ($request->hasFile('imagecaption2')) && ($request->hasFile('imagecaption3'))) {
                if ((!empty($_POST['secondmenuid'])) && (!empty($_POST['name'])) && (!empty($_POST['director'])) && (!empty($_POST['producer'])) && (!empty($_POST['work'])) && (!empty($_POST['http'])) && (!empty($_POST['captionname'])) && (!empty($_POST['videoname'])) && (!empty($_POST['videocaptionname'])) && (!empty($_POST['nameimage1'])) && (!empty($_POST['nameimage2'])) && (!empty($_POST['nameimage3'])) && (!empty($_POST['nameimage4'])) && (!empty($_POST['nameimage5'])) && (!empty($_POST['nameimage6'])) && (!empty($_POST['nameimagecaption1'])) && (!empty($_POST['nameimagecaption2'])) && (!empty($_POST['nameimagecaption3']))) {
                    //  $k = $_POST['secondmenuid'];
                    //  $v = $_POST['name'];
                    //   $path = "../public/image/content/$k/ $v";
                    //   mkdir("$path", 0700);
                    //  mkdir("$path/background", 0700);
                    //   mkdir("$path/images", 0700);
                    // mkdir("$path/img_caption", 0700);
                    // mkdir("$path/video_caption", 0700);

                    $request->file('caption');
                    $jpg = ".jpg";
                    $caption = $_POST['captionname'] . $jpg;
                    $secondmenu = $_POST['secondmenuid'];
                    $name = $_POST['name'];
                    $request->caption->storeAs('image/content/' . $secondmenu . '/' . $name . '/img_caption', $caption);

                    $request->file('video');
                    $mp4 = ".mp4";
                    $video = $_POST['videoname'] . $mp4;
                    $request->video->storeAs('video', $video);


                    $request->file('videocaption');
                    $captionvideo = $_POST['videocaptionname'] . $jpg;
                    $request->videocaption->storeAs('image/content/' . $secondmenu . '/' . $name . '/video_caption', $captionvideo);

                    $request->file('image1');
                    $firstimage = $_POST['nameimage1'] . $jpg;
                    $request->image1->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $firstimage);

                    $request->file('image2');
                    $twoimage = $_POST['nameimage2'] . $jpg;
                    $request->image2->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $twoimage);

                    $request->file('image3');
                    $threimage = $_POST['nameimage3'] . $jpg;
                    $request->image3->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $threimage);

                    $request->file('image4');
                    $fourimage = $_POST['nameimage4'] . $jpg;
                    $request->image4->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $fourimage);

                    $request->file('image5');
                    $fiveimage = $_POST['nameimage5'] . $jpg;
                    $request->image5->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $fiveimage);

                    $request->file('image6');
                    $siximage = $_POST['nameimage6'] . $jpg;
                    $request->image6->storeAs('image/content/' . $secondmenu . '/' . $name . '/images', $siximage);

                    $request->file('imagecaption1');
                    $imagebackground1 = $_POST['nameimagecaption1'] . $jpg;
                    $request->imagecaption1->storeAs('image/content/' . $secondmenu . '/' . $name . '/background', $imagebackground1);

                    $request->file('imagecaption2');
                    $imagebackground2 = $_POST['nameimagecaption2'] . $jpg;
                    $request->imagecaption2->storeAs('image/content/' . $secondmenu . '/' . $name . '/background', $imagebackground2);

                    $request->file('imagecaption3');
                    $imagebackground3 = $_POST['nameimagecaption3'] . $jpg;
                    $request->imagecaption3->storeAs('image/content/' . $secondmenu . '/' . $name . '/background', $imagebackground3);

                    $flight = new ContentModel;
                    $flight->name = $_POST['name'];
                    $flight->director = $_POST['director'];
                    $flight->producer = $_POST['producer'];
                    $flight->OUR_WORK = $_POST['work'];
                    $flight->img_caption = "public/image/content/$secondmenu/$name/img_caption/$caption";
                    $flight->video_url = "../public/video/$video";
                    $flight->video_caption = "public/image/content/$secondmenu/$name/video_caption/$captionvideo";
                    $flight->img1 = "public/image/content/$secondmenu/$name/images/$firstimage";
                    $flight->img2 = "public/image/content/$secondmenu/$name/images/$twoimage";
                    $flight->img3 = "public/image/content/$secondmenu/$name/images/$threimage";
                    $flight->img4 = "public/image/content/$secondmenu/$name/images/$fourimage";
                    $flight->img5 = "public/image/content/$secondmenu/$name/images/$fiveimage";
                    $flight->img6 = "public/image/content/$secondmenu/$name/images/$siximage";
                    foreach ($allmenu as $menu) {
                        if ($menu->name == $_POST['secondmenuid']) {
                            $flight->id_secondmenu = $menu->id;
                        }
                    }
                    $flight->http = $_POST['http'];
                    $flight->background_image1 = "public/image/content/$secondmenu/$name/background/$imagebackground1";
                    $flight->background_image2 = "public/image/content/$secondmenu/$name/background/$imagebackground2";
                    $flight->background_image3 = "public/image/content/$secondmenu/$name/background/$imagebackground3";
                    $flight->save();
                    $status = "Все добавлено";

                    return view('adminpanel/panell', ["secondmenu" => $allmenu, "status" => $status]);
                } else {
                    $status = 'Заполните все поля';
                    return view('adminpanel/panell', ["secondmenu" => $allmenu, "status" => $status]);
                }
            } else {
                $status = 'выбeрете все файлы';
                return view('adminpanel/panell', ["secondmenu" => $allmenu, "status" => $status]);
            }
        }
        if (Session::get('test') == 'ok') {
            return view('adminpanel/panell', ["secondmenu" => $allmenu]);
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

    public function deletecontent(Request $request) {
        $allmenu = SecondMenu::all();
        if (isset($_POST['deletecontent'])) {
            if (!empty($_POST['contentiddelete'])) {
                $id = $_POST['contentiddelete'];
                $flight = ContentModel::find($id);
                if (isset($flight) && (!empty($flight))) {
                    $seconmenuid = $flight->id_secondmenu;
                    $name = $flight->name;
                    $video_uri = $flight->video_url;
                    $lastname = explode("/", $video_uri);
                    $directory = "/video/$lastname[3]";
                    foreach ($allmenu as $menu) {
                        if ($menu->id == $seconmenuid) {
                            $menuname = $menu->name;
                        }
                    }
                    Storage::deleteDirectory('image/content/' . $menuname . '/' . $name);
                    Storage::delete($directory);
                    $flight->delete();
                    $content = ContentModel::all();
                    $status = "Все ок";
                    $content = ContentModel::all();
                    return view('adminpanel/panell', ["content" => $content, "status" => $status]);
                } else {
                    $status = "Ввел херню";
                    $content = ContentModel::all();
                    return view('adminpanel/panell', ["content" => $content, "status" => $status]);
                }
            } else {
                $status = "заполни поле!";
                $content = ContentModel::all();
                return view('adminpanel/panell', ["content" => $content, "status" => $status]);
            }
        }
        if (Session::get('test') == 'ok') {
            $content = ContentModel::all();
            return view('adminpanel/panell', ["content" => $content]);
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

    public function updatecontent() {
        if (Session::get('test') == 'ok') {
            $content = ContentModel::all();
            $allmenu = SecondMenu::all();
            if (!empty($_POST['addcont'])) {
                $id = $_POST['id'];
                $flight = ContentModel::find($id);
                $flight->name = $_POST['name'];
                $flight->director = $_POST['director'];
                $flight->producer = $_POST['producer'];
                $flight->OUR_WORK = $_POST['work'];
                foreach ($allmenu as $m) {
                    if ($m->name == $_POST['selectupdatecontent']) {
                        $flight->id_secondmenu = $m->id;
                    }
                }
                $flight->save();
                $content = ContentModel::all();
                $allmenu = SecondMenu::all();
                return view('adminpanel/panell', ["content" => $content, "allmenu" => $allmenu]);
            } else {

                return view('adminpanel/panell', ["content" => $content, "allmenu" => $allmenu]);
            }
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

    public function background(Request $request) {
        if (Session::get('test') == 'ok') {
            if (isset($_POST['addimage'])) {
                if ($request->hasFile('image') && !empty($_POST['imagename'])) {
                    $request->file('image');
                    $jpg = ".jpg";
                    $name = $_POST['imagename'] . $jpg;
                    $request->image->storeAs('image/BackgroundContent/', $name);
                    $flight = new ContentBackgroundModel;
                    $flight->name = $name;
                    $flight->id_image = 0;
                    $flight->save();
                    $status = "Все ОК";
                    $background = ContentBackgroundModel::all();
                    return view('adminpanel/panell', ["background" => $background, "status" => $status]);
                } else {
                    $background = ContentBackgroundModel::all();
                    $status = "Выберите файл и заполните все поля";
                    return view('adminpanel/panell', ["background" => $background, "status" => $status]);
                }
            }
            if (isset($_POST['changeimage'])) {
                If (!empty($_POST['imagebackground'])) {
                    $flight = ContentBackgroundModel::where('id_image', 1)->first();
                    if (isset($flight)) {
                        $flight->id_image = '0';
                        $flight->save();
                    }
                    $flight = ContentBackgroundModel::where('id', $_POST['imagebackground'])->first();
                    $flight->id_image = '1';
                    $flight->save();
                    $background = ContentBackgroundModel::all();
                    $status = "Все ОК";
                    return view('adminpanel/panell', ["background" => $background, "status" => $status]);
                } else {
                    $background = ContentBackgroundModel::all();
                    $status = "Заполните поле";
                    return view('adminpanel/panell', ["background" => $background, "status" => $status]);
                }
            }
            $background = ContentBackgroundModel::all();
            return view('adminpanel/panell', ["background" => $background]);
        } else {
            echo"нечего у тебя не получится вонючий хацкер";
        }
    }

}

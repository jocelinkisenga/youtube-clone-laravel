<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Controllers\VisiteController;

class HomeController extends Controller
{
    public function index() {
        $videos = Video::orderBy('id','desc')->get();
        return view('pages.index', ['videos'=>$videos]);
    }

    public function show (int $id){
        VisiteController::store($id);
        $video = Video::findOrFail($id);
        return view('pages.single',['video'=>$video]);
    }
}

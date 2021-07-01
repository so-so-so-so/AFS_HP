<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\News;

class AFSmainController extends Controller
{
    public function index(){
        $news = DB::select('select title,content,news_category,image_path,video_url FROM contents');
        $data = ['news'=>$news];
        return view('index',$data);
    }

    public function result(){
        return view('result');
    }
}

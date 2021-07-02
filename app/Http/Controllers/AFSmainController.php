<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Content;
use App\Models\News;

class AFSmainController extends Controller
{
  public function index()
  {
    // $news = DB::select('select title,content,news_category,image_path,video_url FROM contents');
    $news = Content::all();
    $data = ['news' => $news];
    return view('index', $data);
  }
  public function news()
  {
    $news = Content::all();
    $data = ['news' => $news];
    return view('news', $data);
  }
  public function detail(Request $request)
  {
    $news = Content::where('id', $request->id)->get();
    $data = ['news' => $news];
    return view('news_detail', $data);
  }
  public function result()
  {
    return view('result');
  }

  public function gallery()
  {
    return view('gallery');
  }
}

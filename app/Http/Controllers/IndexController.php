<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\News;

class IndexController extends Controller
{
  //Контроллер главной страницы
  public function index()
  {
      return view('public.welcome', [
        'sliders'  => Slider::orderBy('id')->get(),
        'news'  => News::orderBy('id')->get(),
      ]);
  }
  //Контроллер страницы новостей
  public function news()
  {
      return view('public.news', [
        'news'  => News::orderBy('created_at')->paginate(20),
      ]);
  }
  //Контроллер страницы отдельной новости
  public function news_x($news)
  {
      return view('public.news_x', [
        'news'  => News::orderBy('created_at')->paginate(20),
        'new'  => News::where('link', $news)->first(),
      ]);
  }
}

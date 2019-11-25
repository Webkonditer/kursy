<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\News;
use App\Page;

class IndexController extends Controller
{
  //Контроллер главной страницы
  public function index()
  {
      return view('public.welcome', [
        'sliders'  => Slider::orderBy('id')->get(),
        'news'  => News::orderBy('id','desc')->take(4)->get(),
        'm_pages' => Page::orderBy('position')->where('on_main', 'Да')->take(3)->get(),
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
  //Контроллер страницы о главном
  public function main()
  {
      return view('public.main', [
        'm_pages' => Page::orderBy('position')->where('on_main', 'Да')->paginate(20),
      ]);
  }
  //Контроллер страниц
  public function pages($page)
  {
      return view('public.page', [
        'page'  => Page::where('link', $page)->first(),
      ]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.news.index', [
        'news' => News::orderBy('id')->paginate(20),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {
      $validator = $this->validate($request, [

          'image' => 'required|image',
          'title' => 'required|string|max:191',
          'preview' => 'required|string|max:255',
          'link' => 'required|string|max:255',
          'content' => 'required|string|max:3000',
          'meta_title' => 'required|string|max:255',
          'meta_description' => 'required|string|max:600',
          'meta_keywords' => 'required|string|max:255',
      ]);

        $path = $request->file('image')->store('i/news', 'public');

        $news->title = $request->title;
        $news->image = $path;
        $news->preview = $request->preview;
        $news->link = $request->link;
        $news->content = $request->content;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;

        $news->save();

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
      return view('admin.news.edit', [
        'news'  => $news,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
      $validator = $this->validate($request, [

          'image' => 'nullable|image',
          'title' => 'required|string|max:191',
          'preview' => 'required|string|max:255',
          'link' => 'required|string|max:255',
          'content' => 'required|string|max:3000',
          'meta_title' => 'required|string|max:255',
          'meta_description' => 'required|string|max:600',
          'meta_keywords' => 'required|string|max:255',
      ]);

        if(null !==($request->file('image'))) $path = $request->file('image')->store('i/news', 'public');
        else $path = null;

        $news->title = $request->title;
        if($path)$news->image = $path;
        $news->preview = $request->preview;
        $news->link = $request->link;
        $news->content = $request->content;
        $news->meta_title = $request->meta_title;
        $news->meta_description = $request->meta_description;
        $news->meta_keywords = $request->meta_keywords;

        $news->save();

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(News $news)
       {
           $news->delete();
           return redirect()->route('admin.news.index');
       }
}

<?php

namespace App\Http\Controllers;
use App\Page;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.pages.index', [
        'pages' => Page::orderBy('id')->paginate(20),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    { //dd($request);
      $validator = $this->validate($request, [

          'on_main' => 'string|max:2',
          'position' => 'required|integer',
          'image' => 'required|image',
          'title' => 'required|string|max:191',
          'preview' => 'required|string|max:255',
          'link' => 'required|string|max:255',
          'content' => 'required|string|max:3000',
          'meta_title' => 'required|string|max:255',
          'meta_description' => 'required|string|max:600',
          'meta_keywords' => 'required|string|max:255',
      ]);

        $path = $request->file('image')->store('i/pages', 'public');

        if($request->on_main)$page->on_main = "Да";
        $page->position = $request->position;
        $page->title = $request->title;
        $page->image = $path;
        $page->preview = $request->preview;
        $page->link = $request->link;
        $page->content = $request->content;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $request->meta_keywords;

        $page->save();

        return redirect()->route('admin.pages.index');
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
     public function edit(Page $page)
     {
       return view('admin.pages.edit', [
         'page'  => $page,
       ]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Page $page)
     {
       $validator = $this->validate($request, [

           'on_main' => 'string|max:2',
           'position' => 'required|integer',
           'image' => 'nullable|image',
           'title' => 'required|string|max:191',
           'preview' => 'required|string|max:255',
           'link' => 'required|string|max:255',
           'content' => 'required|string|max:3000',
           'meta_title' => 'required|string|max:255',
           'meta_description' => 'required|string|max:600',
           'meta_keywords' => 'required|string|max:255',
       ]);

         if(null !==($request->file('image'))) $path = $request->file('image')->store('i/pages', 'public');
         else $path = null;

         if($request->on_main)$page->on_main = "Да"; else $page->on_main = "";
         $page->position = $request->position;
         $page->title = $request->title;
         if($path)$page->image = $path;
         $page->preview = $request->preview;
         $page->link = $request->link;
         $page->content = $request->content;
         $page->meta_title = $request->meta_title;
         $page->meta_description = $request->meta_description;
         $page->meta_keywords = $request->meta_keywords;

         $page->save();

         return redirect()->route('admin.pages.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
      public function destroy(Page $page)
        {
            $page->delete();
            return redirect()->route('admin.pages.index');
        }
}

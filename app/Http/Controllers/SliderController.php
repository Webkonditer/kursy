<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index(Slider $slider)
      {

        return view('admin.sliders.index', [
          'sliders' => Slider::orderBy('id')->get(),
        ]);
      }

    public function create(Slider $slider)
      {
        return view('admin.sliders.create', [
          'sliders'  => $slider,
        ]);
      }

    public function store(Request $request, Slider $slider)
      {

        $validator = $this->validate($request, [

            'image' => 'required|image',
            'title' => 'required|string|max:191',
            'preview' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

          $path = $request->file('image')->store('i/slider', 'public');

          $slider->title = $request->title;
          $slider->image = $path;
          $slider->preview = $request->preview;
          $slider->link = $request->link;
          $slider->save();

          return redirect()->route('admin.slider.index');
      }

    public function edit(Slider $slider)
      {

        return view('admin.sliders.edit', [
          'slider'  => $slider,
        ]);
      }

    public function update(Request $request, Slider $slider)
      {
          //dd($request->all());
          $validator = $this->validate($request, [

            'image' => 'nullable|image',
            'title' => 'required|string|max:191',
            'preview' => 'required|string|max:255',
            'link' => 'required|string|max:255',

          ]);
          //dump($request->all());
            if(null !==($request->file('image'))) $path = $request->file('image')->store('i/slider', 'public');
            else $path = null;

            $slider->title = $request->title;
            if($path)$slider->image = $path;
            $slider->preview = $request->preview;
            $slider->link = $request->link;
            $slider->save();

            return redirect()->route('admin.slider.index');
      }

    public function destroy(Slider $slider)
      {
          $slider->delete();
          return redirect()->route('admin.slider.index');
      }
}

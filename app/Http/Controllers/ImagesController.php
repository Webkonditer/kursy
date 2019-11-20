<?php

namespace App\Http\Controllers;
use App\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
  public function index()
  {
    return view('admin.images.index', [
      'images' => Image::orderBy('created_at', 'desc')->paginate(20),
    ]);
  }

  public function store(Request $request, Image $image)
  { //dd($request);
    $validator = $this->validate($request, [

        'image' => 'required|image',
        'description' => 'string|max:255',
    ]);

      $path = $request->file('image')->store('i/images', 'public');

      $image->image = $path;
      $image->description = $request->description;
      $image->save();

      return redirect()->route('admin.images.index');
  }

  public function destroy(Image $image)
    {

        //Storage::delete($image->image);
        $image->delete();
        return redirect()->route('admin.images.index');
    }
}

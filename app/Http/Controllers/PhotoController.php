<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function create() 
    {
        //php artisan storage:link !!
        $photos = Photo::all();
        return view('upload', compact('photos'));
    }

    public function store(Request $request)
    {

        $photoFile = $request->file('photo');

        if ($photoFile && $photoFile->isValid()) {
            $size = $photoFile->getSize();
            $name = $photoFile->getClientOriginalName();
    
            $photoFile->storeAs('public/images/', $name);
            
            $photo = new Photo();
            $photo->name = $name;
            $photo->size = $size;
            $photo->save();
        } else {
            return redirect()->back()->withErrors(['error' => 'Invalid or missing file.']);
        }
        return redirect()->back();
    }
}

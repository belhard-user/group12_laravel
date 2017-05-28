<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('files.index');
    }

    public function file(Request $request)
    {
        if(! $request->hasFile('photo')){
            return redirect()->back();
        }
        foreach ($request->file('photo') as $photo) {
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $r = $photo->storeAs('article_images', $fileName, ['disk' => 'article']);

            $pathToFile = \Storage::disk('article')->getDriver()->getAdapter()->getPathPrefix();

            $whereToSave = $pathToFile . 'article_images/' .  'th-' . $fileName;
            
            \Image::make($pathToFile.$r)->fit(100)->save($whereToSave, 100);
        }

        return redirect()->back();
    }
}

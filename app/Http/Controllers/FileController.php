<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showForm()
    {
        return view('upload-file');
    }

    public function uploadFile(Request $request)
    {
        dd($request->all());
        $file = $request->file('file');
        $name = $file->hashName();
        Storage::put("public/file/{$name}", $file);

        return view('show-file');
    }
}

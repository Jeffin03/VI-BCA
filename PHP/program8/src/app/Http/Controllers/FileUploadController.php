<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class FileUploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }


    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);


        if ($request->file('file')->isValid()) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);


            return redirect('/upload')->with('success', 'File uploaded successfully.');
        } else {
            return redirect('/upload')->with('error', 'Invalid file.');
        }
    }
}
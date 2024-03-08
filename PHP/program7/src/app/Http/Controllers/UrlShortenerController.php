<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Url;


class UrlShortenerController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);


        $inputUrl = $request->input('url');
        $code = Url::generateUniqueShortCode();


        Url::create([
            'original_url' => $inputUrl,
            'short_code' => $code
        ]);


        return redirect('/')->with('shortened', url('/'.$code));
    }


    public function redirect($code)
    {
        $url = Url::where('short_code', $code)->firstOrFail();
        return redirect($url->original_url);
    }
}

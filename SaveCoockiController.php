<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveCoockiController extends Controller
{
    public function showForm()
    {
        return view('save_language');  
    }

    public function saveLanguage(Request $request)
    {
        $language = $request->input('language');
        $remember = $request->input('remember');
        $cookie = cookie('language', $language, $remember ? 5 : 0);
        $message = "Language saved successfully: " . $language;
        return redirect()->route('language.form')->with('msg', $message)->withCookie($cookie);
    }
}















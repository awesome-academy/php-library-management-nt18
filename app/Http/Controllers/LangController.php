<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('lang', $language);

        return redirect()->back();
    }
}
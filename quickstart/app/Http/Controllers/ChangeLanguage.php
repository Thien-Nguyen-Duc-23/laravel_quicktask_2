<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangeLanguage extends Controller
{
    public function changeLanguage($locale) {
        Session::put('locale', $locale);

        return redirect()->back();
    }
}

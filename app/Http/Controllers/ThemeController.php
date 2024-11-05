<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function setTheme(Request $request)
    {
        $theme = $request->input('theme', 'classic');
        $request->session()->put('theme', $theme);
        return redirect()->back();
    }
}

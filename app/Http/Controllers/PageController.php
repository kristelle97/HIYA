<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class PageController extends Controller
{
    public function show( $slug )
    {
        $page = WinkPage::where('slug',$slug)->first();

        if (!$page) {
            flash()->error('Page not found.');
            return redirect()->route('home');
        }

        return view('blog.page')->with([
            'page' => $page
        ]);
    }
}

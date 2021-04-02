<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Language;
use App\Models\Product;

class aboutController extends Controller
{
    public function about()
    {
        $about=Language::select()->get();
        $news = Comenews ::orderBy ('id', 'desc')->take(3)->get();
        return view('front.about',compact('about','news'));
    }

}

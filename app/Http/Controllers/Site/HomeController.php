<?php

namespace App\Http\Controllers\Site;


use App\Models\Breackfast;
use App\Models\Category;
use App\Models\Comenews;
use App\Models\Customer;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Language;
use App\Models\Lunch;
use App\Models\Opnoin;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use App\Models\Sliders;

class HomeController extends Controller
{

    public function home()
    {
//        $data = [];
//         $data['sliders'] = Slider::get(['photo']);
//         $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
//            $q->select('id', 'parent_id', 'slug');
//            $q->with(['childrens' => function ($qq) {
//                $qq->select('id', 'parent_id', 'slug');
//            }]);
//        }])->get();
        $about=Language::select()->get();
        $sliders=Sliders::select()->get();
        $Dinner=Dinner::select()->get();
        $Lunch=Lunch::select()->get();
        $Customer=Customer::select()->get();
        $items=item::select()->get();
        $opinon=Opnoin::select()->get();
        $opinon=Opnoin::select()->get();
        $news = Comenews ::orderBy ('id', 'desc')->take(3)->get();
        return view('front.home',compact('about','sliders','Dinner','Lunch','Customer','items','opinon','news'));
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function about()
    {
//
        $news=Comenews::orderBy('id','DESC')->paginate(9);


        return view('front.blog',compact('news'));
    }
    function detail($news_id){
        $news = Comenews ::orderBy ('id', 'desc')->take(2)->get();
        $newsDetail=DB::table('news')->where(['id'=>$news_id])->get();
        return view('front.Blog-details',compact('newsDetail','news'));

    }
}

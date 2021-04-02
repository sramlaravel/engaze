<?php

namespace App\Http\Controllers\Site;

use App\Models\Breackfast;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Comenews;
use App\Models\Dinner;
use App\Models\item;
use App\Models\Lunch;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function project()
    {
//        $data = [];
//        $data['category'] = Category::where('slug', $slug)->first();
//
//        if ($data['category'])
//            $data['products'] = $data['category']->products;
        $breackfast=Breackfast::select()->get();
        $Dinner=Dinner::select()->get();
        $Lunch=Lunch::select()->get();
//        return view('front.project',compact('breackfast','Dinner','Lunch'));
       return view('front.project');
    }
    public function projectdetails($project_id)
    {

        $news = Comenews ::orderBy ('id', 'desc')->take(3)->get();
        $projects=DB::table('items')->where(['id'=>$project_id])->get();
        $catogry=DB::table('categories')->where(['id'=>$projects[0]->category_id])->get();

        return view('front.project',compact('projects','news','catogry'));

    }

}

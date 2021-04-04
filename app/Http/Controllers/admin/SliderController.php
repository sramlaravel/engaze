<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Config;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Sliders::select()->paginate(PAGINATION_COUNT);

        return view('admin.Sliders.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.Sliders.create');
    }

    public function store ( LanguageRequest $request)
    {

        try {


            if (!$request->has('statu'))
                $request->request->add(['statu' => 0]);
            else
                $request->request->add(['statu' => 1]);

            $filePath = "";

            if ($request->has('image')) {
                $filePath =uploadImage('Sliders', $request->image);
            }


                Sliders::create([
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'statu' => $request->get('statu'),

                    'image' => $filePath,

                ]);


               return redirect()->route('admin.Sliders')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);


              } catch (\Exception $ex) {

        return redirect()->route('admin.Sliders')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }


//        try {
//
//            Language::create($request->except(['_token']));
//            return redirect()->route('admin.Sliders')->with(['success' => 'تم حفظ الاسلايد  بنجاح']);
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.Sliders')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
//        }
    }

    public function edit($id)
    {
        $slider = Sliders::select()->find($id);
        if (!$slider) {
            return redirect()->route('admin.Sliders')->with(['error' => 'هذه الاسلايد غير موجوده']);
        }

        return view('admin.Sliders.edit', compact('slider'));
    }

    public function update($id, UpdateLanguageRequest $request)
    {

        try {
            $slider = Sliders::find($id);
            if (!$slider) {
                return redirect()->route('admin.Sliders.edit', $id)->with(['error' => 'هذه الاسلايد غير موجوده']);
            }


            DB::beginTransaction();
//
//            if (!$request->has('statu'))
//                $request->request->add(['statu' => 1]);


            if ($request->has('image')) {
                $filePath =uploadImage('services', $request->image);
                Sliders::where('id', $id)
                    ->update([
                        'image' => $filePath,
                    ]);

            }


            $data = $request->except('_token', 'id','image');

            Sliders::where('id', $id) ->update( $data  );

            DB::commit();


            return redirect()->route('admin.Sliders')->with(['success' => 'تم تحديث الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            return redirect()->route('admin.Sliders')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {

        try {
            $slider = Sliders::find($id);
            if (!$slider) {
                return redirect()->route('admin.Sliders', $id)->with(['error' =>'هذه الاسلايد غير موجوده']);
            }
            $slider->delete();

            return redirect()->route('admin.Sliders')->with(['success' => 'تم حذف الاسلايد بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.Sliders')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

//    public function changeStatus($id)
//    {
//        try {
//            $sliders = Language::find($id);
//
//            if (!$sliders)
//                return redirect()->route('admin.languages')->with(['error' => 'هذا الاسلايد غير موجود ']);
//
//            $status =  $sliders ->statu  == 0 ? 1 : 0;
//
//            $sliders -> update(['statu' =>$status ]);
//
//            return redirect()->route('admin.languages')->with(['success' => ' تم تغيير الحالة بنجاح ']);
//
//        } catch (\Exception $ex) {
//            return redirect()->route('admin.languages')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
//        }
//    }
}

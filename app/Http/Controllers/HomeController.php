<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        $masters = Master::all();
        return view('home',['masters'=>$masters]);
    }

    public function create(){
        return view('master.create');
    }

    public function store(Request $request)
    {
        $master = new Master();
        $master->name = $request->name;
        $master->family = $request->family;
        $master->field_of_Study = $request->field_of_Study;
        $master->academic_rank = $request->academic_rank;
        $master->educational_group = $request->educational_group;
        $master->college = $request->college;
        $master->save();
        $masters = Master::all();
        return redirect()->route('home')->with('masters',$masters);
    }

    public function single(Request $request)
    {
        $master = Master::where('id',$request->id)->first();
        return view('pages.single',['master'=>$master]);
    }

    public function biography(){
        return view('pages.biography');
    }

    public function weeklySchedule(){
        return view('pages.weeklyschedule');
    }

    public function download(){
        return view('pages.download');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function elanat(){
        return view('pages.elanat');
    }

    public function books(){
        return view('pages.books');
    }

    public function lectures(){
        return view('pages.lectures');
    }

    public function tahgdirnameha(){
        return view('pages.taghdirnameha');
    }

    public function payannameh()
    {
        return view('pages.payannameh');
    }

    public function notFound(){
        return view('pages.404');
    }
}

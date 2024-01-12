<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {
        return view('home');
    }

    public function single(){

        return view('pages.single');
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

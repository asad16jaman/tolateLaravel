<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    function index(){

        $family = House::where('type','=','family')->orderBy('id')->limit(3)->get();
        $bachelor = House::where('type','<>','family')->orderBy('id')->limit(3)->get();

        return view('index',['family'=>$family,'bachelor'=>$bachelor]);
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }


    


}

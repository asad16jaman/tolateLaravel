<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;



class CatagoryController extends Controller
{
    
    function index(){
        $allData = DB::table('catagories')->get();
        return view('admin.forum.catagory.index',['catagories'=>$allData]);
    }
    function create(){
        return view("admin.forum.catagory.create");
    }

    function store(Request $request){

        $validat = Validator::make($request->all(),[
            "name" => ['required','max:255'],
            'thumbnail' => ['required','mimes:jpg,bmp,png']
        ]);
        
        if($validat->fails()){
            return redirect()->route('catagory_create')->withErrors($validat->errors())->withInput($request->except('thumbnail'));
        }

        $newName = null;
        if($request->has('thumbnail')){
            $thum = $request->file('thumbnail');
            $newName = time().'.'.$thum->getClientOriginalExtension();

            // $thum->move(public_path().'/forum/thum',$newName);

            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $manager->read($thum)->scale(300,300)->save(public_path().'/forum/thum/'.$newName);
        }

        $ob = [
            'name' => htmlspecialchars($request->input('name')),
            'description' => htmlspecialchars($request->input('description')),
            'thumbnail' => $newName
        ];
        
        // DB::table('catagories')->insert($ob);
        Catagory::create($ob);

        // return redirect()->route('catagory_index');
        return redirect()->route('catagory_create');
    }

    function edit(int $id){
        $ob = Catagory::find($id);
        return view('admin.forum.catagory.update',['data'=>$ob]);
    }

    function update(Request $request,int $id){
        $ob = Catagory::find($id);
        $validat = Validator::make($request->all(),[
            "name" => ['required','max:255','min:2']
        ]);
        
        if($validat->fails()){
            return redirect()->route('catagory_edit',$id)->withErrors($validat->errors())->withInput($request->except('thumbnail'));
            
        }

        $newName = null;
        if($request->has('thumbnail')){
            $thum = $request->file('thumbnail');
            $newName = time().'.'.$thum->getClientOriginalExtension();

            // $thum->move(public_path().'/forum/thum',$newName);

            // create image manager with desired driver
            $manager = new ImageManager(new Driver());
            $manager->read($thum)->scale(300,300)->save(public_path().'/forum/thum/'.$newName);
            File::delete(public_path('/forum/thum/'.$ob->thumbnail));
        }

        $ob->name = $request->name;
        $ob->description = $request->description;
        if($newName != null){
            $ob->thumbnail = $newName;
        }
        $ob->save();
        return to_route('catagory_index');


        
    }

    function delete(int $id){
        $ob = Catagory::find($id);
        if($ob == null){
            return "pawa jai nai";
        }
        
        File::delete(public_path('/forum/thum/'.$ob->thumbnail));
        $ob->delete();
        return to_route('catagory_index');

    }


}

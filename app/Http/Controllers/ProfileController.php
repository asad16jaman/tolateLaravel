<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHouseRequest;
use App\Models\House;
use App\Models\HouseGallery;
use App\Models\Profile;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    function index(){
        $profile = Profile::where('user_id',auth()->user()->id)->first();
        return view('profile.index',['profile' => $profile]);
    }


    function updateProfile(Request $request){

        Profile::where('user_id',auth()->user()->id)->update($request->except("_token"));
        return to_route('profile');
    }

    function contact(){
        return view('profile.createHouse');
    }

    function showHouse(){
        $myHouses = House::where('user_id',auth()->user()->id)->get();
        return view('profile.houses',["myHouses" => $myHouses]);
    }

    function houseStore(StoreHouseRequest $request){

        $newar= $request->except('_token');
        if(key_exists('gas',$newar)){
            $newar['gas'] = true;
        }else{
            $newar['gas'] = false;
        }
        
        if(key_exists('left',$newar)){
            $newar['left'] = true;
        }else{
            $newar['left'] = false;
        }
        if(key_exists('parking',$newar)){
            $newar['parking'] = true;
        }else{
            $newar['parking'] = false;
        }
        if(key_exists('internate',$newar)){
            $newar['internate'] = true;
        }else{
            $newar['internate'] = false;
        }

        try {

            $newName = $request->file('thum')->store(
                'thumnail', 'public'
            );
            $newar['thum'] = $newName; 


            $newar['user_id'] = auth()->user()->id; 
            House::create($newar);
        } catch (Exception $err) {
           
            return response()->json([
                'error' => true,
                'message' => $err->getMessage()
            ], 500);
        }
    

        return to_route('profile.house');
    }


    function  deleteHouse($id){

        $house = House::findOrFail($id);
        $gallaries = HouseGallery::where('house_id',"=",$id)->get();

         try{

            //delete gallry image;
            foreach($gallaries as $galry){
                    if(file_exists(storage_path().'/app/public/'.$galry->image)){
                        unlink(storage_path().'/app/public/'.$galry->image);
                    } 
            }
           // delete thumnail house image
            if($house->thum){            
                if(file_exists(storage_path().'/app/public/'.$house->thum)){
                    unlink(storage_path().'/app/public/'.$house->thum);
                }  
            }

            HouseGallery::where('house_id',"=",$id)->delete();
            $house->delete();

            return redirect()->route("profile.house");

        } catch (Exception $err){

            return response()->route('profile.house');

        }

    }

    function createGallry(int $houseId){

        return view('profile.gallery',['houseId'=>$houseId]);
    }

    function gallerystore(Request $request,int $houseId){

        $request->validate([
            'pictures' => ['required', 'array', 'max:10',"min:3"],
            'pictures.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

        foreach($request->file('pictures') as $pictur){

            $newName = $pictur->store(
                'gallery', 'public'
            );

            HouseGallery::create([
                'house_id' => $houseId,
                'image' => $newName
            ]);

        }

        return to_route('profile.house');
    }




}

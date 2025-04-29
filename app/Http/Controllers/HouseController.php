<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\House;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,string $type=null)
    {
        //
        $queryData = $request->all();

        $houses = House::query();
        if($type){
            $houses->where('type',"=",$type);
        }
        if(isset($queryData['division'])){
            $houses->where('division','like',"%".strtolower($queryData['division'])."%");
        }

        if(isset($queryData['district'])){
            $houses->where('district','like',"%".strtolower($queryData['district'])."%");
        }
        if(isset($queryData['thana'])){
             $houses->where('thana','like',"%".strtolower($queryData['thana'])."%");
        }

        if(isset($queryData['area'])){
            $houses->where('area','like',"%".strtolower($queryData['area'])."%");
        }

        if(isset($queryData['maxPrice']) && isset($queryData['minPrice'])){
            $houses->whereBetween('price',[$queryData['minPrice'],$queryData['maxPrice']]);
        }else{
            if(isset($queryData['minPrice'])){
                $houses->where('price','>',$queryData['minPrice']);
            }
            if(isset($queryData['maxPrice'])){
                $houses->where('price','<',$queryData['maxPrice']);
            }
        }

        $allHouses = $houses->get();
        $request->session()->flash("olddata",$request->all());
        return view('house.index',["houses"=>$allHouses]);
       

    }


    public function getHouse(int $id){

        $house = House::with(['user','user.profile','gallery'])->find($id);
        $chats = Chat::with('user')->where('house_id',$id)->orderBy('id','desc')->get();

        // return response()->json($house);
        
        return view('house.house',["house"=>$house,'chats'=>$chats]);
    }

    public function chatOfHouse(Request $request,int $id){

        $request->validate([
            "message" => "required|string|min:3"
        ]);

        try{
            Chat::create([
                'user_id' => auth()->user()->id,
                'message' => $request->input('message'),
                'house_id' => $id
            ]);
            return to_route('housedetail',['id'=>$id]);
        }catch(Exception $err){
            return to_route('home');
        }
    }

    function deleteChat(int $id,int $chatId){
        try{
            Chat::find($chatId)->delete();
            return to_route('housedetail',['id'=>$id]);
        }catch (Exception $err){
            return to_route('home');
        }
    }

  
    

}

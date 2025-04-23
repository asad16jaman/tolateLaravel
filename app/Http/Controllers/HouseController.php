<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $queryData = $request->all();

        $houses = House::query();

        if(isset($queryData['division'])){
            $houses->where('division','like',"%".$queryData['division']."%");
        }

        if(isset($queryData['district'])){
            $houses->where('district','like',"%".$queryData['district']."%");
        }
        if(isset($queryData['thana'])){
             $houses->where('thana','like',"%".$queryData['thana']."%");
        }

        if(isset($queryData['area'])){
            $houses->where('area','like',"%".$queryData['area']."%");
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


    public function getHouse(){

        
        return view('house.house');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

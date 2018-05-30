<?php

namespace App\Http\Controllers;
use App\Website;
use Illuminate\Http\Request;
use App\Http\Resources\Website as WebsiteResource;
use App\Http\Resources\Websites as WebsitesResource;


class websitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WebsitesResource::collection(Website::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Websites::find($id);
        if(!$data){
            return response()->json(['errors'=>[["status"=> "422", "title"=> "Wrong id",
            "detail"=> "no website matches your id."]]
            ], 404);  
        }
        
        return new WebsiteResource($data);
    }


}

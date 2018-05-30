<?php

namespace App\Http\Controllers;
use App\Experience;
use Illuminate\Http\Request;
use App\Http\Resources\Experience as ExperienceResource;
use App\Http\Resources\Experiences as ExperiencesResource;

class experienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExperiencesResource::collection(Experience::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Experience::find($id);
        if(!$data){
            return response()->json(['errors'=>[["status"=> "422", "title"=> "Wrong id",
            "detail"=> "no experience matches your id."]]
            ], 404);  
        }
        
        return new ExperienceResource($data);


}
}

<?php

namespace App\Http\Controllers;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Resources\Skills as SkillsResource;
use App\Http\Resources\Skill as SkillResource;

class skillController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SkillsResource::collection(Skill::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Skills::find($id);
        if(!$data){
            return response()->json(['errors'=>[["status"=> "422", "title"=> "Wrong id",
            "detail"=> "no skill matches your id."]]
            ], 404);  
        }
        
        return new SkillResource($data);
    }


}

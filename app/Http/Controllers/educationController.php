<?php

namespace App\Http\Controllers;
use App\Education;
use Illuminate\Http\Request;
use App\Http\Resources\Education as EducationResource;
use App\Http\Resources\Educations as EducationsResource;

class educationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EducationsResource::collection(Education::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Education::find($id);
        if(!$data){
            return response()->json(['errors'=>[["status"=> "422", "title"=> "Wrong id",
            "detail"=> "no Education matches your id."]]
            ], 404);  
        }
        
        return new EducationResource($data);
    }


}

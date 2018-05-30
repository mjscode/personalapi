<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Resources\Project as ProjectResource;
use App\Http\Resources\Projects as ProjectsResource;

class projectsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectsResource::collection(Project::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Projects::find($id);
        if(!$data){
            return response()->json(['errors'=>[["status"=> "422", "title"=> "Wrong id",
            "detail"=> "no project matches your id."]]
            ], 404);  
        }
        
        return new ProjectResource($data);
    }


}

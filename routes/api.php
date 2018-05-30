<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::apiResource([
//     "websites" => 'websitesController',
//     "websites/id" => 'websitesController',
//     "projects" => 'projectsController',
//     "projects/id" => 'projectsController',
//     "skills" => 'skillsController',
//     "skills/id" => 'skillsController',
//     "experience" => 'experienceController',
//     "experience/id" => 'experienceController',
//     "education" => 'educationController',
//     "education/id" => 'educationController'
// ]);
Route::apiResource('websites', 'websitesController');
Route::apiResource('websites/id', 'websitesController');
Route::apiResource('projects', 'projectsController');
Route::apiResource('projects/id', 'projectsController');
Route::apiResource('skills', 'skillController');
Route::apiResource('skills/id', 'skillController');
Route::apiResource('experience', 'experienceController');
Route::apiResource('experience/id', 'experienceController');
Route::apiResource('education', 'educationController');
Route::apiResource('education/id', 'educationController');

Route::fallback(function(){
    return response()->json(['message' => 'Not Found!'], 404);
});
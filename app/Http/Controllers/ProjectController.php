<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Project::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request = $request->toArray();

        $request['created_at'] = $request['updated_at'] = Carbon::now();

        $store = Project::create($request);
        if ($store) {
            return response()->json(['result' => 'SUCCESS']);
        }
        return response()->json(['result' => 'FAILURE']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $request = $request->toArray();

        $request['updated_at'] = Carbon::now();

        $update = Project::where('id', $request['id'])
            ->update($request);


        if ($update) {
            return response()->json(['result' => 'SUCCESS']);
        }
        return response()->json(['result' => 'FAILURE']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Project::where('id', $id)->delete();


        if ($delete) {
            return response()->json(['result' => 'SUCCESS']);
        }
        return response()->json(['result' => 'FAILURE']);
    }


    public function search($searchType, $searchText)
    {
        return  Project::where($searchType, 'LIKE', '%' . $searchText . '%')->get();
    }
}

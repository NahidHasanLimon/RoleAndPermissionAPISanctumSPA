<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\API\SubModule;
use App\Models\SubModule as ModelsSubModule;
use Illuminate\Http\Request;
class SubModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            // 'name' => 'required|unique:sub_modules,name',
            'name' => 'required',
            'module_id' => 'required',
        ]);
        $store = ModelsSubModule::create($request->all());
        return response()->json(
            [
                'success'=>true,
                'data' => $store
            ]
            );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\API\SubModule  $subModule
     * @return \Illuminate\Http\Response
     */
    public function show(SubModule $subModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\API\SubModule  $subModule
     * @return \Illuminate\Http\Response
     */
    public function edit(SubModule $subModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\API\SubModule  $subModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubModule $subModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\API\SubModule  $subModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubModule $subModule)
    {
        //
    }
}

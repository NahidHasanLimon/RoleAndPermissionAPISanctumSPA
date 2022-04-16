<?php

namespace App\Http\Controllers\API;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ModuleController extends Controller
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
        //
        $request->validate([
            'name' => 'required|unique:modules,name',
        ]);
        $store = Module::create($request->all());
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
     * @param  \App\Models\APIModule  $aPIModule
     * @return \Illuminate\Http\Response
     */
    public function show(APIModule $aPIModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\APIModule  $aPIModule
     * @return \Illuminate\Http\Response
     */
    public function edit(APIModule $aPIModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\APIModule  $aPIModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, APIModule $aPIModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\APIModule  $aPIModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(APIModule $aPIModule)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Stuktural;
use App\Http\Requests\StoreStukturalRequest;
use App\Http\Requests\UpdateStukturalRequest;
use App\DataTables\StukturalDataTable;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class StukturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StukturalDataTable $dataTable)
    {
        return $dataTable->render('permissiongroup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['permissiongroups'] = Stuktural::all();

        $this->data['action'] = "/permissiongroup";
        return view('permissiongroup.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionGroupRequest $request)
    {
        Stuktural::create($request->all());

        return redirect('/permissiongroup')->with('success', 'New permission group has been created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stuktural  $stuktural
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuktural $stuktural)
    {
        $this->data['permissiongroups'] = Stuktural::all();

        $this->data['permissiongroup_data'] = $stuktural;
        $this->data['action'] = "/permissiongroup/".$stuktural->uuid;
        return view('permissiongroup.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionGroupRequest  $request
     * @param  \App\Models\Stuktural  $stuktural
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionGroupRequest $request, Stuktural $stuktural)
    {
        Stuktural::find($stuktural->uuid)
            ->update($request->all());

        return redirect('/permissiongroup')->with('success', 'Permission Group has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stuktural  $stuktural
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuktural $stuktural)
    {
        $stuktural->delete();
        return redirect('/permissiongroup')->with('success', 'Permission Group has been deleted!');
    }
}

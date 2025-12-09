<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Http\Requests\StoreGaleryRequest;
use App\Http\Requests\UpdateGaleryRequest;
use App\DataTables\GaleryDataTable;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GaleryDataTable $dataTable)
    {
        return $dataTable->render('galery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['galeries'] = Galery::all();

        $this->data['action'] = "/galery";
        return view('galery.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGaleryRequest $request)
    {
        Galery::create($request->all());

        return redirect('/galery')->with('success', 'New galery item has been created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        $this->data['galeries'] = Galery::all();

        $this->data['galery_data'] = $galery;
        $this->data['action'] = "/galery/".$galery->uuid;
        return view('galery.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleryRequest  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGaleryRequest $request, Galery $galery)
    {
        Galery::where('uuid', $galery->uuid)
            ->update($request->all());

        return redirect('/galery')->with('success', 'Galery item has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        $galery->delete();
        return redirect('/galery')->with('success', 'Galery item has been deleted!');
    }
}

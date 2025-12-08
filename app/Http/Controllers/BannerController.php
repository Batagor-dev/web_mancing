<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\DataTables\BannerDataTable;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BannerDataTable $dataTable)
    {
        return $dataTable->render('banner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['banners'] = Banner::all();

        $this->data['action'] = "/banner";
        return view('banner.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        $data = $request->only(['name', 'link']);

        // upload photo
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('banner', 'public');
        }

        $data['uuid'] = \Str::uuid();

        Banner::create($data);

        return redirect('/banner')->with('success', 'New Banner has been created!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $this->data['banners'] = Banner::all();

        $this->data['banner_data'] = $banner;
        $this->data['action'] = "/banner/".$banner->uuid;
        return view('banner.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $data = $request->only(['name', 'link']);

        // If upload new photo
        if ($request->hasFile('photo')) {

            // delete old photo
            if ($banner->photo && file_exists(storage_path('app/public/'.$banner->photo))) {
                unlink(storage_path('app/public/'.$banner->photo));
            }

            $data['photo'] = $request->file('photo')->store('banner', 'public');
        }

        $banner->update($data);

        return redirect('/banner')->with('success', 'Banner has been updated!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect('/banner')->with('success', 'Banner has been deleted!');
    }
}

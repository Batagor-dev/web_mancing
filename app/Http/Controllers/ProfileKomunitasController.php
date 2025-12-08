<?php

namespace App\Http\Controllers;

use App\Models\ProfileKomunitas;
use App\Http\Requests\StoreProfileKomunitasRequest;
use App\Http\Requests\UpdateProfileKomunitasRequest;
use App\DataTables\ProfileKomunitasDataTable;

class ProfileKomunitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProfileKomunitasDataTable $dataTable)
    {
        return $dataTable->render('profil_komunitas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['profilkomunitass'] = ProfileKomunitas::all();

        $this->data['action'] = "/profil_komunitas";
        return view('profil_komunitas.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileKomunitasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileKomunitasRequest $request)
    {
        $data = $request->only(['title', 'deskripsi']);

        // HANDLE UPLOAD PHOTO
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')
                ->store('profil_komunitas', 'public'); 
        }

        ProfileKomunitas::create($data);

        return redirect('/profil_komunitas')->with('success', 'New profil komunitas has been created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileKomunitas  $profilkomunitas
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileKomunitas $profilkomunitas)
    {
        $this->data['profilkomunitass'] = ProfileKomunitas::all();

        $this->data['profilkomunitas_data'] = $profilkomunitas;
        $this->data['action'] = "/profil_komunitas/".$profilkomunitas->uuid;
        return view('profil_komunitas.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileKomunitasRequest  $request
     * @param  \App\Models\ProfileKomunitas  $profilkomunitas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileKomunitasRequest $request, ProfileKomunitas $profilkomunitas)
    {
        $data = $request->only(['title', 'deskripsi']);

        // HANDLE UPDATE PHOTO
        if ($request->hasFile('photo')) {

            // hapus foto lama jika ada
            if ($profilkomunitas->photo && Storage::disk('public')->exists($profilkomunitas->photo)) {
                Storage::disk('public')->delete($profilkomunitas->photo);
            }

            // upload yang baru
            $data['photo'] = $request->file('photo')
                ->store('profil_komunitas', 'public');
        }

        $profilkomunitas->update($data);

        return redirect('/profil_komunitas')->with('success', 'Profil Komunitas has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileKomunitas  $profilkomunitas
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileKomunitas $profilkomunitas)
    {
        // hapus foto dari storage
        if ($profilkomunitas->photo && Storage::disk('public')->exists($profilkomunitas->photo)) {
            Storage::disk('public')->delete($profilkomunitas->photo);
        }

        $profilkomunitas->delete();

        return redirect('/profil_komunitas')->with('success', 'Profil Komunitas has been deleted!');
    }
}

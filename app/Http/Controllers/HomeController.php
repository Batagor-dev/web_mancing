<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Profil;
use App\Models\Struktural;
use App\Models\Gallery;
use App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            // Banner utama
            'banners' => Banner::where('status', 1)
                ->orderBy('created_at', 'desc')
                ->get(),
        ];

        return view('home.index', $data);
    }
}

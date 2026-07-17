<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PotensiController extends Controller
{
    public function index()
    {
        $json = file_get_contents(storage_path('data/umkm.json'));

        $umkmData = json_decode($json, true);

        $json = file_get_contents(storage_path('data/culture.json'));

        $cultureData = json_decode($json, true);

        $json = file_get_contents(storage_path('data/commodity.json'));

        $commodityData = json_decode($json, true);

        $json = file_get_contents(storage_path('data/wisata.json'));

        $wisataData = json_decode($json, true);

        $json = file_get_contents(storage_path('data/statistik.json'));

        $statistikData = json_decode($json, true);

        $json = file_get_contents(storage_path('data/gallery.json'));

        $galleryData = json_decode($json, true);

        return view('potensiDesa', [
            'umkm' => $umkmData['umkm'],
            'culture' => $cultureData['culture'],
            'commodity' => $commodityData['commodity'],
            'wisata' => $wisataData['wisata'],
            'statistik' => $statistikData['statistik'],
            'gallery' => $galleryData['gallery']
        ]);
    }
}

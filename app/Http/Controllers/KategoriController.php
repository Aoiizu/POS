<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
public function index()
{
    DB::table('m_kategori')->insert([
        'kategori_kode' => 'SNK',
        'kategori_nama' => 'Snack/Makanan Ringan'
    ]);

        DB::table('m_kategori')->insert([
        'kategori_kode' => 'CK',
        'kategori_nama' => 'Kue'
    ]);

    $kategori = DB::table('m_kategori')->get();

    return view('kategori', compact('kategori'));
    }
}

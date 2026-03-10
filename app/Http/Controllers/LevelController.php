<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
{
    DB::insert(
        'insert into m_level(level_kode, level_nama) values (?, ?)',
        ['TST', 'Test Level']
    );

    DB::update(
        'update m_level set level_nama = ? where level_kode = ?',
        ['Updated Test', 'TST']
    );

    DB::delete(
        'delete from m_level where level_kode = ?',
        ['TST']
    );

    $level = DB::select('select * from m_level');

    return view('level', ['level' => $level]);
    }
}

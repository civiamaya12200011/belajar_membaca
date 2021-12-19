<?php

namespace App\Controllers;

/**
 * create project mystory
 * tugas kelompok
 * semoga berhasil
 */

class Hallo extends BaseController
{

    public function hal_awal()
    {
        return 'hallo selamat datang di mystory';
    }

    public function beranda_login()
    {
        return view('Daftar/login');
    }

    public function Ddaftar_member()
    {
        return view('Daftar/daftar_member');
    }
}

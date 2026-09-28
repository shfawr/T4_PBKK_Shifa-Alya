<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $user = request()->query('user');

        return view('home', compact('user'));
    }

    public function student($nrp)
    {
        $nama = 'Shifa Alya Dewi';
        $departemen = 'Teknik Informatika';
        $universitas = 'Institut Teknologi Sepuluh Nopember';
        $status = 'Mahasiswa Aktif';
        $minat = 'Web Development';

        return view('student', compact(
            'nrp',
            'nama',
            'departemen',
            'universitas',
            'status',
            'minat'
        ));
    }

    public function agent($tema = 'General Assistant Agent')
    {
        $temaMap = [
            'database-health' => 'Database Health Checker & Performance Monitor Agent',
        ];

        $namaTema = $temaMap[$tema] ?? $tema;
        $mode = request()->query('mode', 'light');

        return view('agent', compact(
            'tema',
            'namaTema',
            'mode'
        ));
    }

    public function ipk($ipk1, $ipk2)
    {
        $ipk1 = (float) $ipk1;
        $ipk2 = (float) $ipk2;

        $rataRata = ($ipk1 + $ipk2) / 2;

        return view('ipk', compact(
            'ipk1',
            'ipk2',
            'rataRata'
        ));
    }
}
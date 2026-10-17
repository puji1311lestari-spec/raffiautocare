<?php

namespace App\Http\Controllers;

use App\Models\Service;

class CompanyProfileController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function layanan()
    {
        $services = Service::orderBy('id')->paginate(3);

        return view('layanan', compact('services'));
    }

    public function kontak()
    {
        return view('kontak');
    }
}

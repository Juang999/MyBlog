<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('portofolio.index', [
            'active' => 'portofolio'
        ]);
    }
}

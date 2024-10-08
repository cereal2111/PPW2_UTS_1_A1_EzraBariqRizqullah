<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemain;

class PemainController extends Controller
{
    public function index()
{
    $pemains = Pemain::all();
    return view('pemains.index', compact('pemains'));
}
}






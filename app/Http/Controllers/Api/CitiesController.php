<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Citie;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index()
    {
        return Citie::all();
    }
}

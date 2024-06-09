<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Salarie;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        return Employe::with('departement')->get();
    }
    public function home(){
        return Salarie::with('service')->get();
    }
}


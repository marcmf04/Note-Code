<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }
}

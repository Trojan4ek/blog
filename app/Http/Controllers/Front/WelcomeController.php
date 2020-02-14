<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Serial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $serials = Serial::all();
        return view('Front.index', ['serials' => $serials]);
    }

}

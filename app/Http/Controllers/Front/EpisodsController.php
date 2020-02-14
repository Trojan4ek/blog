<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Serial;
use App\Models\Seriya;
use Illuminate\Http\Request;

class EpisodsController extends Controller
{

    public function index($id)
    {
        $seriyas = Seriya::where('season_id', $id)->get();
        return view('Front.episods', [
            'seriyas' => $seriyas,
        ]);
    }

}

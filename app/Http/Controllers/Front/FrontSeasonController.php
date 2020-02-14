<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Season;

use App\Models\Serial;
use Illuminate\Http\Request;

class FrontSeasonController extends Controller
{

    public function index($id)
    {
        $seasons = Season::where('serial_id', $id)->get();
        return view('Front.seasons', [
            'seasons' => $seasons,
            ]);
    }

}

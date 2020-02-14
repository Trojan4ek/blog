<?php
namespace App\Http\Controllers\Front;

use App\Repositories\SeriyaRepository;
use App\Http\Controllers\Controller;
use App\Models\Serial;
use App\Models\Seriya;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    private $seriyaRepository;

    public function __construct(SeriyaRepository $seriyaRepo)
    {
        $this->seriyaRepository = $seriyaRepo;
    }

    public function index($id)
    {
        $seriya = $this->seriyaRepository->find($id);

        if (empty($seriya)) {
            Flash::error('Seriya not found');

            return redirect(route('Front.episods'));
        }

        return view('Front.show')->with('seriya', $seriya);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeriyaRequest;
use App\Http\Requests\UpdateSeriyaRequest;
use App\Models\Season;
use App\Models\Serial;
use App\Models\Seriya;
use App\Repositories\SeriyaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SeriyaController extends AppBaseController
{
    /** @var  SeriyaRepository */
    private $seriyaRepository;

    public function __construct(SeriyaRepository $seriyaRepo)
    {
        $this->seriyaRepository = $seriyaRepo;
    }

    /**
     * Display a listing of the Seriya.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->has('season_id')) {
            $seriyas = Seriya::filterBySeriya($request->get('season_id'))->get();
        } else {
            $seriyas = $this->seriyaRepository->all();
        }
        return view('seriyas.index')
            ->with('seriyas', $seriyas);
    }

    /**
     * Show the form for creating a new Seriya.
     *
     * @return Response
     */
    public function create()
    {
        return view('seriyas.create',[
            'seasons' => Season::pluck('title', 'id'),
        ]);
    }

    /**
     * Store a newly created Seriya in storage.
     *
     * @param CreateSeriyaRequest $request
     *
     * @return Response
     */
    public function store(CreateSeriyaRequest $request)
    {
        $input = $request->all();

        $seriya = $this->seriyaRepository->create($input);

        Flash::success('Seriya saved successfully.');

        return redirect(route('seriyas.index'));
    }

    /**
     * Display the specified Seriya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $seriya = $this->seriyaRepository->find($id);

        if (empty($seriya)) {
            Flash::error('Seriya not found');

            return redirect(route('seriyas.index'));
        }

        return view('seriyas.show')->with('seriya', $seriya);
    }

    /**
     * Show the form for editing the specified Seriya.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $seriya = $this->seriyaRepository->find($id);

        if (empty($seriya)) {
            Flash::error('Seriya not found');

            return redirect(route('seriyas.index'));
        }

        return view('seriyas.edit',[
            'seriya' => $seriya,
            'seasons' => Season::pluck('title', 'id'),
        ]);
    }

    /**
     * Update the specified Seriya in storage.
     *
     * @param int $id
     * @param UpdateSeriyaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeriyaRequest $request)
    {
        $seriya = $this->seriyaRepository->find($id);

        if (empty($seriya)) {
            Flash::error('Seriya not found');

            return redirect(route('seriyas.index'));
        }

        $seriya = $this->seriyaRepository->update($request->all(), $id);

        Flash::success('Seriya updated successfully.');

        return redirect(route('seriyas.index'));
    }

    /**
     * Remove the specified Seriya from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $seriya = $this->seriyaRepository->find($id);

        if (empty($seriya)) {
            Flash::error('Seriya not found');

            return redirect(route('seriyas.index'));
        }

        $this->seriyaRepository->delete($id);

        Flash::success('Seriya deleted successfully.');

        return redirect(route('seriyas.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSeasonRequest;
use App\Http\Requests\UpdateSeasonRequest;
use App\Models\Season;
use App\Models\Serial;
use App\Repositories\SeasonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SeasonController extends AppBaseController
{
    /** @var  SeasonRepository */
    private $seasonRepository;

    public function __construct(SeasonRepository $seasonRepo)
    {
        $this->seasonRepository = $seasonRepo;
    }

    /**
     * Display a listing of the Season.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->has('serial_id')) {
            $seasons = Season::FilterBySeason($request->get('serial_id'))->get();
        } else {
            $seasons = $this->seasonRepository->all();
        }

        return view('seasons.index')
            ->with('seasons', $seasons);
    }

    /**
     * Show the form for creating a new Season.
     *
     * @return Response
     */
    public function create()
    {

        return view('seasons.create',[
            'serial' => Serial::pluck('title', 'id'),
        ]);
    }

    /**
     * Store a newly created Season in storage.
     *
     * @param CreateSeasonRequest $request
     *
     * @return Response
     */
    public function store(CreateSeasonRequest $request)
    {
        $input = $request->all();

        $season = $this->seasonRepository->create($input);

        if ($request->hasFile('path')) {
            $season->uploadImage($request->file('path'));
        }

        Flash::success('Season saved successfully.');

        return redirect(route('seasons.index'));
    }

    /**
     * Display the specified Season.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $season = $this->seasonRepository->find($id);

        if (empty($season)) {
            Flash::error('Season not found');

            return redirect(route('seasons.index'));
        }


        return view('seasons.show')->with('season', $season);
    }

    /**
     * Show the form for editing the specified Season.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $season = $this->seasonRepository->find($id);

        if (empty($season)) {
            Flash::error('Season not found');

            return redirect(route('seasons.index'));
        }

        return view('seasons.edit',[
            'season' => $season,
            'serial' => Serial::pluck('title', 'id'),
        ]);
    }

    /**
     * Update the specified Season in storage.
     *
     * @param int $id
     * @param UpdateSeasonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSeasonRequest $request)
    {
        $season = $this->seasonRepository->find($id);

        if (empty($season)) {
            Flash::error('Season not found');

            return redirect(route('seasons.index'));
        }

        $season = $this->seasonRepository->update($request->all(), $id);

        if ($request->hasFile('path')) {
            $season->uploadImage($request->file('path'));
        }

        Flash::success('Season updated successfully.');

        return redirect(route('seasons.index'));
    }

    /**
     * Remove the specified Season from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $season = $this->seasonRepository->find($id);

        if (empty($season)) {
            Flash::error('Season not found');

            return redirect(route('seasons.index'));
        }

        $this->seasonRepository->delete($id);

        Flash::success('Season deleted successfully.');

        return redirect(route('seasons.index'));
    }
}

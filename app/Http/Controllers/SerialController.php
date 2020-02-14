<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSerialRequest;
use App\Http\Requests\UpdateSerialRequest;
use App\Repositories\SerialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SerialController extends AppBaseController
{
    /** @var  SerialRepository */
    private $serialRepository;

    public function __construct(SerialRepository $serialRepo)
    {
        $this->serialRepository = $serialRepo;
    }

    /**
     * Display a listing of the Serial.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $serials = $this->serialRepository->all();

        return view('serials.index')
            ->with('serials', $serials);
    }

    /**
     * Show the form for creating a new Serial.
     *
     * @return Response
     */
    public function create()
    {
        return view('serials.create');
    }

    /**
     * Store a newly created Serial in storage.
     *
     * @param CreateSerialRequest $request
     *
     * @return Response
     */
    public function store(CreateSerialRequest $request)
    {
        $input = $request->all();

        $serial = $this->serialRepository->create($input);

       if ($request->hasFile('path')) {
           $serial->uploadImage($request->file('path'));
       }

        Flash::success('Serial saved successfully.');

        return redirect(route('serials.index'));
    }

    /**
     * Display the specified Serial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $serial = $this->serialRepository->find($id);

        if (empty($serial)) {
            Flash::error('Serial not found');

            return redirect(route('serials.index'));
        }

        return view('serials.show')->with('serial', $serial);
    }

    /**
     * Show the form for editing the specified Serial.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $serial = $this->serialRepository->find($id);

        if (empty($serial)) {
            Flash::error('Serial not found');

            return redirect(route('serials.index'));
        }

        return view('serials.edit')->with('serial', $serial);
    }

    /**
     * Update the specified Serial in storage.
     *
     * @param int $id
     * @param UpdateSerialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSerialRequest $request)
    {
        $serial = $this->serialRepository->find($id);

        if (empty($serial)) {
            Flash::error('Serial not found');

            return redirect(route('serials.index'));
        }

        $serial = $this->serialRepository->update($request->all(), $id);

        if ($request->hasFile('path')) {
            $serial->uploadImage($request->file('path'));
        }

        Flash::success('Serial updated successfully.');

        return redirect(route('serials.index'));
    }

    /**
     * Remove the specified Serial from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $serial = $this->serialRepository->find($id);

        if (empty($serial)) {
            Flash::error('Serial not found');

            return redirect(route('serials.index'));
        }

        $this->serialRepository->delete($id);

        Flash::success('Serial deleted successfully.');

        return redirect(route('serials.index'));
    }
}

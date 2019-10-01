<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Reservation;

// https://restfulapi.net/http-status-codes/

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->get();

        return response()->json($reservations);
    }

    public function store(ReservationRequest $request)
    {
        $reservation = Reservation::create($request->all());

        return response()->json($reservation, 201);
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return response()->json($reservation);
    }

    public function update(ReservationRequest $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update($request->all());

        return response()->json($reservation, 200);
    }

    public function destroy($id)
    {
        Reservation::destroy($id);

        return response()->json(null, 204);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Reservation',
                'reservations',
                'reservation'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }
}
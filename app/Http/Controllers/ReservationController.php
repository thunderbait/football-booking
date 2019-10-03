<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Reservation;
use Illuminate\Http\Request;
use App\Timeslot;

// https://restfulapi.net/http-status-codes/

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();

        $timeslot = Timeslot::find('start_time');

        return view('reservations.index', compact('reservations'));
    }

    public function create(ReservationRequest $request)
    {
        $reservation = Reservation::all();

        return view('reservations.create');
    }   

    public function store(Request $request)
    {
        $request->validate([
            'pitch_id'=>'required',
            'user_id'=> 'required',
            'timeslot_id' => 'required',
            'date' => 'required',
            'paid_for' => 'required'
        ]);
        $reservation = new Reservation([
            'pitch_id' => $request->get('pitch_id'),
            'user_id'=> $request->get('user_id'),
            'timeslot_id'=> $request->get('timeslot_id'),
            'date'=> $request->get('date'),
            'paid_for'=> $request->get('paid_for')
        ]);

        $reservation->save();

        return redirect('/reservations')->with('success', 'Reservation has been added');
    }


    public function show($id)
    {
        $reservations = Reservation::all();

        return view('reservations/show', compact('reservations'));
    }

    public function edit($id)
    {
        $pitch = Reservation::find($id);

        return view('reservations.edit', compact('reservation'));
    }

    public function update(ReservationRequest $request, $id)
    {
        $request->validate([
            'pitch_id'=>'required',
            'user_id'=> 'required',
            'timeslot_id' => 'required',
            'date' => 'required',
            'paid_for' => 'required'
        ]);
            
        $reservation = Reservation::find($id);
        $reservation->pitch_id = $request->get('pitch_id');
        $reservation->user_id = $request->get('user_id');
        $reservation->timeslot_id = $request->get('timeslot_id');
        $reservation->date = $request->get('date');
        $reservation->paid_for = $request->get('paid_for');

        $reservation->save();

        return redirect('/reservations')->with('success', 'Reservation has been updated');
    }

    public function destroy($id)
    {
        $pitch = Pitch::find($id);
        $pitch->delete();

        return redirect('/reservation')->with('success', 'Reservation has been deleted Successfully');
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
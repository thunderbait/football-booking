<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeslotRequest;
use Illuminate\Http\Request;
use App\Timeslot;

class TimeslotController extends Controller
{
    public function index()
    {
        $timeslots = Timeslot::all();

        return view('timeslots/index', compact('timeslots'));
    }

    public function create(TimeslotRequest $request)
    {
        $timeslots = Timeslot::all();

        return view('pitches.create');
    }

    public function store(TimeslotRequest $request)
    {
        $request->validate([
            'start_time'=>'required',
            'end_time'=>'required'
        ]);

        $timeslot = new Timeslot([
            'start_time'=> $request->get('start_time'),
            'end_time'=> $request->get('end_time')
        ]);

        $pitch->save();

        return redirect('/timeslots')->with('success', 'Timeslot has been added!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $timeslot = Timeslot::find($id);

        return view('timeslots.edit', compact('timeslots'));
    }

    public function update(TimeslotRequest $request, $id)
    {
        $request->validate([
            'start_time'=>'required',
            'end_time'=>'required'
        ]);

        $timeslot = Timeslot::find($id);
        $timeslot->start_time = $request->get('start_time');
        $timeslot->end_time = $request->get('end_time');
        $timeslot->save();

        return redirect('/timeslots')->with('success', 'Timeslot has been edited!');
    }

    public function destroy($id)
    {
        $timeslot = Timeslot::find($id);
        $timeslot->delete();

        return redirect('/timeslots')->with('success', 'Timeslot has been deleted!');
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Timeslot',
                'timeslots',
                'timeslot'
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
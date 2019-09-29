<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimeslotRequest;
use App\Timeslot;

class TimeslotController extends Controller
{
    public function index()
    {
        $timeslots = Timeslot::latest()->get();

        return response()->json($timeslots);
    }

    public function store(TimeslotRequest $request)
    {
        $timeslot = Timeslot::create($request->all());

        return response()->json($timeslot, 201);
    }

    public function show($id)
    {
        $timeslot = Timeslot::findOrFail($id);

        return response()->json($timeslot);
    }

    public function update(TimeslotRequest $request, $id)
    {
        $timeslot = Timeslot::findOrFail($id);
        $timeslot->update($request->all());

        return response()->json($timeslot, 200);
    }

    public function destroy($id)
    {
        Timeslot::destroy($id);

        return response()->json(null, 204);
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
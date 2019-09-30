<?php

namespace App\Http\Controllers;

use App\Http\Requests\PitchRequest;
use App\Pitch;

class PitchController extends Controller
{
    public function index()
    {
        $pitches = Pitch::all();

        return view('pitches/index', compact('pitches'));
    }

    public function store(PitchRequest $request)
    {
        $pitch = Pitch::create($request->all());

        return response()->json($pitch, 201);
    }

    public function show($id)
    {
        $pitch = Pitch::findOrFail($id);

        return response()->json($pitch);
    }

    public function update(PitchRequest $request, $id)
    {
        $pitch = Pitch::findOrFail($id);
        $pitch->update($request->all());

        return response()->json($pitch, 200);
    }

    public function destroy($id)
    {
        Pitch::destroy($id);

        return response()->json(null, 204);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Pitch',
                'pitches',
                'pitch'
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
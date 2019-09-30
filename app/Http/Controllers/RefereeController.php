<?php

namespace App\Http\Controllers;

use App\Http\Requests\RefereeRequest;
use App\Referee;

class RefereeController extends Controller
{
    public function index()
    {
        $referees = Referee::latest()->get();

        return response()->json($referees);
    }

    public function store(RefereeRequest $request)
    {
        $referee = Referee::create($request->all());

        return response()->json($referee, 201);
    }

    public function show($id)
    {
        $referee = Referee::findOrFail($id);

        return response()->json($referee);
    }

    public function update(RefereeRequest $request, $id)
    {
        $referee = Referee::findOrFail($id);
        $referee->update($request->all());

        return response()->json($referee, 200);
    }

    public function destroy($id)
    {
        Referee::destroy($id);

        return response()->json(null, 204);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Referee',
                'referees',
                'referee'
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
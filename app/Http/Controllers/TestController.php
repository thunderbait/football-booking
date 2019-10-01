<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use App\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::latest()->get();

        return response()->json($tests);
    }

    public function store(TestRequest $request)
    {
        $test = Test::create($request->all());

        return response()->json($test, 201);
    }

    public function show($id)
    {
        $test = Test::findOrFail($id);

        return response()->json($test);
    }

    public function update(TestRequest $request, $id)
    {
        $test = Test::findOrFail($id);
        $test->update($request->all());

        return response()->json($test, 200);
    }

    public function destroy($id)
    {
        Test::destroy($id);

        return response()->json(null, 204);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Test',
                'tests',
                'test'
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
<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners', compact('partners'));
    }

    public function store(PartnerRequest $request)
    {
        $partner = Partner::create($request->all());

        return response()->json($partner, 201);
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);

        return response()->json($partner);
    }

    public function update(PartnerRequest $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $partner->update($request->all());

        return response()->json($partner, 200);
    }

    public function destroy($id)
    {
        Partner::destroy($id);

        return response()->json(null, 204);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                'Partner',
                'partners',
                'partner'
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
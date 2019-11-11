<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PitchRequest;
use App\Pitch;

class PitchController extends Controller
{
    public function index(Request $request)
    {
        clock()->startEvent('call-call',"DB load");
        
        $pitches = Pitch::all();

        clock()->endEvent('call-call');

        return view('pitches.index', compact('pitches'));
    }

    public function create(PitchRequest $request)
    {
        $pitch = Pitch::all();

        return view('pitches.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location'=> 'required',
            'size' => 'required',
            'type' => 'required'
        ]);
        $pitch = new Pitch([
            'name' => $request->get('name'),
            'location'=> $request->get('location'),
            'size'=> $request->get('size'),
            'type'=> $request->get('type')
        ]);

        $pitch->save();

        return redirect('/pitches')->with('success', 'Pitch has been added');
    }

    public function show($id)
    {
        $pitches = Pitch::all();

        return view('pitches/show', compact('pitches'));
    }

    public function edit($id)
    {
        $pitch = Pitch::find($id);

        return view('pitches.edit', compact('pitch'));
    }

    public function update(Request $request, $id)
    {
          $request->validate([
            'name'=>'required',
            'location'=> 'required',
            'size' => 'required',
            'type' => 'required'
          ]);

          $pitch = Pitch::find($id);
          $pitch->name = $request->get('name');
          $pitch->location = $request->get('location');
          $pitch->size = $request->get('size');
          $pitch->type = $request->get('type');
          $pitch->save();

          return redirect('/pitches')->with('success', 'Pitch has been updated');
    }

    public function destroy($id)
    {
         $pitch = Pitch::find($id);
         $pitch->delete();

         return redirect('/pitches')->with('success', 'Pitch has been deleted Successfully');
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

    public function showCities(Request $request, $city)
    {
        $pitches = Pitch::where('location', $city)->get();

        return view('pitches.show', compact('pitches'));
    }

    public function showSize(Request $request, $size)
    {
        $pitches = Pitch::where('size', $size)->get();

        return view('pitches.show', compact('pitches'));
    }

    public function showTypes(Request $request, $type)
    {
        $pitches = Pitch::where('type', $type)->get();

        return view('pitches.show', compact('pitches'));
    }

}
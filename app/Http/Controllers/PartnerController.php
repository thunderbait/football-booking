<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners/index', compact('partners'));
    }

    public function store(PartnerRequest $request)
    {
        
    }//

    public function show($id)
    {
        //
    }

    public function update(PartnerRequest $request, $id)
    {
       // 
    }

}
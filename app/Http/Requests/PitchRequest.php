<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PitchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }

}
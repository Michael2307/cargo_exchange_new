<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddGoodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'unload_city_name' => ['required', 'string', 'max:255'],
            'good' => ['required', 'bool'],
            'date' => ['required', 'date'],
            'points' => ['required', 'array', 'min:2'],
            'points.*.name' => ['required', 'string'],
            'points.*.lat' => ['required', 'numeric'],
            'points.*.lng' => ['required', 'numeric'],
        ];
    }
}

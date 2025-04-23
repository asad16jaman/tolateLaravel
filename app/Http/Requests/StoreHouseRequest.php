<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHouseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "type" => "required",
            'thum' => "required",
            'price' => "required|int|min:2000|max:50000",
            'numberOfRooms' => "required|int",
            'numberOfBathRooms' => "required|int",
            'numberOfBalcony' => "required|int",
            'availableFrom' => "required|date",
            'division' => "required",
            'district' => "required",
            'thana' => "required",
            'area' => "required",
        ];
    }
}

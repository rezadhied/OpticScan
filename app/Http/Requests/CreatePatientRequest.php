<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePatientRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Pastikan untuk mengatur otorisasi sesuai kebutuhan
    }

    public function rules()
    {
        return [
            'patient_phone' => 'required|string|max:15',
            'register_date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}

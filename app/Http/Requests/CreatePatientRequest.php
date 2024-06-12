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
            'patient_name' => 'required|string|max:255',
            'patient_phone' => 'required|string|max:15',
            'patient_id' => 'required|string|max:50|unique:patient_reports,patient_id',
            'register_date' => 'required|date',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}

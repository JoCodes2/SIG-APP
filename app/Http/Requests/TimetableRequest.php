<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TimetableRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'day' => 'required|in:sunday,monday,tuesday,thursday,friday,saturday',
            'start_time' => 'required',
            'end_time' => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
            'day.required' => 'Hari wajib dipilih.',
            'day.in' => 'Hari yang dipilih tidak valid. Pilih salah satu dari: Sunday, Monday, Tuesday, Thursday, Friday, atau Saturday.',
            'start_time.required' => 'Waktu mulai wajib diisi.',
            'end_time.required' => 'Waktu selesai wajib diisi.',

        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'code' => 422,
            'message' => 'Check your validation',
            'errors' => $validator->errors()
        ]));
    }
}

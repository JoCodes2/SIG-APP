<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MemberRequest extends FormRequest
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
            'name' => 'required|max:50',
            'date_birth' => 'required|date_format:Y-m-d',
            'place_birth' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'status' => 'required|in:widow,singel,marry,widower',
            'status_member' => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 50 karakter.',

            'date_birth.required' => 'Tanggal lahir wajib diisi.',
            'date_birth.date_format' => 'Format tanggal lahir harus Y-m-d (contoh: 2000-01-01).',

            'place_birth.required' => 'Tempat lahir wajib diisi.',

            'age.required' => 'Usia wajib diisi.',
            'age.numeric' => 'Usia harus berupa angka.',

            'address.required' => 'Alamat wajib diisi.',

            'status.required' => 'Status wajib diisi.',
            'status.in' => 'Status harus salah satu dari:janda,lajang,menikah,duda.',

            'status_member.required' => 'Status anggota wajib diisi.',
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

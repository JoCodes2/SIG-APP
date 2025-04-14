<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ContentRequest extends FormRequest
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
            'image' => $this->is('v1/content/update/*') ? 'image|mimes:jpeg,png,jpg|max:2048' : 'image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|in:galeri,news,link',
            'date_upload' => 'required',

        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'image.image' => 'Gambar harus berupa file gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'category.required' => 'Hari wajib dipilih.',
            'category.in' => 'Hari yang dipilih tidak valid. Pilih salah satu dari: galeri, news, link.',
            'date_upload.required' => 'tanggal upload wajib diisi.',

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

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RumahRequest extends FormRequest
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
            'namaUnit' => 'required|string|min:5|max:30',
            'hargaUnit' => 'required|numeric',
            'tipe' => 'required|string|min:2|max:30',
            'gambar1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'alamatLengkap' => 'required|string|min:10|max:300',
            'desa' => 'required|string|min:3|max:30',
            'kecamatan' => 'required|string|min:3|max:30',
            'kabupaten' => 'required|string|min:3|max:30',
            'provinsi' => 'required|string|min:3|max:30',
            'judul' => 'max:100',
            'deskripsiLengkap' => 'max:300',
            'gambar2' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar3' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar4' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar5' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}

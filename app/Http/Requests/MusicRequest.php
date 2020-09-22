<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MusicRequest extends FormRequest
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
            //
            'music_name' => 'required|min:2|max:40',
            'image' => 'required|image',
            'audio' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
            'singer' => 'required',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'song_name' => 'required|min:2|max:20',
            'author' => 'required|min:2|max:20',
            'image' => 'required|image',
            'audio' => 'required|mimes:application/octet-stream,audio/mpeg,mp3,wav',
        ];
    }
}

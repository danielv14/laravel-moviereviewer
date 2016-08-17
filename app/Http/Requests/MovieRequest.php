<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovieRequest extends Request
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
          'title'      => 'required',
          'body'       => 'required',
          'trailer'    => 'required',
          'rating'     => 'required|numeric|min:1|max:5',
          'movieTitle' => 'required',
          'imdbLink'   => 'required',
          'rottenLink' => 'required'
        ];
    }
}

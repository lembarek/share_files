<?php

namespace Lembarek\ShareFiles\Requests;

use App\Http\Requests\Request;

class AddFileRequest extends Request
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
                'file' => 'required|max:100000',
                'name' => '',
                'description' => '',
                'links' => 'url',
                'universities' => '',
        ];
    }
}

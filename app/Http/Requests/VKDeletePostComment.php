<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VKDeletePostComment extends APIRequest
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
	        'owner_id' => 'required|integer|min:1',
	        'comment_id' => 'required|integer|min:1',
        ];
    }
}

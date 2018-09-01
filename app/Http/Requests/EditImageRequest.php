<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditImageRequest extends FormRequest
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
            'txtTitle'      =>  'required',
            'txtDes'    =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required'     =>  'Không được để trống tiêu đề',
            'txtDes.required'   =>  'Không được để trống nội dung',
        ];
    }
}

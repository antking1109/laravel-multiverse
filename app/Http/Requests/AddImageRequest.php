<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddImageRequest extends FormRequest
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
            'txtTitle'      =>  'required',
            'txtDes'    =>  'required',
            'fileUpload'    =>  'required|image',
        ];
    }

    public function messages()
    {
        return [
            'txtTitle.required'     =>  'Không được để trống tiêu đề',
            'txtDes.required'   =>  'Không được để trống nội dung',
            'fileUpload.required'   =>  'Vui lòng chọn file',
            'fileUpload.image'  =>  'File chọn phải là hình ảnh.'
        ];
    }
}

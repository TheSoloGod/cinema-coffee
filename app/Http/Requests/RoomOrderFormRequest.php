<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomOrderFormRequest extends FormRequest
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
            'time' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'time.required' => 'Bạn chưa chọn thời gian',
        ];
    }
}

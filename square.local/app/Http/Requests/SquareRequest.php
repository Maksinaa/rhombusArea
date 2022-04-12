<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SquareRequest extends FormRequest
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
            'side' => 'required|numeric|min:0'
        ];
    }
    /**
     * Получить сообщения об ошибках для определенных правил проверки.
     *
     * @return array
     */
        public function messages()
        {
        return [
            'side.required' => 'Необходимо ввести сторону квадрата',
            'side.numeric' => 'Сторона квадрата должна быть числом',
            'side.min' => 'Сторона квадрата должна быть больше нуля',
        ];
    }
}

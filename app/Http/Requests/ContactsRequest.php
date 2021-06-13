<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|max:100|email:rfc',
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным.',
            'email.required' => 'Поле электронная почта является обязательным.',
            'subject.required' => 'Поле тема сообщения является обязательным.',
            'message.required' => 'Поле сообщение является обязательным.',
            'name.max' => 'Поле имя не должно превышать 50 символов',
            'email.max' => 'Поле электронная почта не должна превышать 100 символов',
            'subject.max' => 'Поле тема сообщения не должна превышать 50 символов',
            'message.max' => 'Поле сообщение не должно превышать 500 символов',
            'subject.min' => 'Поле тема сообщения должна содержать минимум 5 символов',
            'message.min' => 'Поле сообщение должно содержать минимум превышать 15 символов',
            'email.email' => 'Указана неверная почта'
        ];
    }
}

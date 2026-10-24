<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'floor'       => ['nullable', 'integer', 'min:0'],
            'room'        => ['nullable', 'integer', 'min:0'],
            'sector'      => ['nullable', 'string', 'max:255'],
            'number'      => ['nullable', 'integer', 'min:0'],
        ];
    }

    public function attributes(): array
    {
        return [
            'name'        => 'اسم الكتاب',
            'description' => 'الوصف',
            'floor'       => 'الدور',
            'room'        => 'الغرفة',
            'sector'      => 'القطاع',
            'number'      => 'رقم الكتاب',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'اسم الكتاب مطلوب.',
            'name.string'   => 'اسم الكتاب يجب أن يكون نصًا.',
            'integer'       => 'هذا الحقل يجب أن يكون رقمًا صحيحًا.',
            'min'           => 'القيمة لا يمكن أن تكون أقل من صفر.',
            'max'           => 'الحد الأقصى المسموح به هو 255 حرفًا.',
        ];
    }
}

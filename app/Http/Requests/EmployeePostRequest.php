<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EmployeePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // your authorization gates and policies within this method
        // ........
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sap' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'division' => 'required|numeric|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'sap.*' => '!กรุณาระบุข้อมูลรหัสเจ้าหน้าที่',
            'firstname.*' => '!กรุณาระบุข้อมูลชื่อ',
            'lastname.*' => '!กรุณาระบุข้อมูลนามสกุล',
            'division.*' => '!กรุณาระบุข้อมูลสังกัด',
        ];
    }
}

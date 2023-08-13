<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'school_madrasa' => ['required'],
            'student_type' => ['required'],
            'area' => ['required'],
            'name_bn' => ['required'],
            'name_en' => ['required'],
            'school_name' => ['required'],
            'class' => ['nullable'],
            'class_roll' => ['nullable'],
            'class_division' => ['nullable'],
            'class_section' => ['nullable'],
            'father_name_bn' => ['nullable'],
            'father_name_en' => ['nullable'],
            'father_occupation' => ['nullable'],
            'mother_name_bn' => ['nullable'],
            'mother_name_en' => ['nullable'],
            'mother_occupation' => ['nullable'],
            'present_address' => ['nullable'],
            'permanent_address' => ['nullable'],
            'permanent_address_village' => ['nullable'],
            'permanent_address_post_office' => ['nullable'],
            'permanent_address_thana' => ['nullable'],
            'permanent_address_district' => ['nullable'],
            'mobile' => ['nullable'],
            'facebook' => ['nullable'],
            'dob' => ['nullable'],
            'blood_group' => ['nullable'],
            'email' => ['nullable'],
            'absent_of_parent_name' => ['nullable'],
            'absent_of_parent_relation' => ['nullable'],
            'absent_of_parent_occupation' => ['nullable'],
            'absent_of_parent_annual_earning' => ['nullable'],
            'previous_scholarship_name_group' => ['nullable'],
            'image' => ['required'],
        ];
    }
}

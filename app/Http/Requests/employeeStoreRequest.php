<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class employeeStoreRequest extends FormRequest
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
            'dept_no' => 'required|string',
            'first_name' => 'required|string|max:14',
            'last_name' => 'required|string|max:16',
            'gender' => 'required|string',
            'birth_date' => 'required',
            'hire_date' => 'required',
            'title' => 'required'

        ];


    }

    public function attributes()
    {
        return [
            'dept_no'    => 'Department Name',
            'first_name' => 'First Name',
            'last_name'  => 'Last Name',
            'gender'     => 'Gender',
            'birth_date' => 'Birthdate',
            'hire_date'  => 'Hire Date',
            'title'      => 'Title'
        ];
    }
}

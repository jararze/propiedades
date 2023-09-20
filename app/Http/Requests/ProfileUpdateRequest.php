<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['nullable','string', 'max:255'],
            'name' => ['nullable','string', 'max:255'],
            'lastname' => ['nullable','string', 'max:255'],
            'address' => ['nullable','string', 'max:255'],
            'jobtitle' => ['nullable','string', 'max:255'],
            'phone' => ['nullable','string', 'max:255'],
            'city' => ['nullable','string', 'max:255'],
            'country' => ['nullable','string', 'max:255'],
            'aboutme' => ['nullable'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\GuardianUser;
use App\Models\SystemUser;
use Illuminate\Foundation\Http\FormRequest;

class ForgotPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        if (SystemUser::where('email', $this->email)->first() !== true) {
            return true;
        }

        if (GuardianUser::where('email', $this->email)->first() == true) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
        ];
    }
}

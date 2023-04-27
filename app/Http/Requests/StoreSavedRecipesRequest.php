<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSavedRecipesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'recipe_id' => ['required', 'exists:recipes,id'], // ensure the recipe_id field is present and refers to an existing recipe
            'user_id' => ['required', 'exists:users,id'], // ensure the user_id field is present and refers to an existing user
        ];
    }
}

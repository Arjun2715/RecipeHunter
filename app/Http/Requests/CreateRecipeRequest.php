<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecipeRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer',
            'author' => 'nullable|string|max:255',
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'cuisine_id' => 'nullable|integer',
            'diet_id' => 'nullable|integer',
            'description' => 'required|string',
            'nutrition_facts' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}

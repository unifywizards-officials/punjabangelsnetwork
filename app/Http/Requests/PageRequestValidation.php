<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequestValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $pageId = $this->route('page'); // Get the current page ID for update operation

    return [
        'page_type' => 'required',
        'slug' => [
            'required',
            Rule::unique('pages')->where(function ($query) {
                return $query->where('page_type', $this->input('page_type'));
            })->ignore($pageId),
        ],
        // Add other validation rules as needed
    ];
    }
}

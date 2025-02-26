<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            //"int_cod" => ["required"],  
            "name" => ["required"],  
            //"name" => ["description"],     
            "status" => ["required"],  
            "photo" => ["required"],  
            //"id_user_insert" => ["required"],  
            //"id_user_update" => ["required"] 
            
        ];
    }
}

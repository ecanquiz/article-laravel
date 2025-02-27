<?php

namespace App\Http\Requests\ArticleDetail;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticleDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): Bool
    {
        return true; //auth()->user()->role->name === "admin";
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): Array
    {
        return  [
            'article_id' => ["required"],
            'presentation_id' => ["required"],
            'quantity' => ["required"],
            'bar_cod' => ["required"],
            'category' => ["required"],
            'product' => ["required"],
            'mark' => ["required"],
            'packing_deployed',
            //'photo_path',
            'status' => ["required"],
            'user_insert_id' => ["required"],
            'user_update_id' => ["required"]            
        ];
    }
}




  
<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'int_cod' => $this->int_cod,
            'name' => $this->name,
            'description' => $this->description,            
            'status' => $this->status,
            //'image_names' => json_decode($this->image_names)
            'image_names' => $this->image_names ? explode(',', trim($this->image_names, '{}')) : [] 
        ];
    }
}

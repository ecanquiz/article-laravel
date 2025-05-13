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
            //'photos' => json_decode($this->photos)
            'photos' => $this->photos ? explode(',', trim($this->photos, '{}')) : [] 
        ];
    }
}

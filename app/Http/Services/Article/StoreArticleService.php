<?php
namespace App\Http\Services\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Models\Article;

class StoreArticleService
{
    static public function execute(StoreArticleRequest $request): JsonResponse
    {
        $article = new Article;

        //$article->int_cod = $request->int_cod;
        $article->name = $request->name;
        $article->price = $request->price;
        $article->stock_min = $request->stock_min;
        $article->stock_max = $request->stock_max;
        $article->status = $request->status;
        $article->photo = $request->photo;
        $article->id_user_insert = Auth::user()->id;
        $article->id_user_update = Auth::user()->id;
        
        $article->save();

        $article->refresh();

        return response()->json([
            "message" => "New record created successfully", 
            "id" => $article->id
        ], 201);
  }

}
<?php
namespace App\Http\Services\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\{ Http, Auth };
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Utils\ArrayTypeString;

class UpdateArticleService
{
    static public function execute(UpdateArticleRequest $request, Article $article): JsonResponse
    {
        $response = Http::post(config('api.url_static_assets')."/api/articles/{$article->id}/process-images", [
            'images' => $request->input('bases64')
        ]);

        $article->name = $request->name;        
        $article->status = $request->status;
        $article->image_names = ArrayTypeString::execute($response->json()['imageNames'], true);
        $article->id_user_update = Auth::user()->id;        

        $article->save();

        return response()->json([
            "message"=> "Registro actualizado exitosamente"
        ], 200);      
    }
}

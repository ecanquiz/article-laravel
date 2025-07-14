<?php
namespace App\Http\Services\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\{ Http, Auth };
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Utils\ArrayTypeString;
// use App\Repositories\ArticleDetailRepository;

class UpdateArticleService
{
    static public function execute(UpdateArticleRequest $request, Article $article): JsonResponse
    {          
        // $article = Article::find($request->id);

        //dd($request->bases64);
        $response = Http::post(config('api.url_static_assets')."/api/articles/{$article->id}/process-images", [
            'images' => $request->input('bases64')
        ]);
    
        /*$article = Article::create([
            'data' => $request->except('images'),
            'image_paths' => $response->json()['paths']
        ]);*/

        $article->name = $request->name;        
        $article->status = $request->status;
        $article->images = ArrayTypeString::execute($response->json()['paths'], true);
        //$article->images = ArrayTypeString::execute($request->images, true);
        $article->id_user_update = Auth::user()->id;        

        $article->save();

        return response()->json([
            "message"=> "Record updated successfully"
        ], 200);      
    }
}

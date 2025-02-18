<?php
namespace App\Http\Services\ArticleDetail;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ArticleDetail;
use App\Http\Services\Article\UpdateArticleDescriptionService;
// use App\Http\Requests\ArticleDetail\StoreArticleDetailRequest;

class DeleteArticleDetailService
{  
    static public function execute(Request $request): JsonResponse
    {
        // ArticleDetail::destroy($request->id);
        $articleDetail = ArticleDetail::find($request->id);
        $articleId =  $articleDetail->article_id;        
        
        $articleDetail->delete(); 
        UpdateArticleDescriptionService::execute($articleId);

        return response()->json(204);
    }

}

<?php
namespace App\Http\Services\ArticleDetail;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\ArticleDetail;
use App\Http\Services\Article\UpdateArticleDescriptionService;

//use App\Http\Requests\ArticleDetail\StoreArticleDetailRequest;

class StoreArticleDetailService
{
  
    //static public function execute(StoreArticleDetailRequest $request): JsonResponse
    static public function execute(Request $request): JsonResponse
    {

        //return response()->json($request[0]);
        $articleId = intval($request[0]["article_id"]);

        ArticleDetail::where('article_id', $articleId )->forceDelete();

        foreach ($request->all() as $rqst) {
            $articleDetail = new ArticleDetail();
            $articleDetail->article_id = $rqst["article_id"];
            $articleDetail->presentation_id = $rqst["id"];
            $articleDetail->quantity = $rqst["quantity"];
            //$articleDetail->status = $rqst["status;
            //$articleDetail->user_insert_id = $rqst["user_insert_id;
            //$articleDetail->user_update_id = $rqst["user_update_id;
            $articleDetail->save();
        }

        $articleDescription = UpdateArticleDescriptionService::execute($articleId);

        return response()->json([
            'message' => 'Article detail created',
            'article_description' => $articleDescription,
        ], 201);
    }

}

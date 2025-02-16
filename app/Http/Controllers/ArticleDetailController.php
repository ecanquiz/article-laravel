<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Collection;
use App\Models\ArticleDetail;
use App\Repositories\ArticleDetailRepository;
use App\Http\Requests\ArticleDetail\{
    StoreArticleDetailRequest,
    UpdateArticleDetailRequest    
};
use App\Http\Services\ArticleDetail\{
    StoreArticleDetailService,
    UpdateArticleDetailService
}; 

class ArticleDetailController extends Controller
{
    /**
     * Display a listing of the resource by parent.
     */
    public function getAllByArticle(Request $request)//: Collection
    {
        return ArticleDetailRepository::getAllByArticle($request);
    }

    /**
     * Store a newly created resource in storage.
     */    
    //public function store(StoreArticleDetailRequest $request): JsonResponse
    public function store(Request $request): JsonResponse
    {
        //return  response()->json($request, 201);
        return StoreArticleDetailService::execute($request);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleDetailRequest $request, ArticleDetail $article_detail): JsonResponse
    {
        return UpdateArticleDetailService::execute($request, $article_detail);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): JsonResponse
    {
        ArticleDetail::destroy($request->id);

        return response()->json(204);            
    }
}

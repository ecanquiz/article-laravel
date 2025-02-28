<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
// use Illuminate\Database\Eloquent\Collection;
use App\Http\Services\ArticleDetail\{
    IndexArticleDetailService,
    DeleteArticleDetailService,
    StoreArticleDetailService
}; 

class ArticleDetailController extends Controller
{
    /**
     * Display a listing of the resource by parent.
     */
    public function getAllByArticle(Request $request): array
    {
        return IndexArticleDetailService::execute($request);
    }

    /**
     * Store a newly created resource in storage.
     */    
    public function store(Request $request): JsonResponse
    {
        return StoreArticleDetailService::execute($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): JsonResponse
    {
        return DeleteArticleDetailService::execute($request);
    }
}

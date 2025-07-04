<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\{Request, JsonResponse};
use Illuminate\Routing\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Requests\Article\{
    StoreArticleRequest,
    UpdateArticleRequest
};
use App\Http\Services\Article\{
    StoreArticleService,
    IndexArticleService,
    UpdateArticleService
};
use App\Models\Article;
//use Modules\Product\Entities\Presentation;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        return IndexArticleService::execute($request);
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(StoreArticleRequest $request): JsonResponse
    {
        return StoreArticleService::execute($request);
    }

    /**
     * Display the specified resource.
    */
    public function show(Article $article): ArticleResource | JsonResponse
    {
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */     
    public function update(UpdateArticleRequest $request, Article $article): JsonResponse
    {
        return UpdateArticleService::execute($request, $article);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): JsonResponse
    {      
        Article::destroy($request->id);
        return response()->json(204);
    }

    /*
     * Display a listing of the resource to help.
     */
    public function help(): JsonResponse
    {
        return response()->json(Article::all());
    }


    // TODO: Checking if it is being used or consumed this method from anywhere
    public function search(Request $request): JsonResponse
    {
        // Initialize query
        $query = Article::query()
            ->selectRaw("
                    articles.id,
                    articles.int_cod,
                    articles.name,
                    articles.price,
                    articles.stock_min,
                    articles.stock_max,
                    articles.status,
                    articles.images,
                    CASE WHEN view_stock_movement.total IS NULL THEN 0 ELSE view_stock_movement.total END as stock_existence")
                ->leftjoin("view_stock_movement"  , "articles.id"  , "=", "view_stock_movement.article_id");

        // search 
        $search = strtoupper($request->input("search"));
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query
                    ->where  (DB::raw("UPPER(articles.int_cod)"        ), "like", "%$search%")
                    ->orWhere(DB::raw("UPPER(articles.name)"  ), "like", "%$search%");
            });
        }

        // sort 
        $sort = $request->input("sort");
        $direction = $request->input("direction") === "desc" ? "desc" : "asc";        
        ($sort)
            ? $query->orderBy($sort, $direction) 
                : $query->orderBy("articles.id", "asc");

        // get paginated results 
        $presentations = $query
            ->paginate(5)
            ->appends(request()->query());

        return response()->json([
            "rows" => $presentations,
            "sort" => $request->query("sort"),
            "direction" => $request->query("direction"),
            "search" => $request->query("search")
        ]);
    }

    public function getArticlesSearchByCategories(Request $request): JsonResponse
    {
        $query = DB::table('articles')
        ->select('articles.id', 'int_cod', 'name', 'description')
        ->join('article_details', 'articles.id', '=', 'article_details.article_id');

        $categories = json_decode($request->categories);
        if ($categories){
            $query->whereIn('article_details.category', $categories);
        }

        $articleIds = json_decode($request->articleIds);
        if ($articleIds){
            $query->whereNotIn('article_details.article_id', $articleIds);
        }
        
        // search 
        $search = strtoupper($request->input("search"));
        if ($search) {
            $query->where(function ($query) use ($search) {
                //$query
                //->where  (DB::raw("UPPER(articles.int_cod)"), "like", "%$search%")
                //->orWhere(DB::raw("UPPER(articles.name)"), "like", "%$search%");
            });
        }

        // sort 
        $sort = $request->input("sort");
        $direction = $request->input("direction") === "desc" ? "desc" : "asc";        
        ($sort)
            ? $query->orderBy($sort, $direction) 
                : $query->orderBy("articles.id", "asc");

        // get paginated results 
        $articles = $query
            ->paginate(5)
            ->appends(request()->query());

        return response()->json([
            "rows" => $articles,
            "sort" => $request->query("sort"),
            "direction" => $request->query("direction"),
            "search" => $request->query("search"),
            "categories" => $request->query("categories"),
            "articleIds" => $request->query("articleIds")            
        ]);
    }
}

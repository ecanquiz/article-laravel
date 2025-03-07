<?php

namespace App\Http\Services\Article;

use Illuminate\Http\{
    Request,
    JsonResponse
};
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class IndexArticleService
{

  /**
   * Display a listing of the resource.
   */
  static public function execute(Request $request): JsonResponse
  {
      /* Initialize query */
        $query = Article::query();

        /* search */
        $search = strtolower($request->input("search"));
        //dd($search);
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query
                ->where(DB::raw('lower(int_cod)') , "like", "%$search%")
                ->orWhere(DB::raw('lower(name)') , "like", "%$search%")
                ->orWhere(DB::raw('lower(description)') , "like", "%$search%")
                //->orWhere(DB::raw('lower(status)') , "like", "%$search%")
                ;
            });
        }

        /* sort */
        $sort = $request->input("sort") ? $request->input("sort") : 'int_cod';
        $direction = $request->input("direction") == "asc" ? "asc" : "desc";
        if ($sort) {
            $query->orderBy($sort, $direction);
        }

        /* get paginated results */
        $articles = $query
            ->paginate(5)
            ->appends(request()->query());
            
        return response()->json([
            "rows" => $articles,
            "sort" => $request->query("sort"),
            "direction" => $request->query("direction"),
            "search" => $request->query("search")
        ]);

  }  

}

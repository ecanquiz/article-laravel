<?php

namespace App\Http\Services\ArticleDetail;

use Illuminate\Http\{
    Request,
    JsonResponse
};
use App\Models\ArticleDetail;
use App\Repositories\ArticleDetailRepository;

class IndexArticleDetailService
{
  static public function execute(Request $request)
  {
      $articleDetails = ArticleDetail::where('article_id', $request->articleId)->get();
      $articleDescription = ArticleDetailRepository::getDescriptionByArticle($articleDetails);      
     
      return [
          'article_details' => $articleDetails,
          'article_description' => $articleDescription
      ];
  }
}

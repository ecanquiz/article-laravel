<?php
namespace App\Http\Services\Article;

use Illuminate\Support\Facades\Auth;
use App\Models\{Article, ArticleDetail};
use App\Repositories\ArticleDetailRepository;

class UpdateArticleDescriptionService
{
    static public function execute(int $articleId): string 
    {
        $description = '';
        $article = Article::find($articleId);
        $articleDetails = ArticleDetail::where('article_id', $articleId)->get();
        $description = ArticleDetailRepository::getDescriptionByArticle($articleDetails);

        $article->id_user_update = Auth::user()->id;
        $article->description = $description;

        $article->save();

        return $description;      
    }
}

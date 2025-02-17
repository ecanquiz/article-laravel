<?php
namespace App\Http\Services\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Repositories\ArticleDetailRepository;

class UpdateArticleDescriptionService
{
    static public function execute(int $articleId): string 
    {
        $article = Article::find($articleId);
        $description = '';
        $description = ArticleDetailRepository::getDescriptionByArticle($article->id);
        $article->id_user_update = Auth::user()->id;
        $article->description = $description;

        $article->save();

        return $description;      
    }
}


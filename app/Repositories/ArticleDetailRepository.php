<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ArticleDetail;

class ArticleDetailRepository extends ArticleDetail
{
    
    static public function getAllByArticle(Request $request)//: Collection
    {
        $articleDescription = '';
        $articleDetails = ArticleDetail::where('article_id', $request->articleId)->get();

        if($articleDetails->count() > 0) {
            foreach ($articleDetails as $key => $value) {                
                $response = Http::withToken(config('api.product.shared_token'))->get( config('api.product.url') . '/api/presentations/' . $value['presentation_id'] . '/only-one')[0];
    
                $articleDetails[$key]['bar_cod'] = $response['bar_cod'];
                $articleDetails[$key]['category'] = $response['category'];
                $articleDetails[$key]['mark'] = $response['mark'];
                $articleDetails[$key]['product'] = $response['product'];
                $articleDetails[$key]['packing_deployed'] = $response['packing_deployed'];
                // $articleDetails[$key]['photo_path'] = $response['photo_path'];                
                
                $articleDescription 
                    .= $response['bar_cod']
                    . ', ' . $response['category']
                    . ', ' . $response['product']
                    . ', ' . $response['mark']
                    . ', ' . $response['packing_deployed']
                    . ', Cantidad: ' . $value['quantity']
                    . ' | ';
            }
        }

        return [
            'article_details' => $articleDetails,
            'article_description' => strlen($articleDescription) ? substr($articleDescription, 0, -3) : $articleDescription
        ];
    }

    static public function getDescriptionByArticle(int $articleId)//: Collection
    {
        $articleDescription = '';
        $articleDetails = ArticleDetail::where('article_id', $articleId)->get();

        if($articleDetails->count() > 0) {
            foreach ($articleDetails as $key => $value) {
                $response = Http::withToken(config('api.product.shared_token'))->get(config('api.product.url') . '/api/presentations/' . $value['presentation_id'] . '/only-one')[0];
    
                $articleDescription 
                  .= $response['bar_cod']
                  . ', ' . $response['category']
                  . ', ' . $response['product']
                  . ', ' . $response['mark']
                  . ', ' . $response['packing_deployed']
                  . ', Cantidad: ' . $value['quantity']
                  . ' | ';
            }
        }        

        return strlen($articleDescription) ? substr($articleDescription, 0, -3) : $articleDescription;
    }
    
}

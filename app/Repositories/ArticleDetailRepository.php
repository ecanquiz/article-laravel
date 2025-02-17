<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\ArticleDetail;

class ArticleDetailRepository extends ArticleDetail
{
    
    static public function getAllByArticle($request)//: Collection
    {
        $articleDetails = ArticleDetail::where('article_id', $request->articleId)->get();

        foreach ($articleDetails as $key => $value) {
            $response = Http::get("http://localhost:8002/api/" . 'presentations/' . $value['presentation_id'])[0];

            $articleDetails[$key]['bar_cod'] = $response['bar_cod'];
            $articleDetails[$key]['category'] = $response['product']['category']['name'];
            $articleDetails[$key]['product'] = $response['product']['name'];
            $articleDetails[$key]['mark'] = $response['product']['mark']['name'];
            $articleDetails[$key]['packing_deployed'] = $response['packing_deployed'];           
            
            /* $response = Presentation::select(
                DB::raw("* ,presentation_deploy(presentations.id) as packing_deployed")
            )->find($value['presentation_id']);
            $articleDetails[$key]['bar_cod'] = $response['bar_cod'];
            $articleDetails[$key]['category'] = $response['product']['category']['name'];
            $articleDetails[$key]['product'] = $response['product']['name'];
            $articleDetails[$key]['mark'] = $response['product']['mark']['name'];
            $articleDetails[$key]['packing_deployed'] = $response['packing_deployed'];*/
        }

        return $articleDetails;
    }

    static public function getDescriptionByArticle(int $articleId)//: Collection
    {
        $articleDetails = ArticleDetail::where('article_id', $articleId)->get();
        $articleDescription = '';

        foreach ($articleDetails as $key => $value) {
            $response = Http::get("http://localhost:8002/api/" . 'presentations/' . $value['presentation_id'])[0];

            $articleDescription 
              .= $response['bar_cod']
              . ', ' . $response['product']['category']['name']
              . ', ' . $response['product']['name']
              . ', ' . $response['product']['mark']['name']
              . ', ' . $response['packing_deployed']
              . ' | ';
        }

        return strlen($articleDescription) ? substr($articleDescription, 0, -3) : $articleDescription;
    }
    
}

//packing
//product

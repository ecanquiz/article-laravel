<?php
namespace App\Http\Services\Article;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Article\StoreArticleRequest;
use App\Models\Article;
use App\Utils\ArrayTypeString;


class StoreArticleService
{
    static public function execute(StoreArticleRequest $request): JsonResponse
    {
        $article = new Article;

        $article->name = $request->name;
        //$article->description = $request->description;
        $article->status = $request->status;
        //$article->images = json_decode($request->images);


        /*$images = [];

        foreach($request->images as $image){
          $images[] = $image;
        }

        $article->images = json_encode($images);*/

        //dd($request->images);

        /*$imagesString = '{' . implode(',', array_map(function($image) {
            return "'$image'"; // Make sure to wrap each URL in single quotes
        }, $request->images)) . '}';*/

        $imagesString = ArrayTypeString::execute($request->images, true);


        $article->images = $imagesString;



        $article->id_user_insert = Auth::user()->id;
        $article->id_user_update = Auth::user()->id;
        
        $article->save();

        $article->refresh();

        return response()->json([
            "message" => "New record created successfully", 
            "id" => $article->id
        ], 201);
  }

}
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    AuthMenuController,
    UserController,
    TokenController,
    AvatarController,
    MenuController,
    RoleController,
    ArticleController,
    ArticleDetailController
};

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/


Route::post('/sanctum/token', TokenController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    //Route::prefix('users')->middleware(['role:admin'])->group(function () {
    Route::prefix('users')->group(function () {
       Route::get('/auth', AuthController::class);
       Route::get('/auth-menu', AuthMenuController::class);
       Route::get('/{user}', [UserController::class, 'show']);        
       Route::get('/', [UserController::class, 'index']);
       Route::post('/', [UserController::class, 'store']);
       Route::post('/{user}', [UserController::class, 'update']);
       Route::delete('/{id}', [UserController::class,'destroy']);
       Route::post('/auth/avatar', [AvatarController::class, 'store']);
    });
       
    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index']);
        Route::get('/children/{menuId}', [MenuController::class, 'children']);
        Route::post('/', [MenuController::class, 'store']);  
        Route::put('/{menu}', [MenuController::class, 'update']);
        Route::delete('/{id}', [MenuController::class,'destroy']);
    });
   
    Route::prefix('roles')->group(function () {
        Route::get('/helperTables', fn() => response()->json([
            "roles" => \App\Models\Role::get()
        ], 200));
        Route::get('/{role}', [RoleController::class, 'show']);
        Route::get('/', [RoleController::class, 'index']);       
        Route::post('/', [RoleController::class, 'store']);        
        Route::put('/{role}', [RoleController::class, 'update']);
        Route::delete('/{id}', [RoleController::class,'destroy']);        
    });

    Route::prefix('articles')->group(function () {
        Route::get('/', [ArticleController::class, 'index']);
        Route::get('/{article}', [ArticleController::class, 'show']);
        Route::post('/', [ArticleController::class, 'store']);
        Route::put('/{article}', [ArticleController::class, 'update']);
        Route::delete('/{id}', [ArticleController::class,'destroy']);

    });
    Route::get('/articles-help', [ArticleController::class, 'help']);
    
    Route::prefix('article_details')->group(function () {  
        Route::get('/{articleId}', [ArticleDetailController::class, 'getAllByArticle']);
        Route::get('/{article_detail}', [ArticleDetailController::class, 'show']);
        Route::post('/', [ArticleDetailController::class, 'store']);
        Route::put('/{article_detail}', [ArticleDetailController::class, 'update']);
        Route::delete('/{id}', [ArticleDetailController::class,'destroy']);
    });    
});

Route::get('/articles-search', [ArticleController::class,'search']);

Route::prefix('error')->group(function () {
    Route::get('/not-auth', function(){        
        abort(403, 'This action is not authorized.');        
    });

    Route::get('/not-found', function(){        
        abort(404, 'Page not found.');        
    });

    Route::get('/', function(){        
        abort(500, 'Something went wrong');        
    });
    /*Route::get('/custom', function(){
        throw new \App\Exceptions\CustomException('Error: Levi Strauss & CO.', 501);
    });*/
});
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ArticleDetail;

class ArticleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        
        //for ($x = 0; $x < 10; $x++) {
        //    ArticleDetail::factory()
        //        ->hasArticleDetails(1)
        //        ->create();
        //}


        ArticleDetail::create([
            "article_id" => 1,
            "presentation_id" => 1,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "N/A",
            "packing_deployed" => "CUÑETE(S) DE 18.92 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 2,
            "presentation_id" => 2,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "N/A",
            "packing_deployed" => "GALÓN(ES) DE 3.78 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 3,
            "presentation_id" => 3,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "N/A",
            "packing_deployed" => "GALÓN(ES) DE 1.89 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 4,
            "presentation_id" => 4,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "N/A",
            "packing_deployed" => "GALÓN(ES) DE 0.94 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 5,
            "presentation_id" => 5,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MONTANA",
            "packing_deployed" => "CUÑETE(S) DE 18.92 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 6,
            "presentation_id" => 6,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MONTANA",
            "packing_deployed" => "GALÓN(ES) DE 3.78 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 7,
            "presentation_id" => 7,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MONTANA",
            "packing_deployed" => "GALÓN(ES) DE 1.89 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 8,
            "presentation_id" => 8,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MONTANA",
            "packing_deployed" => "GALÓN(ES) DE 0.94 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 9,
            "presentation_id" => 9,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MANPICA",
            "packing_deployed" => "CUÑETE(S) DE 18.92 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);


        ArticleDetail::create([
            "article_id" => 10,
            "presentation_id" => 10,
            "category" => "PINTURAS / EXTERIORES",
            "product" => "BLANCO TRÁFICO",
            "mark" => "MANPICA",
            "packing_deployed" => "GALÓN(ES) DE 3.78 Litro(s)",
            "quantity" => 1,
            "created_at" => now(),
            "updated_at" => now()
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class ArticleSeeder extends Seeder
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

        
        Article::create([
            "name" => "CUÑETE DE PINTURA EXTERIORES BLANCO TRÁFICO",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "GALÓN DE PINTURA EXTERIORES BLANCO TRÁFICO",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "MEDIO GALÓN DE PINTURA EXTERIORES BLANCO TRÁFICO",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "QUARTO DE GALÓN DE PINTURA EXTERIORE BLANCO TRÁFICO",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "CUÑETE DE PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "GALÓN DE PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "MEDIO GALÓN DE PINTURAS EXTERIORES, BLANCO TRÁFICO, MONTANA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "QUARTO DE GALÓN PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "CUÑETE DE PINTURA EXTERIORES, BLANCO TRÁFICO, MANPICA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Article::create([
            "name" => "GALÓN DE PINTURA EXTERIORES, BLANCO TRÁFICO, MANPICA",
            "photo" => "abc",
            "description" => "PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1",
            "created_at" => now(),
            "updated_at" => now()
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Utils\ArrayTypeString;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $imageNames = [
        'pineapple-dried.jpg',
        'pineapple-gum.jpg',
        'pineapple-original.jpg',
        'pineapple-tshirt.jpg'
    ];

    public function run()
    {
        // Another example:
        // $imageNamesString = '{' . implode(',', $this->imageNames) . '}';
        // DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) 
        //                VALUES ('CUÑETE DE PINTURA PARA EXTERIORES BLANCO TRÁFICO.', '$imageNamesString', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");

        //$imageNamesString = 'ARRAY[' . implode(',', array_map(function($image) {
        //    return "'$image'"; // Make sure to wrap each URL in single quotes
        //}, $this->imageNames)) . ']';

        $imageNamesString = ArrayTypeString::execute($this->imageNames);

        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PARA EXTERIORES BLANCO TRÁFICO.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE PINTURA PARA EXTERIORE BLANCO TRÁFICO.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PA EXTERIORES BLANCO TRÁFICO MONTANA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO MONTANA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO MONTANA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN PINTURA PARA EXTERIORES BLANCO TRÁFICO MONTANA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PARA  EXTERIORES BLANCO TRÁFICO MANPICA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO MANPICA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN PINTURA PARA EXTERIORES BLANCO TRÁFICO MANPICA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE PINTURA PARA EXTERIORES BLANCO TRÁFICO MANPICA.', $imageNamesString, 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PARA INTERIORES BLANCO OSTRA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN PINTURAS PARA INTERIORES BLANCO OSTRA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PARA INTERIORES BLANCO OSTRA MONTANA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MONTANA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA MONTANA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MONTANA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN PINTURA PARA INTERIORES BLANCO OSTRA MONTANA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MONTANA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA MONTANA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MONTANA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE PINTURA PARA INTERIORES BLANCO OSTRA MANPICA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MANPICA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA MANPICA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MANPICA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE PINTURA PARA INTERIORES, BLANCO OSTRA MANPICA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MANPICA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE PINTURA PARA INTERIORES BLANCO OSTRA MANPICA.', $imageNamesString, 'PINTURAS / INTERIORES, BLANCO OSTRA, MANPICA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE SELLADOR GRIS.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE SELLADOR GRIS.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE SELLADOR GRIS.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE SELLADOR GRIS.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE SELLADOR GRIS MONTANA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MONTANA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE SELLADOR GRIS MONTANA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MONTANA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE SELLADOR GRIS MONTANA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MONTANA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE SELLADOR GRIS MONTANA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MONTANA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUÑETE DE SELLADOR GRIS MANPICA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MANPICA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('GALÓN DE SELLADOR GRIS MANPICA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MANPICA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('MEDIO GALÓN DE SELLADOR GRIS MANPICA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MANPICA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('CUARTO DE GALÓN DE SELLADOR GRIS MANPICA.', $imageNamesString, 'PINTURAS / OTROS, SELLADOR GRIS, MANPICA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('PAQUETE DE JABON DE BARRA 110 GRAMOS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, JABON DE BARRA, PAQUETE(S) DE 110 Gramo(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('PAQUETE DE JABON DE BARRA PROTEX 110 GRAMOS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, JABON DE BARRA, PROTEX, PAQUETE(S) DE 110 Gramo(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('PAQUETE DE JABON DE BARRA REXONA 110 GRAMOS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, JABON DE BARRA, REXONA, PAQUETE(S) DE 110 Gramo(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE DESODORANTE ROLLON 90 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, DESODORANTE ROLLON, POTE(S) DE 90 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE DESODORANTE ROLLON REXONA 90 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, DESODORANTE ROLLON, REXONA, POTE(S) DE 90 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE  DESODORANTE ROLLON EVERY NIGHT 90 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, DESODORANTE ROLLON, EVERY NIGHT, POTE(S) DE 90 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE SHAMPOO 200 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, SHAMPOO, POTE(S) DE 200 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE  SHAMPOO EVERY NIGHT 200 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, SHAMPOO, EVERY NIGHT, POTE(S) DE 200 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('POTE DE SHAMPOO PANTENE 200 MILILITROS.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / ASEO PERSONAL, SHAMPOO, PANTENE, POTE(S) DE 200 Mililitro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE DETERGENTE LÍQUIDO 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DETERGENTE LÍQUIDO, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE DETERGENTE LÍQUIDO LAVANSAN 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DETERGENTE LÍQUIDO, LAVANSAN, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE  DETERGENTE LÍQUIDO LAS LLAVES 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DETERGENTE LÍQUIDO, LAS LLAVES, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE DESINFECTANTE 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DESINFECTANTE, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE DESINFECTANTE LAVANSAN 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DESINFECTANTE, LAVANSAN, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('FRASCO DE DESINFECTANTE LAS LLAVES 1 LITRO.', $imageNamesString, 'PRODUCTOS DE LIMPIEZA / HIGIENE DEL HOGAR, DESINFECTANTE, LAS LLAVES, FRASCO(S) DE 1 Litro(s), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('ALICATE CHANNELLOCK.', $imageNamesString, 'HERRAMIENTAS, ALICATE, CHANNELLOCK, 1 Unidad(es), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('ALICATE STANLEY.', $imageNamesString, 'HERRAMIENTAS, ALICATE, STANLEY, 1 Unidad(es), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('ALICATE.', $imageNamesString, 'HERRAMIENTAS, ALICATE, 1 Unidad(es), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('DESTORNILLADOR GEDORE.', $imageNamesString, 'HERRAMIENTAS, DESTORNILLADOR, GEDORE, 1 Unidad(es), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('DESTORNILLADOR BOSCH.', $imageNamesString, 'HERRAMIENTAS, DESTORNILLADOR, BOSCH, 1 Unidad(es), Cantidad: 1', now(), now())");
        DB::statement("INSERT INTO public.articles(name, image_names, description, created_at, updated_at) VALUES ('DESTORNILLADOR.', $imageNamesString, 'HERRAMIENTAS, DESTORNILLADOR, 1 Unidad(es), Cantidad: 1', now(), now())");
    }
}

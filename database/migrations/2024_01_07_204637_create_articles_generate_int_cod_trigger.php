<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesGenerateIntCodTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE OR REPLACE FUNCTION public.articles_generate_int_cod()
                RETURNS trigger
                LANGUAGE 'plpgsql'
                COST 100
                VOLATILE NOT LEAKPROOF
            AS \$BODY\$
            BEGIN
                  NEW.int_cod:=lpad(cast(NEW.id as character varying),10,'0');
                  return NEW;
                END;
            \$BODY\$;

            ALTER FUNCTION public.articles_generate_int_cod()
                OWNER TO postgres;        
        ");
        
        DB::unprepared("                
            CREATE TRIGGER article_generate_int_cod
                BEFORE INSERT
                ON public.articles
                FOR EACH ROW
                EXECUTE PROCEDURE public.articles_generate_int_cod();         
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("
            DROP TRIGGER article_generate_int_cod ON public.articles                      
        ");
        
        DB::unprepared("
            DROP FUNCTION public.articles_generate_int_cod();            
        ");
    }
}

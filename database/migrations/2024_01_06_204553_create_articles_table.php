<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();            
            $table->string('int_cod', 15);
            $table->string('name',100);
            $table->integer('status')->default(1);
            //$table->string('photo')->default('');
            //$table->jsonb('photo')->default(json_encode([]));
            //$table->addColumn('text[]', 'photos')->default('{}');
            $table->text('images')->nullable(); // Create initially as text
            $table->text('description')->default('');     
            $table->integer('id_user_insert')->default(1);
            $table->integer('id_user_update')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });

        // Later converted to text[]
        DB::statement('ALTER TABLE articles ALTER COLUMN images TYPE text[] USING images::text[]');
        DB::statement("ALTER TABLE articles ALTER COLUMN images SET DEFAULT '{}'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

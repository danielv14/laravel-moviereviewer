<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('movies', function(Blueprint $table) {
         $table->string('movieTitle')->default('default_value');
         $table->string('imdbLink')->default('default_value');
         $table->string('rottenLink')->default('default_value');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('movies', function($table) {
         $table->dropColumn('movieTitle');
         $table->dropColumn('imdbLink');
         $table->dropColumn('rottenLink');

      });
    }
}

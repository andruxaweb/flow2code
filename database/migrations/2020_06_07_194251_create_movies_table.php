<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
          $table->increments('id');
          $table->string('Title');
          $table->string('Genre');
          $table->binary('Cover');
          $table->Text('Description');
          $table->string('ProdCountry');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //php artisan migrate: rollback (1 step back)
     //php artisan migrate: rollback --step 2(2 steps back)
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}

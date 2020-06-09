<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMOviessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_oviesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Gender');
            $table->string('cover');
            $table->string('descriprion');
            $table->string('prodCountry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_oviesses');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieTributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_tributes', function (Blueprint $table) {
            $table->id();

            $table->string('cDescricao')->null();
            $table->integer('cIdTrib')->null();
            $table->string('cTipo')->null();
            
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
        Schema::dropIfExists('omie_tributes');
    }
}

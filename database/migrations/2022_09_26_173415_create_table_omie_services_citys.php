<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOmieServicesCitys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omie_services_citys', function (Blueprint $table) {
            $table->id();

            $table->string('cCidade')->null();
            $table->decimal('cCodServLC116',18,2)->null();
            $table->string('cCodServMun')->null();
            $table->string('cDescrCompleta')->null();
            $table->string('cDescricao')->null();
            $table->integer('nIdCodServMun')->null();
            
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
        Schema::dropIfExists('omie_services_citys');
    }
}

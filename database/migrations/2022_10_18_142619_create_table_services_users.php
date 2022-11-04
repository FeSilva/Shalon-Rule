<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableServicesUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->index()->unique();
            $table->bigInteger('user_id')->index()->unique();
            $table->decimal('amount_for_personal', 10,2);
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
        Schema::dropIfExists('services_users');
    }
}

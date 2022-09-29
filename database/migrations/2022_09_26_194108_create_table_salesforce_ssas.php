<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceSsas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_ssa_contracts', function (Blueprint $table) {
            $table->id();

            $table->string('ssa_id')->null();
            $table->string('account_id');
            $table->date('ssa_start_date')->null();
            $table->date('ssa_end_date')->null();
            $table->string('active')->null();
            $table->date('next_poss_expo_date')->null();
            $table->string('status')->null();

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
        Schema::dropIfExists('salesforce_ssas');
    }
}

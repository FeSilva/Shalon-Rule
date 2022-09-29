<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceKeyplugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_keyplugs', function (Blueprint $table) {
            $table->id();

            $table->string('keyplug_id')->null();
            $table->string('ssa_id')->null();
            $table->string('account_id');
            $table->string('name')->null();
            $table->string('amount')->null();
            $table->string('key_type')->null();

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
        Schema::dropIfExists('salesforce_keyplugs');
    }
}

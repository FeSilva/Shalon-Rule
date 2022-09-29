<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceLicenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_licenses', function (Blueprint $table) {
            $table->id();

            $table->string('license_id')->null();
            $table->string('account_id');
            $table->date('expire_date')->null();
            $table->string('key_plug')->null();
            $table->string('name')->null();
            $table->date('purchase_date')->null();
            $table->string('product_code')->null();
            $table->string('user_type')->null();
            $table->string('active')->null();

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
        Schema::dropIfExists('salesforce_licenses');
    }
}

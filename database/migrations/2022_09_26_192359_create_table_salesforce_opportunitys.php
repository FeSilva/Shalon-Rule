<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceOpportunitys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_opportunitys', function (Blueprint $table) {
            $table->id();

            $table->string('opportunity_id')->null();
            $table->string('account_id');
            $table->string('opportunity_number')->null();
            $table->string('name')->null();
            $table->decimal('amount',10,2)->null();
            $table->decimal('old_amount',10,2)->null();
            $table->date('close_date')->null();
            $table->string('old_account_owner')->null();
            $table->string('owner_id')->null();
            $table->string('description')->null();
            $table->string('currency_iso_code')->null();
            $table->string('forecast_category')->null();
            $table->string('stage_name')->null();

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
        Schema::dropIfExists('salesforce_opportunitys');
    }
}

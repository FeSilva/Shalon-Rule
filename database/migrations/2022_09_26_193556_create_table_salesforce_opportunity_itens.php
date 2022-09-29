<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceOpportunityItens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_opportunity_itens', function (Blueprint $table) {
            $table->id();

            $table->string('opportunity_item_id')->null();
            $table->string('opportunity_id')->null();
            $table->string('item_id')->null();
            $table->string('item_code')->null();
            $table->string('name')->null();
            $table->string('description')->null();
            $table->string('quantity')->null();
            $table->decimal('total_price',10,2)->null();

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
        Schema::dropIfExists('salesforce_opportunity_itens');
    }
}

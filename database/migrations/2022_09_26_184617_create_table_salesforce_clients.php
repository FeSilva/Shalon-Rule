<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_clients', function (Blueprint $table) {
            $table->id();

            $table->string('account_id');
            $table->string('ref_id')->null();
            $table->integer('parent_id')->null();
            $table->integer('end_user_id')->null();
            $table->string('name')->null();
            $table->string('tax_id')->null();
            $table->string('phone')->null();
            $table->string('client_type')->null();
            $table->json('shipping_address')->null();
            $table->json('billing_address')->null();
            $table->date('first_purchase_date')->null();
            $table->string('payment_method')->null();
            $table->string('onwer_link')->null();
            $table->string('status')->null();
            $table->string('authentication_key')->null();
            $table->date('last_purchase_date')->null();
            $table->string('account_full_legal_name')->null();

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
        Schema::dropIfExists('salesforce_clients');
    }
}

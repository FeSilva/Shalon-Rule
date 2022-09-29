<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalesforceContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesforce_contacts', function (Blueprint $table) {
            $table->id();

            $table->string('contact_id')->null();
            $table->string('account_id');
            $table->string('name')->null();
            $table->string('email')->null();
            $table->string('phone_mobile')->null();
            $table->string('owner_id')->null();
            $table->string('end_user_id')->null();
            $table->string('authentication_key')->null();

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
        Schema::dropIfExists('salesforce_contacts');
    }
}

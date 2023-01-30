<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table->string('Requested_by',100);
            $table->string('Recipient_name',50);
            $table->string('Date_request',20);
            $table->string('blood_type',5);
            $table->string('bags',20);
            $table->string('amount',150);
             $table->string('purpose',20);
             $table->string('remarks',10);
             $table->string('action',30);
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
        Schema::dropIfExists('blood_requests');
    }
};

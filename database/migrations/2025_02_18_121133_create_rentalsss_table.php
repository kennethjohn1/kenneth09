<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rentalsss', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("rental_id");
            $table->unsignedBigInteger("customer_id");
            $table->date("return_date");
            $table->decimal("total_price",10,2);
            $table->decimal("deposite",10,2);
            $table->decimal("penalty",10,2);
            $table->enum("status",["pending","return"])->default("pending");
            $table->enum("paystatus",["paid","unpaid"])->default("paid");
            $table->unsignedBigInteger("user_id");

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentalsss');
    }
};

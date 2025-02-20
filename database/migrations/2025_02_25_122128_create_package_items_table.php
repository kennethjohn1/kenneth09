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
        Schema::create('package_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("packages_item_id");
            $table->unsignedBigInteger("item_id");
            $table->unsignedBigInteger("package_id");
            $table->integer("item_quantity");

            $table->foreign("packages_item_id")->references("id")->on("packages")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_items');
    }
};

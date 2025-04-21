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
        Schema::create('sub_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('service_id');
            $table->double('main_price',8,2)->nullable()->default(0);
            $table->integer('default_day')->nullable()->default(0);
            $table->double('transport_price',6,2)->nullable()->default(0);
            $table->double('accommodation_price',6,2)->nullable()->default(0);
            $table->double('food_price',6,2)->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_services');
    }
};

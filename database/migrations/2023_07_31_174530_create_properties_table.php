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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->string('property_status')->nullable();
            $table->string('lowest_price');
            $table->string('max_price');
            $table->enum('currency', ['Bs', '$us'])->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('short_description');
            $table->text('long_description');
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('size')->nullable();
            $table->string('video')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('featured')->nullable();
            $table->string('hot')->nullable();
            $table->unsignedBigInteger('propertytype_id');
            $table->string('amenities_id')->nullable();
            $table->integer('agent_id');
            $table->integer('created_by');
            $table->string('status')->default(0);
            $table->foreign('propertytype_id')->references('id')->on('property_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

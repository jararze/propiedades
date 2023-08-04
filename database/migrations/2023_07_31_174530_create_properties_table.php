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
            $table->enum('is_project',[0, 1]);
            $table->string('property_status')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('project_status')->nullable();
            $table->date('delivery')->nullable();
            $table->integer('units')->nullable();
            $table->date('construction_Date')->nullable();
            $table->string('lowest_price');
            $table->string('max_price')->nullable();
            $table->enum('currency', ['Bs', '$us'])->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('short_description');
            $table->text('long_description');
            $table->string('bedrooms')->nullable();
            $table->string('bedrooms_max')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('bathrooms_max')->nullable();
            $table->string('garage')->nullable();
            $table->string('garage_max')->nullable();
            $table->string('garage_size')->nullable();
            $table->string('garage_size_max')->nullable();
            $table->string('size')->nullable();
            $table->string('size_max')->nullable();
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

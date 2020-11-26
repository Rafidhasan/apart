<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('city');
            $table->string('state');
            $table->string('road_no');
            $table->string('house_no');
            $table->string('status')->nullable();
            $table->string('area');
            $table->string('beds');
            $table->string('baths');
            $table->string('garage');
            $table->string('amount');
            $table->boolean('balcony')->default(0);
            $table->boolean('parking')->default(0);
            $table->boolean('deck')->default(0);
            $table->mediumText('property_image');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}

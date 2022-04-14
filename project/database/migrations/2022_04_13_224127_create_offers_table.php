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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('OfferTitle');
            $table->string('Departement');
            $table->boolean('Remote')->default(true);
            $table->string('EploymentType');
            $table->string('SalaryRange');
            $table->text('Requirement');
            $table->string('Image');
            $table->text('WhoWeAre');
            // $table->integer('UserId');
            // $table->foreign('UserId')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('offers');
    }
};

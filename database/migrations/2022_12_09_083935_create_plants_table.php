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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('link_image');
            $table->text('name');
            $table->text('botanic_name');
            $table->text('family');
            $table->text('type');
            $table->text('rating');
            $table->text('description');
            $table->text('how_plant');
            $table->text('care_plant');
            $table->text('pest_disease');
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
        Schema::dropIfExists('plants');
    }
};
